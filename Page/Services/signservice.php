<?php

session_start();
include('../model/fonction.php');

if(isset($_SESSION['user'])){
    header("location: ../../Index.php?page=forum");
}

$connexion = connexion();


$username = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$mail = $_POST['mail'];


$user = selectUserByUsername($username);
$email = selectUserByMail($mail);


if(empty($user)){
    $flag = false;
}
else{
    $flag = true;
}

if(empty($email)){
    $flagmail = false;
}

if($flagmail == false){
    if(preg_match("/@.*\./", $mail)):
        $flagmail = false;
    else:
        $flagmail = true;
    endif;
};

if(strlen($username) < 4){
    $flag = true;
}

if(strlen($pass) < 8){
    $flagpass = true;
}
else{
    $flagpass = false;
}
if($flagpass == false){
    if($pass == $cpass){
        $flagpass = false;
    }
    else{
        $flagpass = true;
    }
}

if($flag == true OR $flagmail == true OR $flagpass == true){
    header("location: ../../Index.php?page=login&user=$flag&mail=$flagmail&pass=$flagpass");
}
else{
    insert($username,$mail,$pass);
    header("location: ../../Index.php?page=login&Signup=true");
}

?>