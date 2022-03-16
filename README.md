# Pournoobs backend

An administration back-office for Pournoobs application

## Features

-   Administration back-office
    -   CRUD for courses
-   API
    -   Authentication
    -   Courses
    -   Categories
    -   Cart

## Run Locally

Clone the project

```bash
  git clone git@github.com:Thuan44/pour_noobs_backend.git
```

Install Composer

```bash
  composer install
```

Run the project

```bash
  php artisan serve
```

## Run migrations and seeds in production

To run migrations and seeds at the same time in production on Heroku

```bash
npx heroku run php artisan migrate:fresh --seed
```

## Deployment

To deploy this project vie Github Actions

```bash
  git push origin master
```

## Authors

-   [congthuan.do@gmail.com](https://github.com/Thuan44)
