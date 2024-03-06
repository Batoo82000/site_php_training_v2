<?php
require_once 'pdo.php';

function getActualiteFromBD($type)
{
    $bdd = connexionPDO();
    $req = "SELECT *
            FROM actualite
            WHERE id_type_actualite = :type
            order by date_publication desc
            ";
    
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':type', $type, PDO::PARAM_STR);
    $stmt->execute();
    $actualites = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualites;
}

function getImageActualiteFromBd($idImage){
    $bdd = connexionPDO();
    $req = "
        SELECT *
        FROM image
        WHERE id_image = :idImage
        ";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':idImage', $idImage, PDO::PARAM_INT);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $image;
}

function getLastNews(){
    $bdd = connexionPDO();
    $req = "SELECT id_actualite, libelle_actualite, contenu_actualite, date_publication, id_type_actualite, a.id_image, libelle_image, url_image
            FROM actualite a
            inner join image i on a.id_image = i.id_image
            WHERE id_type_actualite = :type
            order by date_publication desc
            LIMIT 1
            ";
    
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':type', TYPE_NEWS, PDO::PARAM_STR);
    $stmt->execute();
    $actualite = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualite;

}
function getLastActionsOrEvents(){
    $bdd = connexionPDO();
    $req = "SELECT id_actualite, libelle_actualite, contenu_actualite, date_publication, id_type_actualite, a.id_image, libelle_image, url_image
            FROM actualite a
            inner join image i on a.id_image = i.id_image
            WHERE id_type_actualite = :typeEvent or id_type_actualite = :typeAction
            order by date_publication desc
            LIMIT 1
            ";
    
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':typeEvent', TYPE_EVENTS, PDO::PARAM_STR);
    $stmt->bindValue(':typeAction', TYPE_ACTIONS, PDO::PARAM_STR);
    $stmt->execute();
    $actualite = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualite;
}

function getTypesActualite(){
    $bdd = connexionPDO();
    $req = "SELECT *
            FROM type_actualite
            ";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $typeActualite = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $typeActualite;
}

function insertActualiteIntoBD($titreActu, $typeActu, $contenuActu, $date, $image) {
    $bdd = connexionPDO();
    $req = "
    INSERT INTO actualite (libelle_actualite, contenu_actualite, date_publication, id_type_actualite, id_image)
    values (:titre, :contenu, :date, :typeActualite, :image)
            ";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':titre', $titreActu, PDO::PARAM_STR);
    $stmt->bindValue(':contenu', $contenuActu, PDO::PARAM_STR);
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $stmt->bindValue(':typeActualite', $typeActu, PDO::PARAM_INT);
    $stmt->bindValue(':image', $image, PDO::PARAM_INT);
    $resultat = $stmt->execute();
    $stmt->closeCursor();
    if ($resultat > 0) return true;
    else return false;

}

function insertImageNewsIntoBD($nomImage, $url) {
    $bdd = connexionPDO();
    $req = "
    INSERT INTO image (libelle_image, url_image, description_image)
    values (:nomImage, :url, :description)
            ";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':nomImage', $nomImage, PDO::PARAM_STR);
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $stmt->bindValue(':description', $nomImage, PDO::PARAM_STR);
    $stmt->execute();
    $resultat = $bdd->lastInsertId();
    $stmt->closeCursor();
    return $resultat;
}