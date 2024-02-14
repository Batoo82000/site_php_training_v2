<?php

require_once "controllers/frontend.controller.php";

try {
    if(isset($_GET['page']) && !empty($_GET['page'])){
        switch ($_GET['page']) {
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
            default: throw new Exception("La page demandée n'existe pas.");
        }
    } else {
        getAccueil();
    }
} catch (Exception $e) {
    $titre ="Error";
    $description = "Page de gestion des erreurs";
    $errorMessage = $e->getMessage();
    require "views/commons/erreur.view.php";
}