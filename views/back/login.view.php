<?php
ob_start();
echo styleTitreNiveau1("Login", COLOR_TITRE_ADMIN);
?>


<div class="m-5">
  <form action="" method="POST">
    <div class="form-group row g-0 align-items-center">
      <label for="login" class="col-6 col-md-3 col-lg-2 text-right pr-5">Login : </label>
      <input type="text" name="login" id="login" class="col-6 col-md-9 col-lg-10 form-control" required/>
    </div>
    <div class="form-group row g-0 align-items-center">
      <label for="password" class="col-6 col-md-3 col-lg-2 text-right pr-5">Password : </label>
      <input type="password" name="password" id="password" class="col-6 col-md-9 col-lg-10 form-control" required/>
    </div>
    <div class="row g-0 pt-3">
      <input type="submit" name="submit" value="Se connecter" class="btn btn-primary"/>
    </div>
  </form>
</div>

<?php if ($alert !== "") { 
  echo afficherAlerte($alert, ALERT_DANGER);
}
?>

<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>