<?php

require_once "controllers/frontend.controller.php";
require_once "config/Securite.class.php";

try {
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $page = Securite::secureHTML($_GET['page']);
        switch ($page) {
            case "accueil" : getPageAccueil();
            break;
            case "pensionnaires" : getPagePensionnaires();
            break;
            case "association" : getPageAssociation();
            break;
            case "partenaires" : getPagePartenaires();
            break;
            case "chocolat" : getPageChocolat();
            break;
            case "educateur" : getPageEducateur();
            break;
            case "plantes" : getPagePlantes();
            break;
            case "sterilisation" : getPageSterilisation();
            break;
            case "temperature" : getPageTemperature();
            break;
            case "contact" : getPageContact();
            break;
            case "don" : getPageDon();
            break;
            case "mentions" : getPageMentions();
            break;
            case "animal" : getPageAnimal();
            break;
            case "actus" : getPageActualites();
            break;
            case "error301" :
            case "error302" :
            case "error400" :
            case "error401" :
            case "error402" :
            case "error404" :
            case "error500" :
            case "error502" :
            case "error503" :
            case "error504" :
            case "error505" : throw new Exception("Erreur de type : ". $page);
            break;
            case "error403" : throw new Exception("Vous n'avez pas les droits pour accéder à ce dossier.");
            break;
            case "error404":
            default: throw new Exception("La page demandée n'existe pas.");
        }
    } else {
        getPageAccueil();
    }
} catch (Exception $e) {
    $titre ="Error";
    $description = "Page de gestion des erreurs";
    $errorMessage = $e->getMessage();
    require "views/commons/erreur.view.php";
}