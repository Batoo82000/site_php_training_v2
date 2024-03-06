<?php

function ajoutImage($file, $dir, $nom){
    if(!file_exists($dir)) mkdir($dir, 0777);
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $target_file = $dir . $nom . "_" . $file['name'];

    if(!getimagesize($file['tmp_name'])) {
        throw new Exception("Le fichier n'est pas une image");
    }
    if($extension !== "jpg" && $extension !== "png" && $extension != "jpeg" && $extension !== "gif" ) {
        throw new Exception("Le fichier n'est pas une image");
    }
    if(file_exists($target_file)) {
        throw new Exception("Le fichier existe déja");
    }
    if($file['size'] > 5000000) {
        throw new Exception("Le fichier est trop volumineux");
    }
    if(!move_uploaded_file($file['tmp_name'], $target_file)) {
        throw new Exception("L'ajout de l'image n'a pas fonctionné");
    } else {
        return ($nom . "_" . $file['name']);
    }
}