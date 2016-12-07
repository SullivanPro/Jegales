<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

<?php

if(ctype_digit($_GET['id'])) {
    $post = \App\Table\Articles::getUnArticle([$_GET['id']]);
    if ($post == FALSE){
        echo "<h1>Article non connu</h1>";
    }else{
        ?>
        <h1><?= $post->titre; ?></h1>
        <p><?= $post->contenu; ?></p>

<?php
    }

} else {
    echo "Erreur";
}


?>

        </div>
    </div>
</div>
