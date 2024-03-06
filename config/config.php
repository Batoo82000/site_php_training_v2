<?php
const COLOR_TITRE_ASSO = "perso_ColorRoseMenu";
const COLOR_TITRE_PENSIONNAIRES = "perso_ColorOrangeMenu";
const COLOR_TITRE_ACTUS = "perso_ColorVertMenu";
const COLOR_TITRE_CONSEILS = "perso_ColorRougeMenu";
const COLOR_TITRE_CONTACTS = "perso_ColorBleuMenu";
const COLOR_TITRE_ADMIN = "perso_ColorAdminMenu";

const ID_STATUT_A_L_ADOPTION = 1;
const ID_STATUT_ADOPTE = 3;
const ID_STATUT_FALD = 5;
const ID_STATUT_MORT = 7;

const TYPE_NEWS = 1;
const TYPE_ACTIONS = 2;
const TYPE_EVENTS = 3;

const ALERT_SUCCESS = 1;
const ALERT_DANGER = 2;
const ALERT_WARNING = 3;
const ALERT_INFO = 4;

const COOKIE_PROTECT = "timer";

define("URL", str_replace("index.php", "" , (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
// define("URL", ...) : Cela signifie que nous créons une sorte de règle pour l'ordinateur. On lui dit que chaque fois qu'on dit "URL", on veut parler de quelque chose de spécifique.
// str_replace("index.php", "" , ...) : Cela signifie que nous voulons remplacer une partie du texte par une autre. Dans ce cas, nous remplaçons "index.php" par rien (c'est-à-dire, nous l'enlevons).
// (isset($_SERVER["HTTPS"]) ? "https" : "http") : Cela signifie que nous vérifions si le site est sécurisé (HTTPS) ou non (HTTP). Si c'est sécurisé, nous utilisons "https", sinon nous utilisons "http".
// $_SERVER[HTTP_HOST] : Cela signifie que nous obtenons le nom du site web où nous sommes.
// $_SERVER[PHP_SELF] : Cela signifie que nous obtenons le chemin du fichier PHP en cours d'exécution.
// Maintenant, mettons tout cela ensemble :
// Nous obtenons le nom du site web ($_SERVER[HTTP_HOST]) et le chemin du fichier PHP en cours d'exécution ($_SERVER[PHP_SELF]).
// Ensuite, nous regardons si le site est sécurisé ou non. Si oui, nous utilisons "https", sinon nous utilisons "http".
// Nous retirons le nom du fichier PHP (index.php) de l'URL.
// Enfin, nous disons à l'ordinateur que chaque fois que nous disons "URL", nous voulons parler de cette adresse web spécifique.
// C'est comme si nous disions à l'ordinateur : "Hé, tu sais, quand je dis 'URL', je veux dire l'adresse de cette page web spécifique où nous sommes en ce moment, et tu dois enlever le nom du fichier 'index.php' de cette adresse."
//Grâce à ça, on obtient le chemin absolu de notre site.