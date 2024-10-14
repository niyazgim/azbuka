# Azbuka

Azbuka - это пример вэб-приложения по продаже продуктов питания.

## Стек приложения 

1) **Backend**
    1) Laravel
2) **Database**
    1) MySql
3) **Frontend**
    1) Laravel blade.
    2) CSS.
    3) JavaScript.

## How to run

1) Скопируйте файл `env.example` и переименуйте его в `.env`.
2) Выполните настройку (конкректно параметры подключения к бд) в файле `.env`.

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD
```

3) Сгенерируйте ключ приложения.

```shell
php artisan key:generate
```

4) Запустите миграции.

```shell
php artisan migrate
```

5) Запустите приложение.

```shell
php artisan serve
```
