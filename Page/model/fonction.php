<?php

function connexion(){

$connexion = new
PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');

return $connexion;

}

$connexion = connexion();

function selectUserByUsername($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT username FROM forum.user WHERE username=:username");
    $object->execute(array("username" => $username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function selectUserByMail($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT mail FROM forum.user WHERE mail=:mail");
    $object->execute(array("mail" => $username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function selectPassByUsername($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT uPassword FROM forum.user WHERE username=:username");
    $object->execute(array('username'=>$username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function insert($username,$mail,$password){

    $connexion = connexion();

    $pdo = $connexion->prepare('INSERT INTO forum.user SET username=:user, email=:email, uPassword=:password');
    $pdo->execute(array(
        'user'=>$username,
        'email'=>$mail,
        'password'=>$password));

}

function title($page){

    if($page == 'Pierre'){
        $title = 'Cours Pierre';
    }

    else if($page == "Alphonso"){
        $title = 'Cours Alphonso';
    }

    else if($page == 'snacks'){
        $title = 'Les bons snacks du coin';
    }

    else if($page == 'divers'){
        $title = 'Discussion général';
    }

    else{
        $title = 'Domaine non trouvé';
    }

    return $title;

}    

function selectUserByTitle($title){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT username FROM forum.post WHERE domaine=:domaine");
    $object->execute(array('domaine'=>$title));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function selectPostByTitle($title){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT post FROM forum.post WHERE domaine=:domaine");
    $object->execute(array('domaine'=>$title));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function selectDateByTitle($title){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT datecreate FROM forum.post WHERE domaine=:domaine");
    $object->execute(array('domaine'=>$title));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function insertIntoPost($username, $post, $domaine){

    $connexion = connexion();

    $pdo = $connexion->prepare('INSERT INTO forum.post SET username=:user, post=:post, domaine=:domaine, datecreate=:datecreate');
    $pdo->execute(array(
        'user'=>$username,
        'post'=>$post,
        'domaine'=>$domaine,
        'datecreate'=>date("Y-m-d H:i:s")));

}

function DisplayTab($user, $user2, $user3){

    for($i = 0; $i < count($user); $i++){
            echo "<div>";
            echo $user3[$i]['datecreate'];
            echo " ";
            echo $user[$i]['username'];
            echo "<br><br>";
            echo $user2[$i]['post'];
            echo "</div>";
            echo "<br><br>";
    }

}

function selectProfilByUser($username){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT * FROM forum.user WHERE username=:username");
    $object->execute(array('username'=>$username));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function updateIMG($file, $username){

    $connexion = connexion();

    $pdo = $connexion->prepare('UPDATE forum.user SET image=:image WHERE username=:username');
    $pdo->execute(array('image'=>$file,'username'=>$username));

}

function selectUsers(){

    $connexion = connexion();

    $object = $connexion->prepare("SELECT username FROM forum.user");
    $object->execute(array());
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function DisplayUsers($users){

    for($i = 0; $i < count($users); $i++){
        $val = $users[$i]['username'];
        echo "<option value='$val'> $val </option>";
    }

}

function insertMessage($user, $sender, $message){

    $connexion = connexion();

    $pdo = $connexion->prepare('INSERT INTO forum.message SET username=:user, sender=:sender, msg=:message, datecreate=:datecreate');
    $pdo->execute(array(
        'user'=>$user,
        'sender'=>$sender,
        'message'=>$message,
        'datecreate'=>date("Y-m-d H:i:s")));

}

function selectMessageByUser($user){
    
    $connexion = connexion();

    $object = $connexion->prepare("SELECT * FROM forum.message WHERE username=:username OR sender=:sender");
    $object->execute(array(
        'username'=>$user,
        'sender'=>$user
        ));
    $users = $object->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

function DisplayMSG($user){

    for($i = 0; $i < count($user); $i++){
            echo "<div>";
            echo $user[$i]['datecreate'];
            echo " ";
            echo $user[$i]['sender'];
            echo " ";
            echo $user[$i]['username'];
            echo "<br><br>";
            echo $user[$i]['msg'];
            echo "</div>";
            echo "<br><br>";
    }

}

?>