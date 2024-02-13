<?php
ob_start();
echo styleTitreNiveau1("La stérilisation", COLOR_TITRE_CONSEILS) ?>


<div class="row g-0 ">

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi illum consectetur dignissimos magni culpa ut officiis sit animi, recusandae voluptatum quas, nesciunt inventore explicabo dolorem ipsam nam. Voluptate, necessitatibus?</p>

</div>

<?php
$content = ob_get_clean();
require "views/template.php"
?>