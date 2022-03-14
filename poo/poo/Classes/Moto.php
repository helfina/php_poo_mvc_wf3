<?php

class Moto extends Vehicule {
    private $cylindre;
 
    /**
     * Get the value of cylindre
     */ 
    public function getCylindre()
    {
        return $this->cylindre;
    }

    /**
     * Set the value of cylindre
     *
     * @return  self
     */ 
    public function setCylindre($cylindre)
    {
        $this->cylindre = $cylindre;

        return $this;
    }

    /**
     * Redéclarer une méthode qui existe dans la classe mère s'appelle SURCHARGER (overload)
     * La méthode de la classe mère est "cachée" aux objets de la classe Moto
     * Le mot-clé parent représente la classe dont hérite la classe actuelle (ici, Vehicule)
     * L'opérateur :: est l'équivalent de -> mais pour les classes
     * 
     */
    public function carteGrise(){
        $html = parent::carteGrise();
        $html = str_replace("</ul>", "", $html);
        $html .= "<li>Cylindre : " . $this->cylindre . " cm3</li>";
        $html .= "</ul>";
        return $html;
    }

    public function deplacement()
    {
        return "je roule sur 2 roues";
    }
}
