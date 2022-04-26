<?php
require "autoload.php";

$controleur = $_GET["c"] ?? "produit";
$methode    = $_GET["m"] ?? "index";

$nomClasse = "Controleurs\\" . ucfirst($controleur) . "Controleur";

$controleur = new $nomClasse;
$controleur->$methode();


/**
 * le QUERY STRING est la partie de l'URL qui commence par ? et qui est une suite de clé=valeur séparées par des &
 *      index.php?nom=cérien&prenom=jean&age=30
 *      index.php?m=ajouter
 *      index.php
 */