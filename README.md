# Laravel PHP MariaDB Demo

## Prerequisites

** PR (Phhp 9.x or higher)
** Composer (Package Manager)
** MariaDB 10.x running on MacOS

## Installation

### 1. Clone the repository:

```sh
git clone https://github.com/serverlesssalad/laravel-php-mariadb-demo.git
cd laravel-php-mariadb-demo
```

### 2. Configure `.env` file:

```
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_php_mariadb_demo
DB_USERNAME=root
DB_PASSWORD=

```

### 3. Run database migration:

```sh
php artisan migrate
```

### 4. Start the Laravel server:

```sh
php artisan serve
```

## API Test

### GET words
```sh
curl -X POST http://127.0.0.1:8000/api/words
```

