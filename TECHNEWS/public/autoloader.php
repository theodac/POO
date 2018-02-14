<?php
class Autoloader {
    /**Quands une fonction est static on peut appelle la fonction sans instancier la classe  , pas besoin de mettre de new ,
    la fonction static apartient a la classe pas a l'objet instancier   ,de ce fait quands on appelera la fonction static
    on passera par la class , les fonctions static ne peuvent apellez que des fonction static .
    Par contre une fonction non static peut apellez une fonction static a l'interieur  de celle ci */
    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    public static function autoload($class){
        echo 'Autoload pour : ';
        var_dump($class);
        echo '<br>';
        require PATH_ROOT . '/' . $class . '.php';
    }
}