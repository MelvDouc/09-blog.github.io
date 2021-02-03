<?php
    $category = \App\App::getBdd()->prepare('SELECT * FROM categories WHERE id=?', [$_GET['id']], 'App\Table\Category');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
        <h1 class="text-capitalize"><?= $category->title ?></h1>
        <p><a href="index.php">Accueil</a></p>
        </div>
    </div>

    <div class="row">
        <?php foreach(\App\Table\Article::findByCategory($_GET['id'], 'App\Table\Article') as $article){ ?>
            <div class="col-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= $article->title?></h2>
                        <p class="card-subtitle font-monospace text-muted"><?= $article->date?></p>
                        <div class="card-content"><?= $article->content?></div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>