<?php

session_start();
include("../model/fonction.php");

if(isset($_SESSION['user'])){
    // il faut mettre un die() après les header(). Au cas ou la page charge lentement
    // et éviter que le reste du code s'execute.
    header("location: ../../Index.php?page=forum");
}


$username = trim($_POST['username']);
$password = trim($_POST['password']);

if($username != "" && $password != ""){
    $connexion = connexion();

    $user = selectUserByUsername($username);
    $pass = selectPassByUsername($username);
    $pass = $pass[0]["uPassword"];

    /* pas besoin des flags. Met les conditions directement dans le if */
    if(empty($user)){
        $flag = false;
    }
    else{
        $flag = true;
    }

    if($flag = true && $pass == $password){
        $_SESSION['user'] = $username;
        /*
         * Tu pourrais concatener les feedback pour n'avoir qu'a mettre à la fin
         * header("location: ../../Index.php?page=forum$var")
         * avec $var qui cumulera toutes tes conditions.
         * */
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