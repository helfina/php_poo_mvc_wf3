<?php

include "Voiture.php";

$v = new Voiture("Peugeot", "508", "l'année du covid");
echo "<pre>"; var_dump($v);

$v2 = new Voiture;

$moto = new Moto;
$moto->setMarque("harley davidson");
$moto->setModele("cowboy");
$moto->setAnnee(2010);

echo "Moto :" . $moto->getMarque() . "<br>";