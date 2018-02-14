<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 12:33
 */

namespace Core\Controller;


class AppController
{
    private $_viewparams;

    protected function render($view, Array $viewparam = []){
        #Recuperation et affectation des parametres de la vue
        $this->_viewparams = $viewparam;

        #Permet d'acceder au tableau directement dans des variables
        extract($this->_viewparams);

        #Chargement du header
        include_once PATH_HEADER;

        #Chargement de la vue utilisateur
        include_once PATH_VIEWS . '/' . $view . '.php';

        #Chargement du footer
        include_once PATH_FOOTER;
    }

    /**
     * Renvoi le tableau de parametres de la vue
     * @return \ArrayObject
     */
    public function getViewparams()
    {
        $object = new \ArrayObject($this->_viewparams);
        $object->setFlags(\ArrayObject::ARRAY_AS_PROPS);
        return $object;
    }

    /**
     * Permet de debugger les parametres de la vue ou le parametre passé a la fonction.
     * @param array $params
     */
    public function debug(Array $params = []){
        if (empty($params)):
            $params = $this->_viewparams;
        endif;

        echo '<pre>';
        echo print_r($params);
        echo '</pre>';
    }

}