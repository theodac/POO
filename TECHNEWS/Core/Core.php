<?php


class Core
{
    public function __construct($params)
    {
        // print_r($params);

        #Valeur par defaut.
        if (empty($params)) :
            $params['controller'] = 'news';
            $params['action']     = 'index';
        endif;
        #Recuperation des Parametres
        $controller = $params['controller'];
        $action     = $params['action'];

        if ($controller == 'news' && $action == 'index'){
            echo "<h1>Je suis la page d'accueil </h1>";
        }

        if ($controller == 'news' && $action == 'categorie'){
            echo "<h1>Je suis la page de categorie </h1>";
        }

        if ($controller == 'news' && $action == 'article'){
            echo "<h1>Je suis la page d'article </h1>";
        }

        if ($controller == 'membre' && $action == 'inscription'){
            echo "<h1>Je suis la page d'inscription </h1>";
        }
    }

}