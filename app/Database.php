<?php

namespace App;

use \PDO;

class Database {

    private $host;
    private $db;
    private $user;
    private $password;
    protected $pdo;

    public function __construct($host = 'localhost', $db = '09-blog', $user = 'root', $password = '') {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }

    protected function getPDO() {
        if($this->pdo == null) {
            // $pdo = new PDO('mysql:dbname=09-blog;host=localhost', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo = new PDO('mysql:dbname=09-blog;host=localhost;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($request, $class_name) {
        $req = $this->getPDO()->query($request);
        $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;
    }

    public function prepare($request, $id, $class_name) {
        $req = $this->getPDO()->prepare($request);
        $req->execute($id);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        $data = $req->fetch();
        return $data;
    }
}