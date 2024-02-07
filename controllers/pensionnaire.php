<?php 
require_once 'pdo.php';
require_once 'animal.dao.php';
require_once '../../utile/config.php';

$animaux = getAnimalFromStatus($_GET['idstatus']);

$titleH1 ="";

if ((int) $_GET['idstatus'] === ID_STATUT_A_L_ADOPTION) : $titleH1 ="Ils cherchent une famille";

elseif ((int) $_GET['idstatus'] === ID_STATUT_ADOPTE) : $titleH1 ="Les anciens"; 

elseif ((int) $_GET['idstatus'] === ID_STATUT_FALD) : $titleH1 ="Famille d’accueil longue durée";
    
endif;

foreach ($animaux as $key => $animal) {
    $image = getFirstImageAnimal($animal['id_animal']);
    $animaux[$key]['image'] = $image;

    $caracteres = getCaracteresAnimals($animal['id_animal']);
    $animaux[$key]['caracteres'] = $caracteres;
}

require_once "pensionnaires.view.php";