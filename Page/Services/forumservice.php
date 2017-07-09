<?php

session_start();

session_destroy();

/*
 * Alfonso: Je pense que tu veux faire un système de déconnexion
 * il faut peut-être renommer le fichier deconnexionService.php
 * pour savoir ce que le service fait au premier coup d'oeil
 *
 * Autre point après un header() il faut mettre un die();
 * Au cas ou
 * */

header("location: ../../Index.php");

?>