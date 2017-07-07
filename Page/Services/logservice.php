<?php

session_start();
include("../model/fonction.php");

if(isset($_SESSION['user'])){
    header("location: ../../Index.php?page=forum");
}


$username = trim($_POST['username']);
$password = trim($_POST['password']);

if($username != "" && $password != ""){
    $connexion = connexion();

    $user = selectUserByUsername($username);
    $pass = selectPassByUsername($username);
    $pass = $pass[0]["uPassword"];

    if(empty($user)){
        $flag = false;
    }
    else{
        $flag = true;
    }

    if($flag = true && $pass == $password){
        $_SESSION['user'] = $username;
        header("location: ../../Index.php?page=forum");
    }
    else{
        header("location: ../../Index.php?page=login&statu=failed");
    }
}
else{
        header("location: ../../Index.php?page=login&statu=failed");
}



?>