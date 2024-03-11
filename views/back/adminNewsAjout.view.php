<?php
ob_start();
echo styleTitreNiveau2("Ajout d'une news", COLOR_TITRE_ADMIN);
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="row">

        <div class="form-group col-6">
            <label for="titreActu">Titre de l'actualité : </label>
            <input type="text" class="form-control" id="titreActu" name="titreActu" required />
        </div>

        <div class="form-group col-6">
            <label for="typeActu">Type de l'actualité : </label>
            <select class="form-select" id="typeActu" name="typeActu" required>
                <?php foreach($typeActualites as $type) { ?>
                <option value="<?= $type['id_type_actualite'] ?>"><?= $type['libelle_type'] ?></option>
                <?php } ?>
            </select>
        </div>

    </div>

    <div class="form-group">
        <label for="contenuActu">Texte de l'actualité : </label>
        <textarea class="form-control" id="contenuActu" name="contenuActu" rows="5" required></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="imageActu">Image pour l'actualité : </label>
        <input type="file" class="form-control-file" id="imageActu" name="imageActu" />
    </div>
    <div class="row g-0 mt-2">
        <input type="submit" class="btn btn-primary col" value="Ajouter">
    </div>



</form>

<div class="row mt-5">
    <div class="col text-center">
        <form method="POST" action="">
            <input type="hidden" name="deconnexion" value="true" />
            <input type="submit" class="btn btn-primary" value="Se déconnecter" />
        </form>
    </div>
</div>

<?php
$contentAdminAction = ob_get_clean();
?>