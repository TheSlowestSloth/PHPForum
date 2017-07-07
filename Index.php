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