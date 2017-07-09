<?php

session_start();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'login';
}

if(isset($_SESSION['user']) && $page!='forum'){
    $page = 'forum';
}


/*
 * Alfonso: Bien vu le fonctionnement de ce système MVC mais peut être devrais
 * tu simplifié la structure des fichiers et éliminer le dossier "Page"
 * et rescendre ce qui est à l'intérieur d'un niveau
*/
switch($page){

    case 'login':
    include("Page/login.php");
    break;

    case 'signup';
    include("Page/SignUp.php");
    break;

    case 'forum':
    include("Page/forum.php");
    break;

}

?>