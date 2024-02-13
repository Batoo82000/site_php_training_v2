<?php
require_once "public/utile/formatage.php";
require_once 'models/animal.dao.php';
require_once 'config/config.php';
function getPensionnaires()
{
    $title = "Page de pensionnaires";
    $description = "c'est la page des pensionnaires";

    $_GET['idstatus'] = 1;
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

function getAccueil()
{
    $title = "Page d'accueil";
    $description = "Nos amis, nos animaux";

    require_once "views/front/accueil.view.php";
}
function getAssociation()
{
    $title = "Notre association";
    $description = "Page décrivant notre association";

    require_once "views/front/association/association.view.php";
}
function getPartenaires()
{
    $title = "Nos partenaires";
    $description = "Page listant nos partenaires";

    require_once "views/front/association/partenaires.view.php";
}
function getChocolat()
{
    $title = "Le chocolat";
    $description = "Le chocolat et ces effets sur nos animaux";

    require_once "views/front/articles/chocolat.view.php";
}
function getEducateur()
{
    $title = "Les éducateurs";
    $description = "Page listant les éducateurs canin";

    require_once "views/front/articles/educateur.view.php";
}
function getPlantes()
{
    $title = "Les plantes";
    $description = "Page parlant des plantes et de leur toxicité";

    require_once "views/front/articles/plantes.view.php";
}
function getSterilisation()
{
    $title = "La stérilisation";
    $description = "Page traitant de la stérilisation";

    require_once "views/front/articles/sterilisation.view.php";
}
function getTemperature()
{
    $title = "La température";
    $description = "Page traitant de la température";

    require_once "views/front/articles/temperature.view.php";
}
function getContact()
{
    $title = "Contact";
    $description = "Page de contact";

    require_once "views/front/contact/contact.view.php";
}
function getDon()
{
    $title = "Faire un don";
    $description = "Page pour faire un don";

    require_once "views/front/contact/don.view.php";
}
function getMentions()
{
    $title = "Mentions légales";
    $description = "Page listant les mentions légales";

    require_once "views/front/contact/mentions.view.php";
}
