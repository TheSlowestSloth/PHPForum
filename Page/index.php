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

}

?>