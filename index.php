<?php

    // echo __DIR__;

    require './app/Autoloader.php';
    App\Autoloader::register();

    ob_start();
    

    if(isset($_GET['article'])) {
        require './pages/article.php';
    } else {
        require './pages/home.php';
    }

    $content = ob_get_clean();

    require './pages/templates/default.php';

?>