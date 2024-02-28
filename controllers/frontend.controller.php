<?php
require_once "public/utile/formatage.php";
require_once 'models/animal.dao.php';
require_once 'models/actualite.dao.php';

require_once 'config/config.php';

function getPagePensionnaires()
{
    $title = "Page de pensionnaires";
    $description = "c'est la page des pensionnaires";

    if (isset($_GET['idstatus']) && !empty($_GET['idstatus'])) {

        $idStatus = Securite::secureHTML($_GET['idstatus']);
        $animaux = getAnimalFromStatus($idStatus);
        
        $titleH1 = "";

        if ((int) $idStatus === ID_STATUT_A_L_ADOPTION) : $titleH1 = "Ils cherchent une famille";
        
            elseif ((int) $idStatus === ID_STATUT_ADOPTE) : $titleH1 = "Les anciens";
            
            elseif ((int) $idStatus === ID_STATUT_FALD) : $titleH1 = "Famille d’accueil longue durée";
            
        endif;
    
        foreach ($animaux as $key => $animal) {
            $image = getFirstImageAnimal($animal['id_animal']);
            $animaux[$key]['image'] = $image;
            
            $caracteres = getCaracteresAnimals($animal['id_animal']);
            $animaux[$key]['caracteres'] = $caracteres;
    }
        require_once "views/front/pensionnaires.view.php";
    } else {
        throw new Exception("L'id du statut est manquant. Vous ne pouvez pas accéder à la page.");
    }
}

function getPageActualites()
{
    $title = "Actualites";
    $description = "Page listant les actualités";



    if(isset($_GET['type']) && !empty($_GET['type'])) {
        $typeNews = Securite::secureHTML($_GET['type']);

        $titleH1 = "";

        if ((string) $typeNews === TYPE_NEWS) : $titleH1 = "Nouvelles des adoptés";
        
            elseif ((string) $typeNews === TYPE_EVENTS) : $titleH1 = "Evènements";
            
            elseif ((string) $typeNews === TYPE_ACTIONS) : $titleH1 = "Nos actions au quotidien";
            
        endif;

        $actualites = getActualiteFromBd($typeNews);
        foreach ($actualites as $key => $actualite) {
            $image = getImageActualiteFromBd($actualite['id_image']);
            $actualites[$key]['image'] = $image;
        }
    }
    else {
        throw new Exception("Le type de l'actualité est manquante. Vous ne pouvez pas accéder à la page.");
    }
    require_once "views/front/actu/actus.view.php";
}

function getPageAnimal() {

    if(isset($_GET['idAnimal']) && !empty($_GET['idAnimal'])) {

        $idAnimal = Securite::secureHTML($_GET['idAnimal']);

        $animal = getAnimalFromIdAnimalBd($idAnimal);
        $images = getImagesFromAnimal($idAnimal);
        $caracteres = getCaracteresAnimals($idAnimal);
        
        $title = "Page de ".$animal['nom_animal'];
        $description = "Page de ".$animal['nom_animal'];

        require_once "views/front/animal.view.php";

    } else {
        throw new Exception("L'id de l'animaux est manquant. Vous ne pouvez pas accéder à la page.");
    }
}

function getPageAccueil()
{
    $title = "Page d'accueil";
    $description = "Nos amis, nos animaux";

    $animaux = getAnimalFromStatus(ID_STATUT_A_L_ADOPTION);
    foreach ($animaux as $key => $animal) {
        $image = getFirstImageAnimal($animal['id_animal']);
        $animaux[$key]['image'] = $image;
    }
    $news = getLastNews();
    $actions = getLastActionsOrEvents();
    
    require_once "views/front/accueil.view.php";
}
function getPageAssociation()
{
    $title = "Notre association";
    $description = "Page décrivant notre association";

    require_once "views/front/association/association.view.php";
}
function getPagePartenaires()
{
    $title = "Nos partenaires";
    $description = "Page listant nos partenaires";

    require_once "views/front/association/partenaires.view.php";
}
function getPageChocolat()
{
    $title = "Le chocolat";
    $description = "Le chocolat et ces effets sur nos animaux";

    require_once "views/front/articles/chocolat.view.php";
}
function getPageEducateur()
{
    $title = "Les éducateurs";
    $description = "Page listant les éducateurs canin";

    require_once "views/front/articles/educateur.view.php";
}
function getPagePlantes()
{
    $title = "Les plantes";
    $description = "Page parlant des plantes et de leur toxicité";

    require_once "views/front/articles/plantes.view.php";
}
function getPageSterilisation()
{
    $title = "La stérilisation";
    $description = "Page traitant de la stérilisation";

    require_once "views/front/articles/sterilisation.view.php";
}
function getPageTemperature()
{
    $title = "La température";
    $description = "Page traitant de la température";

    require_once "views/front/articles/temperature.view.php";
}
function getPageContact()
{
    $title = "Contact";
    $description = "Page de contact";

    require_once "views/front/contact/contact.view.php";
}
function getPageDon()
{
    $title = "Faire un don";
    $description = "Page pour faire un don";

    require_once "views/front/contact/don.view.php";
}
function getPageMentions()
{
    $title = "Mentions légales";
    $description = "Page listant les mentions légales";

    require_once "views/front/contact/mentions.view.php";
}

