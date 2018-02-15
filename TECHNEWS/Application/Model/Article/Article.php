<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:09
 */

namespace Application\Model\Article;


use Application\Model\Auteur\AuteurDb;
use Application\Model\Categorie\CategorieDb;
use Core\Model\DbTable;

class Article
{
    private $IDARTICLE,
            $IDAUTEUR,
            $IDCATEGORIE,
            $TITREARTICLE,
            $CONTENUARTICLE,
            $FEATUREDIMAGEARTICLE,
            $SPECIALARTICLE,
            $SPOTLIGHTARTICLE,
            $DATECREATIONARTICLE,
            $CATEGORIEOBJ,
            $AUTEUROBJ;
    public function __construct()
    {
        #L'appel au constructeur se fait de façon automatique par la classee PDO !
        $categorieDb = new CategorieDb();
        $auterDb = new AuteurDb();
        $this->AUTEUROBJ = $auterDb->fetchOne($this->IDAUTEUR);
        $this->CATEGORIEOBJ = $categorieDb->fetchOne($this->IDCATEGORIE);

    }

    /**
     * @return mixed
     */
    public function getCATEGORIEOBJ()
    {
        return $this->CATEGORIEOBJ;
    }

    /**
     * @return mixed
     */
    public function getAUTEUROBJ()
    {
        return $this->AUTEUROBJ;
    }

    /**
     * @return mixed
     */
    public function getIDARTICLE()
    {
        return $this->IDARTICLE;
    }

    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getTITREARTICLE()
    {
        return $this->TITREARTICLE;
    }

    /**
     * @return mixed
     */
    public function getCONTENUARTICLE()
    {
        return $this->CONTENUARTICLE;
    }

    /**
     * @return mixed
     */
    public function getFEATUREDIMAGEARTICLE()
    {
        return $this->FEATUREDIMAGEARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPECIALARTICLE()
    {
        return $this->SPECIALARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPOTLIGHTARTICLE()
    {
        return $this->SPOTLIGHTARTICLE;
    }

    /**
     * @return mixed
     */
    public function getDATECREATIONARTICLE()
    {
        return $this->DATECREATIONARTICLE;
    }

    /**
     * Retourne l'url complete de l'image de l'article
     */
    public function getFULLIMAGEARTICLE(){
        return PATH_PUBLIC . '/image/product/'.$this->FEATUREDIMAGEARTICLE;
    }

    /**
     * Retourne une accroche de 170 caractères
     * @return string
     */
    public function getACCROCHEARTICLE() {




        $string = strip_tags($this->getCONTENUARTICLE());
        # Si ma chaine de caractère est supérieur a 170 je poursuis , sinon c'est inutile
        if (strlen($string) > 170) {

            #Je coupe ma chaine a 170
            $stringCut = substr($string, 0, 170);

            #Je m'assure de ne pas couper de mot !
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
        }
        return $string;
    }
}