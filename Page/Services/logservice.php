<?php

session_start();
include("../model/fonction.php");

if(isset($_SESSION['user'])){

    header("location: ../Index.php?page=forum");
    die();
}


$username = trim($_POST['username']);
$password = trim($_POST['password']);

if($username != "" && $password != ""){
    $connexion = connexion();

    $user = selectUserByUsername($username);
    $pass = selectPassByUsername($username);
    $pass = $pass[0]["uPassword"];

    
    if(empty($user)){

        header("location: ../Index.php?page=login&statu=failed");
        die();

    }

    else{

        if($pass == $password){
            $_SESSION['user'] = $username;
            /*
            * Tu pourrais concatener les feedback pour n'avoir qu'a mettre à la fin
            * header("location: ../../Index.php?page=forum$var")
            * avec $var qui cumulera toutes tes conditions.
            * */
            header("location: ../Index.php?page=forum");
            die();
        }

        else{
            header("location: ../Index.php?page=login&statu=failed");
            die();
        }

    }

}
else{

    header("location: ../Index.php?page=login&statu=failed");
    die();

}



?>