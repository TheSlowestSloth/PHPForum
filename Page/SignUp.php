<?php

if(isset($_GET['page']))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>
<body>
    <section id="sectionSign">
        <form action="Services/signservice.php" method="post" id="form2">
        
            <label>Username</label><br>
            <input type="text" name="username" class="champs"><br>
            <label>Password</label><br>
            <input type="password" name="password" class="champs"><br>
            <label>Confirm Password</label><br>
            <input type="password" name="cpassword" class="champs"><br>
            <label>Email</label><br>
            <input type="text" name="mail" class="champs"><br>
            <input type="submit" value="Sign Up" class="button" id="submit"><br>
            <a href="Index.php?page=login">Login</a>
            
        </form>
    </section>
</body>
</html>