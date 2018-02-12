<?php
require_once "Ecole.class.php";
require_once "Classes.class.php";
require_once "Eleves.class.php";

/**
 * Création d'une instance de la classe Ecole.
 * Ici , notre ariable $Ecole est un Object de la classe Ecole . En ce sens, elle aa accès à
 * l'ensemble des variables et fonction qui la compose.
 */

$Ecole = new Ecole('WF3 Rouen' , 'Place Saint-Marc' ,'Alexandre MARTINI');

#Affichhage de l'Objet Ecole
var_dump($Ecole);

# Afficher le nom de l'ecole
#Cannot  access private property
#echo $Ecole->NomEcole;

echo "<br>" . $Ecole->getNomEcole() ;

#Je souhaite change le nom de l'ecole

$Ecole->setNomEcole('Web Force 3 Rouen ltd');
echo "<br>" . $Ecole->getNomEcole();

# Classes
$Classes1 = new Classes('Front');
$Classes2 = new Classes('Back');
$Classes3 = new Classes('Fullstack');


#Eleves
$Eleve1 = new Eleves('JOURAND' , 'Benjamin' , 26);
$Eleve2 =new Eleves('BACON' , 'Terry' , 24);
$Eleve3 = new Eleves('BOUKHATEB' , 'Abdel' , 21);
$Eleve4 = new Eleves('FOLLIN' , 'Emilie' , 48);

$Classes1->AjouterUnEleve($Eleve1);
$Classes1->AjouterUnEleve($Eleve2);
$Classes2->AjouterUnEleve($Eleve3);
$Classes3->AjouterUnEleve($Eleve4);

$Ecole->AjouterUneClasses($Classes1);
$Ecole->AjouterUneClasses($Classes2);
$Ecole->AjouterUneClasses($Classes3);
echo "<pre>";
print_r($Ecole);
echo "</pre>";


#Pouvoir afficher dans une liste ul li la liste de toute les classes de l'ecole et pour chaque classe la liste d'eleves

echo '<ol>';

$lesClasses = $Ecole->getClasses();
foreach ($lesClasses as $objetClasse){
    echo '<li>';
    echo $objetClasse->getNomClasse();
    echo '<ul>';
    $lesEleves = $objetClasse->getEleves();
    foreach ($lesEleves as $objetEleves){
        echo " <br>" .$objetEleves->getNomComplet();
    }
    echo '</ul>';
    echo '</li>';

}
echo '</ol>';
