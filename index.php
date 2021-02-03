<?php

    // echo __DIR__;

    require './app/Autoloader.php';
    App\Autoloader::register();

    // $bdd = new App\Database();
    // $data = $bdd->query('SELECT * FROM articles');
    // var_dump($data);

    ob_start();    

    if(isset($_GET['article'])) {
        require './pages/article.php';
    } else if(isset($_GET['categorie'])) {
        require './pages/categorie.php';
    } else if(isset($_GET['newArticle'])) {
        require './pages/newArticle.php';
    } else {
        require './pages/home.php';
    }

    $content = ob_get_clean();

    require './pages/templates/default.php';

?>