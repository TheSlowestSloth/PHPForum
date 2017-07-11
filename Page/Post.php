<?php

session_start();
include('model/fonction.php');

if(!empty($_SESSION['user'])){
    $username = $_SESSION['user'];
}
else{
    header("location: Index.php");
}

$page = $_GET['page'];
$title = title($page);
$_SESSION['domaine'] = $title;
$_SESSION['page'] = $page;

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
    <form action="Services/disconnectService.php" method="post" id="form3">
        <input type="submit" value="Déconnexion" class="button" id="submit">
    </form>
    <button class="button" style="">
    
    <a href="Index.php?page=forum">
        Forum
    </a>
    </button>
    <br>
    <button class="button" style="">
    <a href="Index.php?page=profil">
        Profil
    </a>
    </button>
    
    
    <br>
    <hr>
    <br>
    <h1><?php echo $title ?></h1>
    <br>
    <br>
    <section id="postSection">
        <?php

        $user = selectUserByTitle($title);
        $user2 = selectPostByTitle($title);
        $user3 = selectDateByTitle($title);
        DisplayTab($user, $user2, $user3);

        ?>
    </section>
    <form action="Services/postService.php" method="post" id="postForm">
    <label id="postLabel">Votre message:</label><br>
    <input type="text" name="inpPost" id="inpPost"><br>
    <input type="submit" id="postButton" value="Envoyer">
    </form>
</body>
</html>