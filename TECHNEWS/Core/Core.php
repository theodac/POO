<?php

namespace Core;
use Core\Controller\AppController;

class Core extends AppController
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
        $controller = 'Application\Controller\\'.ucfirst($params['controller']).'Controller';
        $action     = $params['action'].'Action';
        #On verifie si le controller existe
        if (file_exists(PATH_ROOT . '\\'. $controller.'.php')) :

            $obj = new $controller;
        #Je verifier si l'action est existe
            if (method_exists($obj , $action)) :
                $obj->$action();
            else :
                $this->render('error/404',[
                    'message'=>'Ce action n\'existe pas'
                ]);
            endif;

        else :
        $this->render('error/404',[
            'message'=>'Ce controleur n\'existe pas'
        ]);
        endif;



        /*if ($controller == 'news' && $action == 'index'){
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
        }*/

    }

}