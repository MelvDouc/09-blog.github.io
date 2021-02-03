<?php

namespace App\Table;

use App\App;

class Article extends Table {

    public function getUrl() {
        return 'index.php?article&id='.$this->id;
    }

    public function getExcerpt() {
        // $html = '<p class="font-monospace">'.$this->date.'</p>';
        $html = '<div class="container-lg"><div class="col-6"><p class="texte-justifier">' . substr($this->content, 0, 200) . '&hellip;</p>';
        $html .= '<p class="text-start"><a href="' . $this->getUrl() . '">Voir la suite</a></p></div></div>';
        return $html;
    }

    public static function findAll() {
        // return App::getBdd()->query('SELECT * FROM articles', __CLASS__);
        return App::getBdd()->query('SELECT articles.id, articles.title, articles.content, categories.title, articles.date AS category FROM articles LEFT JOIN categories ON id_category=categories.id ORDER BY articles.date DESC LIMIT 0, 5', __CLASS__);
    }

    public static function findByCategory($id) {
        return App::getBdd()->query('SELECT articles.title, articles.content, articles.date, categories.title AS category FROM articles INNER JOIN categories ON categories.id = articles.id_category WHERE categories.id=' . $id, __CLASS__);
    }

}