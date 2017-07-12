<?php

session_start();
include("../model/fonction.php");
$username = $_SESSION['user'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploadedfile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploadedfile"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    $file = "Services/$target_file";
    updateIMG($file, $username);
    $uploadOk = 0;
}

if ($_FILES["uploadedfile"]["size"] > 500000) {
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    header("location: ../Index.php?page=profil&upload=false");
} else {
    if (move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_file)) {
        $file = "Services/$target_file";
        updateIMG($file, $username);
        header("location: ../Index.php?page=profil&upload=true");
    } else {
        header("location: ../Index.php?page=profil&upload=false");
    }
}
?>