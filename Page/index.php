<?php

session_start();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'login';
}

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