<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="JS/jquery-3.2.1.js"></script>
</head>
<body>
    <form action="Page/Services/logservice.php" method="post">

        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In"><br>
        <a href="Index.php?page=signup">Sign Up</a>
        
    </form>
</body>
</html>