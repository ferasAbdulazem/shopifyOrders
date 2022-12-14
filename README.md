# Vehicle Rental

-   **By:** Feras Abdulazem <feras.abdulazem@gmail.com>
-   **URLs:**
    -   Laravel-App: https://wb-laravel.ferasdev.com
    -   Shopify-Store: https://wb-store.ferasdev.com

## Requirements

-   NodeJS PHP8+
-   MySQL 5.7+

**Key Technologies:** [Laravel 9](https://laravel.com/), [Shopify REST-API](https://shopify.dev/api/admin-rest)

### Folder Structure

This App uses the current folder structure of Laravel. look [here](https://laravel.com/docs/9.x/structure) for details from the official documentation

### Installation (DEV)

-   create env file and enter your MySQL credentials

```bash
cp .env.example .env
```

update the .env file with your sql server credentials

-   install dependencies

```bash
composer install
```

-   create the database

```bash
mysql -uMY_USER -p
```

```bash
CREATE DATABASE shopifyOrders;
```

It's also recommended to create new SQL user for this project

-   start dev server

```bash
php artisan serve
```

-   run migrations

```bash
php artisan migrate
```

## Known Problems

-   Shopify Webhooks: I started setting up the to register Webhooks in Shopify. However at the moment the Shopify client lip
    (shopify-api-php) throws a PHP exception while trying to register them.

## Help

if you need more help take a look at documentation for the flowing libraries:

-   [Laravel] (https://laravel.com/docs)
-   [Shopify REST-API](https://shopify.dev/api/admin-rest)
-   and the Shopify REST-API [client](https://github.com/Shopify/shopify-api-php) for php

It's also recommended to use the Shopify [Partner Program](https://www.shopify.com/de/partners) to create a free store for testing purposes

## Server

hosted on a [Contabo VPS](https://contabo.com/de/vps/)
