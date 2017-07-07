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
    <script type="text/javascript" src="JS/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="JS/sign.js"></script>
</head>
<body>
    <form action="Page/Services/signservice.php" method="post">
    
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>Confirm Password</label><br>
        <input type="password" name="cpassword"><br>
        <label>Email</label><br>
        <input type="text" name="mail"><br>
        <input type="submit" value="Sign Up"><br>
        <a href="Index.php?page=login">Login</a>
        
    </form>
</body>
</html>