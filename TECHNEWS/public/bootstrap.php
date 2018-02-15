<?php
#quelque constante utiles
define('PATH_ROOT' , dirname(__DIR__));
define('PATH_PUBLIC','/POO/TECHNEWS/public/');
define('PATH_APPLICATION' , PATH_ROOT . '/Application');
define('PATH_LAYOUT' , PATH_APPLICATION  . '/Layout');
define('PATH_HEADER' , PATH_LAYOUT  . '/header.inc.php');
define('PATH_FOOTER' , PATH_LAYOUT . '/footer.inc.php');
define('PATH_VIEWS' , PATH_APPLICATION . '/Views');
define('PATH_SIDEBAR',PATH_LAYOUT . '/sidebar.inc.php' );



#Connexion a la BDD
define('DBHOST','localhost');
define('DBNAME','news');
define('DBUSER','root');
define('DBPASS','');
#Chargement de l'autoload
require_once 'autoloader.php';
Autoloader::register();