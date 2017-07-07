<?php

function connexion(){

$connexion = new
PDO('mysql:host=localhost;dbname=ecoledunum;charset=UTF8','root','root');

return $connexion;

}

function selectUser(){

    $connexion = connexion();

    $object = $connexion->prepare('SELECT username, mail FROM user');
    $object->execute(array());
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

}

?>