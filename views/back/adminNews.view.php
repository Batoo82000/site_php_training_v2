<?php
ob_start();
echo styleTitreNiveau1("Page d'aministration des news", COLOR_TITRE_ADMIN);
?>

<a href="genererNewsAdminAjout" class="btn btn-primary">Ajouter</a>
<a href="genererNewsAdminModif" class="btn btn-primary">Modifier</a>
<a href="genererNewsAdminSuppr" class="btn btn-primary">Supprimer</a>


<?= $contentAdminAction ?>

    <?php if($alert !==""){
        echo afficherAlerte($alert, $alertType);
     } ?>

<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>