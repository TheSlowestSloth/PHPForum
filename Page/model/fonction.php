<?php

function connexion(){

$connexion = new
PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');

return $connexion;

}

function selectUserByUsername($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT username FROM forum.user WHERE username=:username");
    $object->execute(array("username" => $username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function selectUserByMail($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT mail FROM forum.user WHERE mail=:mail");
    $object->execute(array("mail" => $username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function selectPassByUsername($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT uPassword FROM forum.user WHERE username=:username");
    $object->execute(array('username'=>$username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function insert($username,$mail,$password){

    $connexion = connexion();

    $pdo = $connexion->prepare('INSERT INTO forum.user SET username=:user, email=:email, uPassword=:password');
    $pdo->execute(array(
        'user'=>$username,
        'email'=>$mail,
        'password'=>$password));

    }

?>