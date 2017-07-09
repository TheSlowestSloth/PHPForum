<?php

session_start();
include('../model/fonction.php');

if(isset($_SESSION['user'])){
    header("location: ../../Index.php?page=forum");
}

/* Alfonso: on a pas besoin de la connexion ici */
$connexion = connexion();


$username = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$mail = $_POST['mail'];


$user = selectUserByUsername($username);
$email = selectUserByMail($mail);

/* Alfonso: tu utilises trop de flags et tu peux ne pas les utiliser
 * Par exemple
 * if(empty($username) == false){
 *      $var = "controleUsername=userInDatabase";
 * }else if(empty($user) == false){
 *      $var = "controleEmail=userEmailTaken";
 * }
 * Si tu veux cumuler dissocier les conditions tu peux le faire
 * comme tu as fait en bas mais sans utiliser les flags et cumuler
 * les warning
 * pour avoir un
 * header("location: index.php?controleUsername=userInDatabase&controleEmail=userEmailTaken");
 * En tout cas tu vois ce qu'il faut faire et c'est très bien
 */

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
    // bien vu pour le mot de passe mais je pense que le regex n'est pas
    // super correct
    // aussi une fois qu'il marchera il faut en faire une fonction
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