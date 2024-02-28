<?php

require_once "public/utile/formatage.php";
require_once 'models/animal.dao.php';
require_once 'models/actualite.dao.php';
require_once 'models/admin.dao.php';
require_once 'config/config.php';

function getPageLogin()
{
    $title = "Page de login du site";
    $description = "Page de Login";
    
    if(Securite::verificationAccess()) {
            header('Location: admin');
    }
    
    $alert = "";

    if(isset($_POST['login']) && !empty($_POST['login']) && 
    isset($_POST['password']) && !empty($_POST['password'])) {
            $login = Securite::secureHTML($_POST['login']);
            $password = Securite::secureHTML($_POST['password']);
        if(isConnexionValid($login, $password)) {
            $_SESSION['acces'] = "admin";
            Securite::genereCookiePassword();
            header('Location: admin');
        } else {
            $alert = "Mauvais login ou mot de passe";
        }
    }
    require_once "views/back/login.view.php";
}

function getPageAdmin()
{
    if(isset($_POST['deconnexion']) && $_POST['deconnexion'] === "true"){
        session_destroy();
        header("Location: accueil");
    }
    if(Securite::verificationAccess()){
        Securite::genereCookiePassword();
        $title = "Page d'administration du site";
        $description = "Page d'administration du site";

        require_once "views/back/adminAccueil.view.php";
    } else {
        throw new Exception("Vous n'avez pas le droit d'accéder à cette page");
    }
}

function getPagePensionnaireAdmin() {
    if(isset($_POST['deconnexion']) && $_POST['deconnexion'] === "true"){
        session_destroy();
        header("Location: accueil");
    }
    if(Securite::verificationAccess()){
        Securite::genereCookiePassword();
        $title = "Page de gestion des pensionnaires";
        $description = "Page de gestion des pensionnaires";

        require_once "views/back/adminPensionnaire.view.php";
    } else {
        throw new Exception("Vous n'avez pas le droit d'accéder à cette page");
    }
}
function getPageNewsAdmin() {
    if(isset($_POST['deconnexion']) && $_POST['deconnexion'] === "true"){
        session_destroy();
        header("Location: accueil");
    }
    if(Securite::verificationAccess()){
        Securite::genereCookiePassword();
        $title = "Page de gestion des news";
        $description = "Page de gestion des news";

        require_once "views/back/adminNews.view.php";
    } else {
        throw new Exception("Vous n'avez pas le droit d'accéder à cette page");
    }
}