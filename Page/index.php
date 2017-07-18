<?php

session_start();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'login';
}

/**
 * Alfonso: ici dans notre contrôleur qui est l'index.php nous sommes sensé avoir tous les contrôles sessions
 * tous les appels en base de données.
 * On juste ensuite qu'à utiliser ces variables dans les templates.
 *
 * Tu as bien saisi la logique MVC nous confirmerons ça plus tard et tu as bien compris ce que doivent comporter
 * les services et les fonctions.
 *
 * Je suis content de ce que tu as fait bien que tu ne soit pas venu le dernier jours. Ce qui veut dire que
 * tu aurais pu être encore plus productif.
 */

switch($page){

    case 'login':
    include("login.php");
    break;

    case 'signup';
    include("SignUp.php");
    break;

    case 'forum':
    include("forum.php");
    break;

    case 'profil':
    include("profil.php");
    break;

    case 'users':
    include("users.php");
    break;

}

?>