<?php
ob_start();
?>
<?= styleTitreNiveau2("Modification d'une news", COLOR_TITRE_ADMIN); ?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="etape" value="2">
    <label for="typeActu">Type d'actualité : </label>
    <select name="typeActu" id="typeActu" class="form-control" onchange="submit()">
        <option></option>
        <?php foreach($typeActualites as $type) :?>
            <option value="<?= $type['id_type_actualite'] ?>"
                <?php if (isset($_POST['typeActu']) && $_POST['typeActu'] === $type['id_type_actualite'])
                echo "selected" ;
                ?>>
                <?= $type['libelle_type'] ?> 
            </option>
        <?php endforeach; ?>
    </select>
</form>


<!-- 
<div class="row mt-5">
    <div class="col text-center">
        <form method="POST" action="">
            <input type="hidden" name="deconnexion" value="true" />
            <input type="submit" class="btn btn-primary" value="Se déconnecter" />
        </form>
    </div>
</div> -->

<?php
$contentAdminAction = ob_get_clean();
?>