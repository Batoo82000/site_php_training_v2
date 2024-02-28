<?php
ob_start();
echo styleTitreNiveau1("Page d'aministration du site", COLOR_TITRE_ADMIN);
?>

<div class="row">
    <div class="col text-center">
        <a href="genererPensionnaireAdmin" class="btn btn-primary">Gestion des pensionnaires</a>
    </div>
    <div class="col text-center">
        <a href="genererNewsAdmin" class="btn btn-primary">Gestion des News</a>
    </div>
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