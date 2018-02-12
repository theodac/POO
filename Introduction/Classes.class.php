<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 11:28
 */

class Classes
{

    private $NomClasse,
            $Eleves = [];

    public function __construct($NomClasse)
    {
        $this->NomClasse = $NomClasse;
    }

    /**
     * GETTERS
     * @return mixed
     */
    public function getNomClasse()
    {
        return $this->NomClasse;
    }


    public function setNomClasse($NomClasse)
    {
        $this->NomClasse = $NomClasse;
    }


    public function getEleves()
    {
        return $this->Eleves;
    }



    public function AjouterUnEleve(Eleves $Eleves)
    {
        $this->Eleves[] = $Eleves;
    }


}