<?php

function connexion(){

$connexion = new
PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');

return $connexion;

}

function selectUser(){

    $connexion = connexion();

    $object = $connexion->prepare('SELECT * FROM forum.user');
    $object->execute(array());
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