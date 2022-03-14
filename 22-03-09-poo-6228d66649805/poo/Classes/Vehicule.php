<?php
/**
 * Le mot-clé abstract permet de définir une classe abstraite. On NE PEUT PAS INSTANCIER d'objet
 * d'une classe abstraite
 */
abstract class Vehicule {
    private $marque;
    protected $modele;
    private $annee;
    
    /**
     * Méthodes abstraites : 
     * - elles ne peuvent exister que dans une classe abstraite.
     * - il n'y a que la définition de la classe, pas de corps (pas {})
     * - toutes les classes qui héritent de la classe abstraite doivent implémenter (= rédéfinir)  
     *      les méthodes abstraites déclarées dans cette classe.
     */
    abstract public function deplacement();

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        if( is_int($annee) ){
            $this->annee = $annee;
        }

        return $this;
    }

    public function carteGrise()
    {
        $html = "<ul>";
        $html .= "<li>Marque : " . $this->getMarque() . "</li>";
        $html .= "<li>Modèle : " . $this->getModele() . "</li>";
        $html .= "<li>Année : " . $this->getAnnee() . "</li>";
        $html .= "</ul>";
        return $html;
        // ⚠ Tout ce qui se trouve après le return n'est pas exécuté
    }

}