# Laravel PHP MariaDB Demo

## Installation

### 1. Install PHP, Composer, and MariaDB
```
bash setup-mac/macsetup.sh
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

Access Test: http://127.0.0.1:8000/api/words

