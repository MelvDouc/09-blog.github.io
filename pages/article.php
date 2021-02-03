<?php

    $article = \App\App::getBdd()->prepare('SELECT * FROM articles WHERE id=?', [$_GET['id']], 'App\Table\Article');
    // var_dump($article);

?>

<div class="container-fluid">

    <h1><?= $article->title?></h1>

    <p class="text-center"><a href="index.php">Accueil</a></p>

    <p><?= $article->content?></p>


</div>