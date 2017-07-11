<?php

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

// if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
//     echo "le fichier ".  basename( $_FILES['uploadedfile']['name']).
//         " a été téléchargé";
// } 

// else {
//     header("location: Index.php?page=profil");
// }

if (isset($_FILES['uploadedfile']) AND $_FILES['uploadedfile']['error'] == 0)
{
    
    if ($_FILES['uploadedfile']['size'] <= 5000000)
    {
        $infosfichier = pathinfo($_FILES['uploadedfile']['name']);

        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        
        if (in_array($extension_upload, $extensions_autorisees))
        {
            $newName = hash('sha1',$_FILES['uploadedfile']['name']).'.'.$extension_upload;
            move_uploaded_file($_FILES['uploadedfile']['tmp_name'], 'uploads/' . basename($newName));
            header("location: ../Index.php?page=profil");
        }

    }
    
    else{
        header("location: ../Index.php?page=profil");
    }
}

else{
    header("location: ../Index.php?page=profil");
}

?>