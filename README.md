# ![VERN](public/images/logo.png)

## Vehicle Rental

### How to install

This project use PostgreSQL as Database, please make sure you have PostgreSQL installed and running on your computer

Execute these lines in your terminal

1. `composer install`
1. `npm install`
1. `php artisan env:decrypt --key=base64:cVuY9nkwttR/xQaBj3GO3uVVll5X5RhMNzAu5rLoI7Y=`
1. `php artisan migrate`
1. `php artisan db:seed`
1. `php artisan storage:link`

After executing those lines, run `php artisan serve` and `npm run dev` simultaneously (use two terminal)

To access the web, please use `localhost:8000` rather than 127.0.0.1 as specific url (localhost) is required by some packages

### Default user

(make sure u have done db:seed)

- Normal user:

Email: <user2@email.com>

Password: 1234

- Admin

Email: <admin@gmail.com>

Password: adminadmin

### Disclaimer

1. Login using google hanya bisa digunakan oleh email tertentu karena status project masih dalam tahap testing di Google Console, mohon gunakan login yang biasa
2. Order yang dibayar menggunakan midtrans statusnya akan selalu berada di menunggu pembayaran karena ada code yang hanya dapat berjalan di production
3. Mohon gunakan email asli pada detail pemesanan dan forgot password, karena akan ada email yang dikirimkan ke email tersebut
