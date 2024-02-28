<?php 
ob_start();
echo styleTitreNiveau1("Ils ont besoin de vous !", "perso_ColorRoseMenu") ?>
<!-- section carousel -->
<div id="carouselExampleIndicators" class="carousel slide">

    <div class="carousel-indicators">

        <?php for ($i=0; $i < count ($animaux); $i++) : ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="<?php echo $i === 0 ? 'active' : ''?> bg-dark" aria-current="true" aria-label="Slide 1"></button>
        <?php endfor ?>


    </div>

    <div class="carousel-inner">

        <?php foreach ($animaux as $key => $animal) : ?>
        <!-- Début d'un item -->
        <div class="carousel-item <?php echo $key === 0 ? 'active' : ''?>">
            <div class="row g-0 border rounded overflow-hidden mb-4 perso_bgRose">
                <div class="col-12 col-md-auto text-center">
                    <img src="<?= URL ?>public/sources/images/sites/<?= $animal['image']['url_image'] ?>" alt="<?= $animal['image']['libelle_image'] ?>" style='height:250px'>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="perso_ColorRoseMenu perso_policeTitre perso_textShadow">"<?= $animal['nom_animal'] ?>"</h3>
                    <div class="text-muted mb-1"><?= date("d/m/Y", strtotime($animal['date_naissance_animal'])) ?></div>
                    <p class="mb-auto">
                        <?= affichageCoupe(nl2br($news["contenu_actualite"] ), 300)  ?>
                    </p>
                    <a href="animal&idAnimal=<?= $animal['id_animal'] ?>" class="btn btn-primary">
                        Visitez ma page
                    </a>
                </div>
            </div>
        </div>
        <!-- Fin d'un item -->
        <?php endforeach; ?>

    </div>
</div>
<!-- section carousel -->

<div class="row">
    <div class="col-6 mt-3">
        <?php
        $txt = "<img src='public/sources/images/Autres/icones/journal.png' alt='logo news'>
        Nouvelles des adoptés";
        echo styleTitreNiveau2($txt, COLOR_TITRE_ACTUS) ?>
    </div>
    <div class="col-6 mt-3">
    <?php
        $txt = "<img src='public/sources/images/Autres/icones/action.png' alt='logo news'>
        Evènements et actions";
        echo styleTitreNiveau2($txt, COLOR_TITRE_PENSIONNAIRES) ?>
    </div>
</div>

<div class="row">

    <div class="col-6">
        <div class="row g-0 border rounded mb-4">
            <div class="col-auto d-none d-lg-block">
                <img src="public/sources/images/sites/<?= $news["url_image"] ?>" alt="<?= $news["libelle_image"] ?>" style='height:150px'>
            </div>
            <div class="col p-3 d-flex flex-column position-static perso_bgVert">
                <h3 class="mb-0 perso_ColorVertMenu perso_textShadow perso_policeTitre"><?= $news["libelle_actualite"] ?></h3>
                <p class="perso_Size12 mt-2"><?= affichageCoupe(nl2br($news["contenu_actualite"] ), 100) ?></p>
                <a href="<?= URL ?>actus&type=<?= TYPE_NEWS ?>" class="btn btn-primary">
                    Voir les nouvelles de adoptés
                </a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row g-0 border rounded mb-4">
            <div class="col-auto d-none d-lg-block">
                <img src="public/sources/images/sites/<?= $actions["url_image"] ?>" alt="<?= $actions["libelle_image"] ?>" style='height:150px'>
            </div>
            <div class="col p-3 d-flex flex-column position-static perso_bgOrange">
                <h3 class="mb-0 perso_ColorOrangeMenu perso_textShadow perso_policeTitre"><?= $actions["libelle_actualite"] ?></h3>
                <p class="perso_Size12 mt-2">
                    <?= affichageCoupe(nl2br($actions["contenu_actualite"] ), 100) ?>
                </p>
                <a href="<?= URL ?>actus&type=<?= TYPE_EVENTS ?>" class='btn btn-primary'>Les events </a>
                <a href="<?= URL ?>actus&type=<?= TYPE_ACTIONS ?>" class='btn btn-primary'>Les actions </a>
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean();
require "views/commons/template.php"
?>