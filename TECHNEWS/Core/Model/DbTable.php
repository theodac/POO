<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:52
 */

namespace Core\Model;

#une classe abstraite ne peut pas etre instancier directement .
#C'est une classe ou toute ses propriete et methode n'on pas ete definit
abstract class DbTable
{

    // -- Nom de la Table
    protected $_table;

    // -- Clé Primaire
    protected $_primary;

    // -- Class a Mapper
    protected $_classToMap;

    // Objet PDO , BDD
    private $_db;

    public function  __construct()
    {
        $this->_db = DbFactory::PdoFactory();

    }

    /**
     * Récupere un enregistrement dans la BDD
     * @param string $where
     * @param string $orderby
     * @param string $limite
     * @param string $offset
     * @return array
     */
    public function fetchAll(
        $where      = '',
        $orderby    = '',
        $limite     = '',
        $offset     = ''
    ){
        $sql = "SELECT * FROM " . $this->_table;
        #Si $where n'est pas vide, alors je l'inclus dans ma requete
        if ($where != ''){
            $sql .=  ' WHERE ' . $where;
        }
        if ($orderby != ''){
            $sql .= ' ORDER BY ' . $orderby;
        }
        if ($limite != ''){
            $sql .= ' LIMIT ' . $limite;
        }
        if ($offset != ''){
            $sql .= ' OFFSET ' . $offset;
        }



        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(
            \PDO::FETCH_CLASS,
            $this->_classToMap
        );
    }

}