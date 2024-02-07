<?php

function getAnimalFromStatus($idStatus)
{
    $bdd = connexionPDO();
    $req = "SELECT *
            FROM animal 
            where id_status = :idStatus";
    if ((int) $idStatus === ID_STATUT_ADOPTE) {
        $req .= " or id_status = " . ID_STATUT_MORT;
    }
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':idStatus', $idStatus);
    $stmt->execute();
    $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $animaux;
}

function getFirstImageAnimal($idAnimal) {
    $bdd = connexionPDO();
    $stmt = $bdd->prepare('
        SELECT i.id_image, libelle_image, url_image, description_image
        FROM image i
        INNER JOIN contient c on i.id_image = c.id_image
        INNER JOIN animal a on a.id_animal = c.id_animal
        WHERE a.id_animal= :idAnimal
        LIMIT 1
    ');
    $stmt->bindValue(':idAnimal', $idAnimal);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $image;
}

function getCaracteresAnimals($idAnimal) {
    $bdd = connexionPDO();
    $stmt = $bdd->prepare('
        SELECT c.libelle_caractere_m, c.libelle_caractere_f
        FROM caractere c
        INNER join dispose d on c.id_caractere = d.id_caractere
        where id_animal = :idAnimal
    ');
    $stmt->bindValue(':idAnimal', $idAnimal);
    $stmt->execute();
    $caracteres = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $caracteres;
}
