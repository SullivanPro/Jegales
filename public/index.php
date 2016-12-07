<?php
require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = "home";
}


ob_start();
if($p === "home") { //verification stricte
    require '../pages/home.php';
} elseif ($p === "article") {
    require '../pages/article.php';
} elseif ($p === "about") {
    require '../pages/about.php';
}

$content = ob_get_clean(); //stocker ce qui est affiché
require '../pages/templates/default.php';

?>