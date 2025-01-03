# ![VERN](public/images/logo.png)

## Vehicle Rental

Project made for Web Programming course, available to test on [vern.dta32.my.id](https://vern.dta32.my.id)

### How to install

This project use PostgreSQL as Database, please make sure you have PostgreSQL installed and running on your computer

Execute these lines in your terminal

1. `composer install`
1. `npm install`
1. `cp .env.example .env`
1. edit .env
1. `php artisan migrate`
1. `php artisan db:seed`
1. `php artisan storage:link`

After executing those lines, run `php artisan serve` and `npm run dev` simultaneously (use two terminal)

To access the web, please use `localhost:8000` rather than 127.0.0.1 as specific url (localhost) is required by some packages

### Docker setup

For quick preview, image is available on docker hub and can be pulled by `docker pull dta32/vern:latest` then step 2-3, but it's based on main branch, so if there's code changes can do step 1 first

1. `docker build -t dta32/vern .`
1. `cp .env.example .env` (then edit accordingly)
1. `docker run -d -p {externalPort}:8080 --env-file .env dta32/vern:latest`

Re-run these steps if there's any code changes

Can also use docker compose, it will autorun vern and database

1. Step 1 and 2 on previous instructions
1. `docker compose up -d`

### Default user

(make sure u have done db:seed)

- Normal user:

Email: <user2@email.com>

Password: 1234

- Admin

Email: <admin@gmail.com>

Password: adminadmin

### Disclaimer

1. ~~Order yang dibayar menggunakan midtrans statusnya akan selalu berada di menunggu pembayaran karena ada code yang hanya dapat berjalan di production~~
1. Mohon gunakan email asli pada detail pemesanan dan forgot password, karena akan ada email yang dikirimkan ke email tersebut
