<?php
require_once "public/utile/formatage.php";
require_once 'models/animal.dao.php';
require_once 'config/config.php';
function getPagePensionnaires()
{
    $title = "Page de pensionnaires";
    $description = "c'est la page des pensionnaires";

    $animaux = getAnimalFromStatus($_GET['idstatus']);

    $titleH1 = "";
    if ((int) $_GET['idstatus'] === ID_STATUT_A_L_ADOPTION) : $titleH1 = "Ils cherchent une famille";

    elseif ((int) $_GET['idstatus'] === ID_STATUT_ADOPTE) : $titleH1 = "Les anciens";

    elseif ((int) $_GET['idstatus'] === ID_STATUT_FALD) : $titleH1 = "Famille d’accueil longue durée";

    endif;

    foreach ($animaux as $key => $animal) {
        $image = getFirstImageAnimal($animal['id_animal']);
        $animaux[$key]['image'] = $image;

        $caracteres = getCaracteresAnimals($animal['id_animal']);
        $animaux[$key]['caracteres'] = $caracteres;
    }

    require_once "views/front/pensionnaires.view.php";
}

function getPageAnimal() {
    
    $animal = getAnimalFromIdAnimalBd($_GET['idAnimal']);
    $title = "Page de ".$animal['nom_animal'];
    $description = "Page de ".$animal['nom_animal'];
    $images = getImagesFromAnimal($_GET['idAnimal']);
    $caracteres = getCaracteresAnimals($_GET['idAnimal']);

    require_once "views/front/animal.view.php";
}

function getPageAccueil()
{
    $title = "Page d'accueil";
    $description = "Nos amis, nos animaux";

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
function getPageActualites()
{
    $title = "Actualites";
    $description = "Page listant les actualités";

    require_once "views/front/actu/actus.view.php";
}
