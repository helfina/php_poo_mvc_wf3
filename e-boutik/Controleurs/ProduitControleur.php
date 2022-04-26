<?php
/* Le namespace permet de préciser le nom de la classe en ajoutant un "chemin".
    La classe ProduitControleur s'appelle Controleurs\ProduitControleur.
    Le séparateur de namespace est toujours le \
*/
namespace Controleurs;

/* Le mot-clé use permet de définir un raccourci ou un alias à une classe dans un fichier.
    Par exemple, dans ce fichier quand j'utilise Bdd cela fait référence à la classe Modeles\Bdd.
    Donc je ne suis pas obligé de mettre le nom complet de la classe à chaque fois que j'en ai besoin

*/
use Modeles\Bdd;

class ProduitControleur {
    public function index()
    {
        $produits = \Modeles\Bdd::selectAll("produit");
        include "vues/header.html.php";
        include "vues/produit/liste.html.php";
        include "vues/footer.html.php";    
    }

    public function ajouter()
    {
        if( $_POST ){
            if ( Bdd::insertProduit($_POST) ){
                $msgSuccess = "Le nouveau produit a bien été inséré";
            } else {
                $msgErreur = "Erreur lors de l'insertion en bdd";
            }
        }
        include "vues/header.html.php";
        include "vues/produit/form.html.php";
        include "vues/footer.html.php";
    }

    public function test()
    {
        include "vues/header.html.php";
        echo "<h1>le test a reussi</h1>";
        include "vues/footer.html.php";
    }
}