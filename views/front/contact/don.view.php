<?php
ob_start();
echo styleTitreNiveau1("Donnations", COLOR_TITRE_CONTACTS) ?>

<?= styleTitreNiveau3("Faire un don", COLOR_TITRE_CONTACTS)?>

<div class="row g-0 ">

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi illum consectetur dignissimos magni culpa ut officiis sit animi, recusandae voluptatum quas, nesciunt inventore explicabo dolorem ipsam nam. Voluptate, necessitatibus?</p>

</div>
<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>