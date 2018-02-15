<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 10:51
 */

namespace Application\Controller;



use Application\Model\Article\ArticleDb;
use Application\Model\Auteur\AuteurDb;
use Application\Model\Categorie\CategorieDb;
use Application\Model\Tags\TagsDb;
use Core\Controller\AppController;

#une classe ne peut herite que d'une seule classe

class NewsController extends AppController
{
    public function indexAction(){

        #Connexion a la BDD
        $articleDb = new ArticleDb;

        #Recuperation des articles
        $articles = $articleDb->fetchAll();

        #Recuperation des articles en spotlight
        $spotlight = $articleDb->fetchAll('SPOTLIGHTARTICLE = 1');

        $this->render('news/index',[
            'articles' => $articles,
            'spotlight' => $spotlight
        ]);
      #include_once PATH_VIEWS . '/news/index.php';

    }
    public function categorieAction(){
        $categorieDb = new CategorieDb;
        $categories = $categorieDb->fetchAll();
       $this->render('news/categorie',[
           'categories' => $categories
       ]);

    }
    public function articleAction(){
        $articleDb = new ArticleDb;
        $articles = $articleDb->fetchAll();
        $this->render('news/article',[
            'articles' => $articles
        ]);
    }
    public function businessAction(){
        $articleDb= new ArticleDb();
        $article = $articleDb->fetchAll('IDCATEGORIE = 2');
        $this->render('news/categorie',['articles'=>$article]);
    }
    public function computingAction(){
        $articleDb= new ArticleDb();
        $article = $articleDb->fetchAll('IDCATEGORIE = 3');
        $this->render('news/categorie',['articles'=>$article]);
    }
    public function techAction(){
        $articleDb= new ArticleDb();
        $article = $articleDb->fetchAll('IDCATEGORIE = 4');
        $this->render('news/categorie',['articles'=>$article]);
    }


}