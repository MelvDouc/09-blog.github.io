<?php

namespace App;

use \PDO;

class DbArticle extends Database {

    public function addArticle($title, $content, $category) {
        $req = $this->getPDO()->prepare('INSERT INTO articles (title, content, `date`, id_category) VALUES (:title, :content, NOW(), :category)');
        $req->bindParam(':title', $title, PDO::PARAM_STR);
        $req->bindParam(':content', $content, PDO::PARAM_STR);
        $req->bindParam(':category', $category, PDO::PARAM_INT);
        $req->execute();
        echo 'O.K.!';
    }
}