<?php
/**
 * Creation d'une class Ecole :
 * Une classe PHP est une entité regroupant des
 * variables et des fonctions .
 * Chacune de ces fonctions aura accès aux variables de cette entité
 *
 */

class Ecole
{

    # Declaration des propriétés de notre classe "Ecole"
    private $NomEcole,
            $AdresseEcole,
            $DirecteurEcole,
            $Classes = [];

    #Afin de pouvoir attribuer une valeur à
    #mes différentes variables , je vais mettre en place un constructeur.
    /**
     * Ecole constructor.
     * @param $NomEcole
     * @param $AdresseEcole
     * @param $DirecteurEcole
     */
    public function __construct($NomEcole,$AdresseEcole,$DirecteurEcole)
    {
        #Ici nous allons attribuer une valeur aux propriété de la class .

        #La valeur est passé grace au constructeur
        $this->NomEcole       = $NomEcole;
        $this->AdresseEcole   = $AdresseEcole;
        $this->DirecteurEcole = $DirecteurEcole;
    }
    /* ---------------------------------Getters----------------------------*/
    public function getDirecteurEcole(){
        return $this->DirecteurEcole;
    }
    public function getNomEcole(){
        return $this->NomEcole;
    }

    public function getAdresseEcole()
    {
        return $this->AdresseEcole;
    }
    /* ---------------------------------Setters----------------------------*/
    /**
     * Affectez une nouvelle valeur a NomEcole
     * @param mixed $NomEcole
     */
    public function setNomEcole($NomEcole)
    {
        $this->NomEcole = $NomEcole;
    }

    /**
     * @param mixed $AdresseEcole
     */
    public function setAdresseEcole($AdresseEcole)
    {
        $this->AdresseEcole = $AdresseEcole;
    }

    /**
     * @param mixed $DirecteurEcole
     */
    public function setDirecteurEcole($DirecteurEcole)
    {
        $this->DirecteurEcole = $DirecteurEcole;
    }

    /**
     * @param array $Classes
     */
    /**
     * @return array
     */
    public function getClasses()
    {
        return $this->Classes;
    }
    public function AjouterUneClasses(Classes $Classes)
    {
        $this->Classes[] = $Classes;
    }

}