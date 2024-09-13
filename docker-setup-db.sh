#!/bin/bash

# Create the user with read and write access to the database
docker exec vern-db psql -U postgres -c "CREATE USER vern WITH PASSWORD 'vern';"
docker exec vern-db psql -U postgres -c "CREATE DATABASE vern;"
docker exec vern-db psql -U postgres -c "GRANT ALL PRIVILEGES ON DATABASE vern TO vern;"
docker exec vern-db psql -U postgres -c "ALTER DATABASE vern OWNER TO vern;"

# Execute Laravel migrations and seed the database
docker exec vern php artisan key:generate --force
docker exec vern php artisan migrate --seed --force
