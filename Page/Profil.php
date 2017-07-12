<?php

include("model/fonction.php");
$username = $_SESSION['user'];
$profil = selectProfilByUser($username);
$img = $profil[0]['image'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>
<body>
    <form action="Services/disconnectService.php" method="post" id="form6">
        <input type="submit" value="Déconnexion" class="button">
    </form>
    <button class="button">
    <a href="Index.php?page=forum">
        Forum
    </a>
    </button>
    <br>
    <button  class="button">
    <a href="Index.php?page=users">
        Messages
    </a>
    </button>
    <br>
    <hr>
    <br>
    <div id="cadreProfil">
        <div id="info">
            <p>Username:</p><br>
            <?php echo $profil[0]['username'] ?><br><br>
            <p>Mail:</p><br>
            <?php echo $profil[0]['email'] ?><br><br>
            <p>Image:</p><br>
            <?php 
            if($img == ""){
                echo "<img src='Styles/images/téléchargement.png' height='200' width='200'>";
            }
            else{
                echo("<img src='$img' height='200' width='200'>");
            }
             ?><br><br>
        </div>
        <form enctype="multipart/form-data" action="Services/uploaderService.php" method="post">
        

            Choisissez un fichier:
            <br>
            <input name="uploadedfile" type="file"/>
            <br>
            <input type="submit" value="Upload file"/>

        </form>
    </div>

</body>
</html>