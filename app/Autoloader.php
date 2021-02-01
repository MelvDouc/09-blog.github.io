<?php

namespace App;

class Autoloader {

    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class_name) {
        if(strpos($class_name, __NAMESPACE__) === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class_name);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }
}