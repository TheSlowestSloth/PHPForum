<?php

$username = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Page/Services/forumservice.php" method="post">
        <h1>Hello <?php echo $username ?></h1>
        <input type="submit" value="Déconnexion">
    </form>
    <div id="div1">
        <h2>Cours EcoleDuNum</h2>
    </div>
    <div id="div2">
        <h2>Divers EcoleDuNum</h2>
    </div>
</body>
</html>