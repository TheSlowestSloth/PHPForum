<?php

session_start();
include('../model/fonction.php');
$post = $_POST['inpPost'];
$username = $_SESSION['user'];
$domaine = $_SESSION['domaine'];
$page = $_SESSION['page'];

insertIntoPost($username, $post, $domaine);

header("location: ../Post.php?page=$page")


?>