<?php 
function styleTitreNiveau1($text, $color){
    $txt = "<h1 class='text-center my-3 perso_policeTitre perso_textShadow ".$color."'>";
    $txt .= $text;
    $txt .= "</h1>";
    return $txt;
}
function styleTitreNiveau2($text, $color){
    $txt = "<h2 class='text-center my-3 perso_policeTitre perso_textShadow ".$color."'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}
function styleTitreNiveau3($text, $color){
    $txt = "<h3 class=' my-3 perso_policeTitre perso_textShadow perso_Size26 ".$color."'>";
    $txt .= $text;
    $txt .= "</h3>";
    return $txt;
}
function styleTitrePost($text){
    $txt = "<h3 class=' my-3 perso_policeTitre perso_textShadow perso_Size26 border-bottom border-dark'>";
    $txt .= $text;
    $txt .= "</h3>";
    return $txt;
}

function affichageCoupe($str, $taille){
    $desc ="";
    if(strlen($str) > $taille/2){
        if(strpos($str, '<br />', ($taille/2)) < $taille){
            $desc = substr($str,0 , strpos($str, '<br />', ($taille/2)));
        } else if (strpos($str, '.', ($taille/2)) < $taille){
            $desc = substr($str,0 , strpos($str, '.', ($taille/2)));
        } else if ((strpos($str, '<br />', 0)) <= ($taille/2)){
            $desc = substr($str,0 , strpos($str, '<br />', 0));
        } else if ((strpos($str, '.', 0)) <= ($taille/2)){
            $desc = substr($str,0 , strpos($str, '.', 0));
        } else {
            $desc = substr($str,0 , strpos($str, ' ', ($taille/3)));
        }
    } else {
        $desc = $str;
    }
    $desc.= "<b class='text-primary'>[...]</b>";
    return $desc;
}

function afficherAlerte($text, $type){
    $alertType ="";
    if($type === ALERT_SUCCESS) $alertType = "success";
    if($type === ALERT_DANGER) $alertType = "danger";
    if($type === ALERT_INFO) $alertType = "info";
    if($type === ALERT_WARNING) $alertType = "warning";
    $txt = "<div class='mt-2 alert alert-".$alertType." alert-dismissible fade show' role='alert'>";
    $txt .= $text;
    $txt .= "</div>";
    return $txt;
}
?>