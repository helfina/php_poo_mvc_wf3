<?php

/**
 * Les noms de classe utilise le CamelCase.
 * En POO, le fichier qui contient la définition d'une classe, 
 *  est nommé comme la classe (en respectant la casse)
 */
class Voiture extends Vehicule {
    /* Les propriétés permettent de définir des valeurs pour différencier les objets. 
        Ce sont les caractéristiques de l'objet.
        Les niveaux d'accessibilité définissent où les propriétés sont directement accessibles 
        (c'est-à-dire avec ->)

        PUBLIC : la propriété est accessible partout
        PROTECTED : la propriété n'est accessible que dans sa classe et les classes qui héritent
        PRIVATE : la propriété n'est accessible que dans la classe
        */

    /** La méthode constructeur est exécutée à chaque fois qu'un nouvel objet est instancié 
     *  En PHP, le constructeur s'appelle __construct
     * NB : les méthodes qui commencent par 2 _ sont appelés des méthodes magiques en PHP
     * 
    */
    public function __construct($marque = "Renault", $modele = "R5", $annee = 1900){
        $this->setMarque($marque);
        $this->modele = $modele;
        //$this->annee = $annee;
        $this->setAnnee($annee);
    }

    /* Les méthodes sont des fonctions qui vont être liées à l'objet qui sera déclaré */
    public function demarrer()
    {
        echo "je démarre...";
    }

    /* les méthodes set... permettent de définir les valeurs des propriétés privées */
    // public function setAnnee($an){
    //     /* la variable $this fait référence à l'objet qui exécute la méthode setAnnee */
    //     if( is_int($an) ){
    //         $this->annee = $an;
    //     }
    // }

    /**
     * les méthodes get... permettent de récupérer la valeur d'une propriété privée de l'objet
     * qui exécute la méthode get...
     * On parle donc des GETTERS (accesseurs) et SETTERS (mutateurs)
     */
    // public function getAnnee() 
    // {
    //     return $this->annee;
    // }

    ###############
    public function deplacement(){
        return "je roule sur 4 roues...";
    }
}