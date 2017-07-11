<?php

if(!empty($_SESSION['user'])){
    header("location: Index.php?page=forum");
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
</head>
<body>
    <section id="sectionLogin">
        <form action="Services/logservice.php" method="post" id="form1">

            <label>Username</label><br>
            <input type="text" name="username" class="champs"><br>
            <label>Password</label><br>
            <input type="password" name="password" class="champs"><br>
            <input type="submit" value="Log In" class="button" id="submit"><br>
            <a href="Index.php?page=signup">Sign Up</a>
            
        </form>
    </section>
</body>
</html>