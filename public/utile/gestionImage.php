<?php
/**
 *  cette fonction ajoutImage() vérifie plusieurs conditions pour s'assurer que le fichier image spécifié peut être ajouté en toute sécurité, et elle lance des exceptions avec des messages appropriés si l'une de ces conditions n'est pas respectée
 */
function ajoutImage($file, $dir, $nom){
    if(!file_exists($dir)) mkdir($dir, 0777); // vérifie si le répertoire spécifié par la variable $dir n'existe pas. Si c'est le cas, elle crée ce répertoire avec les permissions 0777
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)); // extrait l'extension du nom de fichier dans la variable $file et la convertit en minuscules
    $target_file = $dir . $nom . "_" . $file['name']; //définit le chemin complet du fichier cible en combinant le répertoire $dir, le nom spécifié $nom, un tiret bas _, et le nom de fichier d'origine

    if(!getimagesize($file['tmp_name'])) {
        throw new Exception("Le fichier n'est pas une image"); // vérifie si le fichier temporaire spécifié par $file['tmp_name'] est une image en utilisant la fonction getimagesize(). Si ce n'est pas le cas, elle lance une exception avec le message "Le fichier n'est pas une image"
    }
    if($extension !== "jpg" && $extension !== "png" && $extension != "jpeg" && $extension !== "gif" ) {
        throw new Exception("Le fichier n'est pas une image"); //  vérifie si l'extension du fichier n'est pas parmi les extensions d'images autorisées (jpg, png, jpeg, gif). Si ce n'est pas le cas, elle lance une exception
    }
    if(file_exists($target_file)) {
        throw new Exception("Le fichier existe déja"); // vérifie si le fichier cible existe déjà. Si c'est le cas, elle lance une exception
    }
    if($file['size'] > 2000000) {
        throw new Exception("Le fichier est trop volumineux"); //vérifie si la taille du fichier est supérieure à 2000000 octets (2 Mo). Si c'est le cas, elle lance une exception
    }
    if(!move_uploaded_file($file['tmp_name'], $target_file)) {
        throw new Exception("L'ajout de l'image n'a pas fonctionné");// tente de déplacer le fichier téléchargé depuis son emplacement temporaire ($file['tmp_name']) vers l'emplacement cible $target_file. Si cela échoue, elle lance une exception
    } else {
        return ($nom . "_" . $file['name']); // si toutes les vérifications sont passées avec succès et que le fichier a été déplacé avec succès, cette ligne renvoie le nom du fichier ajouté au format $nom_$file['name']
    }
}