# Laravel Multiple Authentication
A simple implementation of multiple authentication in Laravel.

To follow along, this application has been documented as an article on Pusher blog. You can read about it [here](https://pusher.com/tutorials/multiple-authentication-guards-laravel)

## Set up
To set up this project, first clone the repositiory
```bash
$ git clone https://github.com/WahWahWynnShweHlaing/multi-auth.git
```

Change your working directory into the project directory
```bash
$ cd multi-auth
```

Then install dependencies using [Composer](https://getcomposer.org/doc/00-intro.md)
```bash
$ composer install
```

Copy `.env.example` to `.env`
```bash
$ cp .env.example .env
```

Create database and configure in .env file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth
DB_USERNAME=root
DB_PASSWORD=
```

Run database migrations:
```bash
php artisan migrate
```

## Run
Run the application with the following command
```bash
$ php artisan serve
```

