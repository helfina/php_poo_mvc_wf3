<?php
require_once "autoload.php";

$v = new Voiture("Peugeot", "508", "l'année du covid");
echo "<pre>"; var_dump($v); echo "</pre>";

$v->setMarque("Porsche");
echo "La marque de la voiture est " . $v->getMarque() . "<br>";
// echo "Pourtant je croyais que c'était " . $v->marque . "<br>";

$v2 = new Voiture;

$moto = new Moto;
$moto->setMarque("Harley Davidson");
$moto->setModele("Cowboy");
$moto->setAnnee(1950);

echo "Moto : " . $moto->getMarque() . "<br>";

/* NB : si j'affecte une valeur à une propriété qui n'existe pas dans la classe,
        PHP ajoute une propriété publique à l'objet... IL NE FAUT PAS FAIRE ÇA dans la mesure du possible */
$v->roues = 4;

# ///////////////////
/* EXO : 
    1. Dans index.php, déclarer un objet de la classe Voiture, Audi A4 de 2006 
    2. Ajouter une méthode publique à la classe Voiture : carteGrise
        cette méthode doit retourner un string contenant les informations de l'objet dans une balise UL
            <li>Marque : ....</li>
            <li>Modèle : ...</li>
            <li>Année : ...</li>
    3. Utiliser la méthode carteGrise pour afficher les infos de l'Audi
*/

$voiture = new Voiture("Audi", "A4", 2006);
echo $voiture->carteGrise();
echo $v->carteGrise();
$moto->setCylindre(250);
echo $moto->carteGrise();

/* On ne peut pas instantier d'objet de la classe Vehicule */
// $vehicule = new Vehicule;
// echo $vehicule->carteGrise();

