<?php

include('fonctionService.php');

$connexion = connexion();
$users = selectUser();

$username = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$mail = $_POST['mail'];
$flag = in_array($username, $users);
$flagmail = in_array($mail, $users);

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
    header("location: ../SignUp.php?user=$flag&mail=$flagmail&pass=$flagpass");
}
else{
    insert($username,$mail,$pass);
    header("location: ../Login.php?Signup=true");
}

?>