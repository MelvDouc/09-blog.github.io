<?php

namespace App\Table;

use App\App;

class Category extends Table {

    protected static $table = 'categories';

    public static function findAll() {
        return App::getBdd()->query('SELECT * FROM ' . self::$table, __CLASS__);
    }

    public function getUrl() {
        return 'index.php?categorie&id='.$this->id;
    }

}