<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h2 class="my-4 text-center">Nouvel article</h2>
        </div>

        <div class="col-4 offset-4">
            <form action="index.php?newArticle" method="post">
                <?php
                    if(isset($_POST['envoyer'])){
                        $insert = new \App\DbArticle;
                        $insert->addArticle($_POST['title'], $_POST['content'], $_POST['category']);
                    } else{
                        $form = new \App\Form\ArticleForm();
                        echo $form->input('title', 'text');
                        echo $form->textarea('content');
                        echo $form->select('category', 'jardin', 'maison');
                        echo $form->submit('envoyer');
                    }
                ?>
            </form>
        </div>

    </div>

</div>