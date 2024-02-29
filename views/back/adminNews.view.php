<?php
ob_start();
echo styleTitreNiveau1("Page d'aministration des news", COLOR_TITRE_ADMIN);
?>

<div class="form-row">
    <div class="form-group col-6">
        <label for="titreActu">Titre de l'actualité : </label>
        <input type="text" class="form-control" id="titreActu" name="titreActu" required/>
    </div>
</div>

<div class="row">
    <div class="col text-center">
        <form method="POST" action="">
            <input type="hidden" name="deconnexion" value="true" />
            <input type="submit" class="btn btn-primary" value="Se déconnecter" />
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>