<?php
ob_start();

echo styleTitreNiveau1($titleH1, COLOR_TITRE_PENSIONNAIRES); ?>


<div class="row g-0">
    <?php foreach ($animaux as $animal) : ?>

        <div class="col-12 col-lg-6">
            <div class="row border border-dark rounded-3 m-2 align-items-center <?= ($animal['sexe']) ? "perso_bgVert" : "perso_bgRose"?>" style="height: 200px;">
                <div class="col p-2 center">
                    <img src="public/sources/images/animaux/<?= $animal['type_animal'] ?>/<?= $animal['image']['url_image'] ?>" class="img-thumbnail" alt="<?= $animal['image']['libelle_image'] ?>" style="max-height: 180px">
                </div>

                <?php
                $iconeChien = "";
                if ($animal['ami_chien'] === "oui") $iconeChien = "chienOk.png";
                else if ($animal['ami_chien'] === "non") $iconeChien = "chienBar.png";
                else if ($animal['ami_chien'] === "N/A") $iconeChien = "chienQuest.png";

                $iconeChat = "";
                if ($animal['ami_chat'] === "oui") $iconeChat = "chatOk.png";
                else if ($animal['ami_chat'] === "non") $iconeChat = "chatBar.png";
                else if ($animal['ami_chat'] === "N/A") $iconeChat = "chatQuest.png";
                
                $iconeBaby = "";
                if ($animal['ami_enfant'] === "oui") $iconeBaby = "babyOk.png";
                else if ($animal['ami_enfant'] === "non") $iconeBaby = "babyBar.png";
                else if ($animal['ami_enfant'] === "N/A") $iconeBaby = "babyQuest.png";
                ?>

                <div class="col-2 border-start border-end text-center border-dark">
                    <img src="public/sources/images/Autres/icones/<?= $iconeChien ?>" class="img-fluid m-1" alt="<?= $iconeChien ?>" style="width: 50px">
                    <img src="public/sources/images/Autres/icones/<?= $iconeChat ?>" class="img-fluid m-1" alt="<?= $iconeChien ?>" style="width: 50px">
                    <img src="public/sources/images/Autres/icones/<?= $iconeBaby ?>" class="img-fluid m-1" alt="<?= $iconeChien ?>" style="width: 50px">
                </div>
                <div class="col-6 text-center">
                    <div class="perso_policeTitre perso_Size20 mb-3"><?= $animal['nom_animal'] ?></div>
                    <div class="mb-2"><?= $animal['date_naissance_animal'] ?></div>


                    <div class="">
                        
                        <?php foreach ($animal['caracteres'] as $caractere) : ?>
                            <span class="badge bg-warning m-1 p-2 d-none d-sm-inline"><?= ($animal['sexe']) ? $caractere['libelle_caractere_m'] : $caractere['libelle_caractere_f'] ?></span>
                        <?php endforeach; ?>

                        <a href="?page=animal&idAnimal=<?= $animal['id_animal'] ?>" class="btn btn-primary my-3">Visitez ma page</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>