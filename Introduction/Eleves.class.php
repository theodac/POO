<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 11:32
 */

class Eleves
{
    private $Nom,
            $Prenom,
            $Age;

    public function __construct($Nom,$Prenom,$Age)
    {
        $this->Nom      = $Nom;
        $this->Prenom   = $Prenom;
        $this->Age      = $Age;

    }

    /* Getter */
    public function getNom()
    {
        return $this->Nom;
    }


    public function getPrenom()
    {
        return $this->Prenom;
    }


    public function getAge()
    {
        return $this->Age;
    }

    /*Setters */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }


    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }


    public function setAge($Age)
    {
        $this->Age = $Age;
    }
    public function getNomComplet(){
        return $this->Prenom ." ". $this->Nom;
    }

}