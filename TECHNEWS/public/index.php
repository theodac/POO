<?php
/**
 * Nous sommes ici sur le point d'entrée de notre application
 * En MVC c'est ce que l'on appelle : un Front Controller.
 * L'ensemeble des actions / requetes de notre site internet passera uniquement par ce fichier
 * Il a pour mission de transferer au bon controleur la demande de l'utilisateur .
 * -----------
 * Dans un framework et en MVC nous utilisons la puissance de  la réecriture des url via la création dd'un fichier .htaccess
 */
#Chargement du bootstrap.php
use Core\Core;

require_once 'bootstrap.php';



$core = new Core($_GET);

