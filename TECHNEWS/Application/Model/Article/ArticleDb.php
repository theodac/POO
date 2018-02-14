<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:12
 */

namespace Application\Model\Article;


use Core\Model\DbTable;

class ArticleDb extends DbTable
{
    protected $_table        = 'article';
    protected $_primary      = 'IDARTICLE';
    protected $_classToMap   = Article::class;
}