<?php

/**
 * Alfonso: tout ce code en haut de la page doit se trouver dans l'index.php c'est à dire le controleur
 * C'est pour ça qu'il est sensé être le contrôleur.
 * Tu aurais dû aussi mettre tous ces templates dans un dossier views. ou templates.
 */

if(!empty($_SESSION['user'])){
    $username = $_SESSION['user'];
}
else{
    header("location: Index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
    <script type="text/javascript" src="JS/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="JS/forum.js"></script>
</head>
<body>
    <form action="Services/disconnectService.php" method="post" id="form3">
        <h1>Hello <?php echo $username ?></h1>
        <input type="submit" value="Déconnexion" class="button" id="submit">
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
    <button  class="button">
        <a href="Index.php?page=users">
            Messages
        </a>
    </button>
    <br>
    <hr>
    <br>
    <section id="sectionForum">

        <section id="cours">

            <div id="div1">
                <h2>Cours EcoleDuNum</h2>
            </div>

            <a href="Post.php?page=Pierre">
                <div class="sousDomaine1" id="Cours1">
                    <p>Cours Pierre</p>
                </div>
            </a>

            <a href="Post.php?page=Alphonso">
                <div class="sousDomaine1" id="Cours2">
                    <p>Cours Alphonso</p>
                </div>
            </a>

        </section>

        <section id="divers">

            <div id="div2">
                <h2>Divers EcoleDuNum</h2>
            </div>

            <a href="Post.php?page=snacks">
                <div class="sousDomaine2" id="divers1">
                    <p>Les bons snacks du coin</p>
                </div>
            </a>

            <a href="Post.php?page=divers">
                <div class="sousDomaine2" id="divers2">
                    <p>Discussion générale</p>
                </div>
            </a>

        </section>

    </section>
</body>
</html>