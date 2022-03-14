<?php

class Moto
{
    private $marque;
    private $modele;
    private $annee;
    private $cylindre;


    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

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

    /**
     * @return mixed
     */
    public function getCylindre()
    {
        return $this->cylindre;
    }

    /**
     * @param mixed $cylindre
     */
    public function setCylindre($cylindre)
    {
        $this->cylindre = $cylindre;
    }

}