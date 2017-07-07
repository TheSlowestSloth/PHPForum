<?php

include('fonctionService.php');

$connexion = connexion();

$user = selectUser();

var_dump($user);

?>