<?php
ob_start();
echo styleTitreNiveau2("Supression d'une news", COLOR_TITRE_ADMIN);
?>

    <?php if($alert !==""){
        echo afficherAlerte($alert, $alertType);
     } ?>

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