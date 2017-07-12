<?php

session_start();
include("../model/fonction.php");

$user = $_POST['select'];
$message = $_POST['message'];
$sender = $_SESSION['user'];

insertMessage($user, $sender, $message);

header("location: ../Index.php?page=users");

?>