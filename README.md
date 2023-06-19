# Contact Page Application

This is a simple Symfony web application that serves as a contact page. It's designed to allow users to send messages which are then stored in a database and can be accessed by the site administrator.

## Installation

Follow these steps to install and run the Contact Page application:

1. First, clone this repository onto your local machine. 

2. Navigate into the project directory:
```
cd /path/to/your/project
```
3. Copy the `.env` file to `.env.local` and fill the necessary database information:
```
cp .env .env.local
```
4. Use composer to install necessary dependencies:
```
composer install
```
5. Create the database and its schema:
```
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```
6. Run the migrations:
```
php bin/console doctrine:migrations:migrate
```
7. Load the fixtures:
```
php bin/console doctrine:fixtures:load
```
8. Install the npm packages:
```
npm install
```
9. Start the Symfony server:
```
symfony server:start
```
10. Run Webpack Encore:
```
npm run dev
```
11. Create the admin user with the default password "password":
```
php bin/console app:create-admin
```
You should now be able to access the application on your local machine. Navigate to `http://localhost:8000` (or the URL provided by your Symfony server) in your web browser to use the application.

For any additional help or queries, please feel free to contact me.
