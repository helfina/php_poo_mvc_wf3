<?php

include "Voiture.php";

$nb = "un nombre";

/* Déclarer une variable de type objet s'appelle INSTANCIER. On utilise le mot-clé new
    suivi du nom de la classe */
$voiture = new Voiture;
/* L'opérateur -> permet d'accéder aux membres (propriétés et méthodes) d'un objet */
$voiture->marque = "Ferrari";
$voiture->modele = "Testarossa";
// $voiture->annee = 2000;
$voiture->setAnnee(2000);
$voiture->demarrer();

$v2 = new Voiture;
$v2->marque = "Ferrari";
$v2->modele = "Testarossa";
// $v2->annee = 2000;
$voiture->setAnnee(2000);

echo "<pre>"; var_dump($nb, $voiture, $v2); print_r($voiture); echo "</pre>";
echo "<hr>";

/* $objet1 = clone $objet2;
        Le mot-clé clone permet de créer une copie d'un objet dans une autre variable. 
    $objet1 = $objet2;
        Si le mot clone n'est pas utilisé, les 2 variables font référence au même objet.
*/
$v2 = clone $voiture; 
$voiture->modele = "328 GTS";
// $v2->annee = 1980;
$voiture->setAnnee(1980);

echo "<pre>"; var_dump($nb, $voiture, $v2); print_r($voiture); echo "</pre>";

$voiture->setAnnee(1984);
echo "Ma voiture est une " . $voiture->marque . " " . $voiture->modele . " de l'année " . $voiture->getAnnee() . "<br>";
