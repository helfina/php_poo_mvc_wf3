<?php

class Vehicule
{
    private $marque;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    private $modele;

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    private $annee;


    /* les méthodes set... permettent de définir les valeurs des propriétés privées */
    public function setAnnee($an){
        /* la variable $this fait référence à l'objet qui exécute la méthode setAnnee */
        if( is_int($an) ){
            $this->annee = $an;
        }
    }

    /**
     * les méthodes get... permettent de récupérer la valeur d'une propriété privée de l'objet
     * qui exécute la méthode get...
     * On parle donc des GETTERS (accesseurs) et SETTERS (mutateurs)
     */
    public function getAnnee()
    {
        return $this->annee;
    }

}