<?php

namespace App;

class App {

    const DB_HOST = 'localhost';
    const DB_NAME = '09-blog';
    const DB_USER = 'root';
    const DB_PASSW = '';

    private static $bdd;

    public static function getBdd() {
        return self::$bdd = new Database(self::DB_HOST, self::DB_NAME, self::DB_USER, self::DB_PASSW);
    }
}