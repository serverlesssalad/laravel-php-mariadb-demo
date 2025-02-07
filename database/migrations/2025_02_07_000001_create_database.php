<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Migration
{
    public function up()
    {
        $databaseName = env('DB_DATABASE', 'default_db'); // Get DB name from .env

        DB::statement("CREATE DATABASE IF NOT EXISTS $databaseName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    }

    public function down()
    {
        $databaseName = env('DB_DATABASE', 'default_db');
        DB::statement("DROP DATABASE IF EXISTS $databaseName;");
    }
}
