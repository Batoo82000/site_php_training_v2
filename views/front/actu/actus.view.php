<?php
ob_start();
echo styleTitreNiveau1("Actus", COLOR_TITRE_ACTUS) ?>

<?php
echo styleTitrePost("Posté le : <span class='".COLOR_TITRE_ACTUS."'>05/2019</span> par <span class='".COLOR_TITRE_ACTUS."'> Framboise</span>");
?>

<div class="row g-0 align-items-center" style="min-height: 300px">
    <div class="col-12 col-md-3 text-center">
        <img src="public/sources/images/animaux/chat/framboise/framboise.jpg" alt="Framboise" style="max-height: 280px;">
    </div>
    <div class="col-12 col-md-9">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus
            vel nibh sagittis aliquam. Suspendisse potenti. Vivamus tincidunt
            accumsan nisl, eu rutrum purus. Pellentesque habitant morbi tristique
            senectus et netus et malesuada fames ac turpis egestas. Sed
            tincidunt, lacus in tincidunt sollicitudin, nunc risus tincidunt
        </p>    
</div>
<div class="row g-0 align-items-center" style="min-height: 300px">
    <div class="col-12 col-md-3 text-center">
        <img src="public/sources/images/animaux/chat/framboise/framboise.jpg" alt="Framboise" style="max-height: 280px;">
    </div>
    <div class="col-12 col-md-9">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus
            vel nibh sagittis aliquam. Suspendisse potenti. Vivamus tincidunt
            accumsan nisl, eu rutrum purus. Pellentesque habitant morbi tristique
            senectus et netus et malesuada fames ac turpis egestas. Sed
            tincidunt, lacus in tincidunt sollicitudin, nunc risus tincidunt
        </p>    
</div>



<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>