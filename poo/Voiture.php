<?php

/**
 * Les noms de classe utilise le CamelCase
 */
class Voiture {
    /* Les propriétés permettent de définir des valeurs pour différencier les objets. Ce sont les caractéristiques de l'objet */
    public $marque;
    public $modele;
    public $annee;

    /* Les méthodes sont des fonctions qui vont être liées à l'objet qui sera déclaré */
    public function demarrer()
    {
        echo "je démarre...";
    }
}

$nb = "un nombre";
/* declarer une variable de type objet s'appelle INSTANCIER
On utilise le mot-clé new suivi du nom de la classe
*/

$voiture = new Voiture;
echo "<pre>";
var_dump($nb, $voiture);
echo "</pre>";
