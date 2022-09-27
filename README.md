## About
A system to manage bids with features such as:

- Storing Bid Information
- Storing competitor prices
- Keeping track of ongoing bids
- Showing dates of submissions and information sessions

## Installation

- Clone the repo
- Copy and rename .env.example to .env and set DB_DATABASE
- Create the database
- Use php ^7.3
- Run the commands:
**composer install**
**php artisan key:generate**
**php artisan migrate:fresh --seed**
**php artisan serve**
- go to the url /login of the app
- login using:
Email: **admin@example.com**
Password: **password**
