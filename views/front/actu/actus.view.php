<?php
ob_start();
echo styleTitreNiveau1($titleH1, COLOR_TITRE_ACTUS) ?>


<?php foreach($actualites as $actualite) :
echo styleTitrePost("<span class='".COLOR_TITRE_ACTUS."'> {$actualite['libelle_actualite']} </span> Posté le : <span class='".COLOR_TITRE_ACTUS."'> ".date("d/m/Y", strtotime($actualite['date_publication']))." </span>");
?>

    <div class="row g-0 align-items-center" style="min-height: 300px">
        <div class="col-12 col-lg-3 text-center">
            <img src="public/sources/images/sites/<?= $actualite['image']['url_image'] ?>" alt="<?= $actualite['image']['libelle_image'] ?>" style="max-height: 280px;" class="img-fluid p-2">
        </div>
        <div class="col-12 col-md-9">
            <p>
                <?= $actualite['contenu_actualite'] ?>
            </p>    
    </div>

<?php endforeach; ?>

<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>