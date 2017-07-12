<?php

include("model/fonction.php");
$username = $_SESSION['user'];

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
    <a href="Index.php?page=profil">
        Profil
    </a>
    </button>
    <br>
    <hr>
    <br>
    <form action="Services/messageUsers.php" method="post">
        <label>Select User</label>
        <select name="select">
        <?php
            $users = selectUsers();
            DisplayUsers($users);
        ?>
        </select>
        <br>
        <input type="text" name="message">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <div>
    <?php
        $user = selectMessageByUser($username);
        DisplayMSG($user);
    ?>
    </div>
</body>
</html>