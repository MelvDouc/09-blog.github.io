<?php

namespace App\Table;

class Table {

    private $param;

    public function __get($param) {
        $method = 'get' . ucfirst($param);
        $this->param = $this->$method();
        return $this->param;
    }

}