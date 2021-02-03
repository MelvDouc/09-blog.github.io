<?php

    /* $host = 'localhost';
    $db = '09-blog';
    $user = 'root';
    $password = '';

    // $db = new PDO('mysql:dbname='.$db';host='.$host.';'.$user,$password);
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db . '; charset=utf8', $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $bdd->exec('INSERT INTO articles SET title="Mon premier article", content="Contenu de l\'article 1", date=NOW()');

    $data = $bdd->query('SELECT * FROM articles')->fetchAll(PDO::FETCH_OBJ);
    // var_dump($data[0]->id);
    for($i = 0; $i < count($data); $i++){
        var_dump($data[$i]->id);
    } */

    /* $bdd = new App\Database();
    $data = $bdd->query('SELECT * FROM articles');

    for($i = 0; $i < count($data); $i++){
        var_dump($data[$i]->id);
        var_dump($data[$i]->title);
    } */

?>

<div class="container-fluid">
    <div class="row">
        <h1 class="my-4">Accueil</h1>
        <!-- <p class="text-center"><a href="index.php?article">Articles</a></p> -->
        
        <div class="col-9">
            
            
            <!-- < ?php foreach($bdd->query('SELECT * FROM articles') as $article) {?>
                <h2><a href="index.php?article&id=< ?= $article->id?>">< ?= $article->title?></a></h2>
                <p>< ?= $article->content?></p>
            < ?php } ?> -->

            <?php foreach(\App\Table\Article::findAll() as $article) {?>
                <div class="entourer">
                    <h2 class="bg-light"><a href="<?= $article->url?>"><?= $article->title?></a></h2>
                    <p><em><?= $article->category?></em></p>
                    <p><?= $article->excerpt?></p>
                </div>
            <?php /*var_dump($article);*/ } ?>
        </div>

        <div class="col-3">
            <h2>Catégories</h2>
            
            <ul>
                <?php 
                foreach(\App\Table\Category::findAll() as $category){
                ?>
                    <li><a href="<?= $category->url?>"><?= ucfirst($category->title);?></a></li>
                <?php }?>
            </ul>
            <h2>Actions</h2>
            <li><a href="index.php?newArticle">Rédiger un article</a></li>
        </div>
    </div>
</div>