<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:39
 */

namespace Core\Model;


class DbFactory
{
    public static function PdoFactory(){
        $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);

        #Gestion des erreurs :
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}