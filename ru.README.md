# Azbuka

Azbuka - это пример вэб-приложения по продаже продуктов питания.

## Current stack 

1) **Backend**
    1) Laravel
2) **Database**
    1) MySql
3) **Frontend**
    1) Laravel blade.
    2) CSS.
    3) JavaScript.

## How to run

1) Copy the `env.example` file and rename it into `.env`.
2) Configure (database connection parameters).

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD
```

3) Generate app key

```shell
php artisan key:generate
```

4) Run migrations

```shell
php artisan migrate
```

5) Start the app

```shell
php artisan serve
```
