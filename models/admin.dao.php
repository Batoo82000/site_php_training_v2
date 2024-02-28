<?php
require_once 'pdo.php';
function getPasswordUser($login){
    $bdd = connexionPDO();
    $req = '
    SELECT * 
    FROM administrateur 
    where login = :login';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":login",$login,PDO::PARAM_STR);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $admin;
}

function isConnexionValid($login, $password){
    
    // Récupère les informations de l'utilisateur basées sur le login
    $admin = getPasswordUser($login);
    // Vérifie que l'utilisateur existe
    if($admin) {
        // Verifie le mot de passe avec le hash du mot de passe dans la bdd
        return password_verify($password, $admin['password']);
    } else {
        // Gère le cas ou il n'y a pas l'utilisateur dans la bdd
        return false;
    }
}