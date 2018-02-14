<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:30
 */

namespace Application\Model\Categorie;


class Categorie
{
    private $IDCATEGORIE,
            $LIBELLECATEGORIE,
            $ROUTECATEGORIE;

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
    public function getLIBELLECATEGORIE()
    {
        return $this->LIBELLECATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getROUTECATEGORIE()
    {
        return $this->ROUTECATEGORIE;
    }

}