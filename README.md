# ![VERN](public/images/logo.png)

## Vehicle Rental

Project made for Web Programming course, available to test on [vern.dta32.my.id](https://vern.dta32.my.id)

### How to install

This project use PostgreSQL as Database, please make sure you have PostgreSQL installed and running on your computer

Execute these lines in your terminal

1. `composer install`
1. `npm install`
1. `php artisan env:decrypt --key=[DECRYPTION_KEY]`
1. `php artisan migrate`
1. `php artisan db:seed`
1. `php artisan storage:link`

Obtain key to decrypt env by asking DTA32

After executing those lines, run `php artisan serve` and `npm run dev` simultaneously (use two terminal)

To access the web, please use `localhost:8000` rather than 127.0.0.1 as specific url (localhost) is required by some packages

### Docker setup

If you're intending to deploy to staging/production, or just to show off this project (not needing hot reload or any development features), you can use docker

First step is to setup .env, two options, for staging/production can ask DTA32 for some tokens, for minimal config without google, mail, midtrans can use .env.example (execute `cp .env.example .env`)

1. `docker compose up -d`
1. `./docker-setup-db.sh` (for first time)

Then access server on `localhost:7000`

Any changes made might need to re-run `docker build`

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
