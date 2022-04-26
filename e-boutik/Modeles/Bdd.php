<?php
namespace Modeles; 

use PDO;

abstract class Bdd {
    /**
     * Une méthode statique (aussi appelée méthode de classe) peut être appelé à partir d'une classe 
     * et NE DOIT PAS être appelé à partir d'un objet de cette classe. 
     */
    static public function pdo()
    {
        /* 
            try... catch permet de capturer des exceptions. Si le code placé dans la partie try génère une exception,
                le code de la partie catch est exécuté.
        */
        try{
            return new PDO("mysql:host=localhost;dbname=boutique;charset=utf8", "root", "root");
        } catch(\Throwable $th){
            exit("Erreur de connexion<br>" . $th->getMessage());
        }
    }

    static public function selectAll(string $table): ?array
    {
        /* SELECT * FROM produit */
        $pdostatement = self::pdo()->query("SELECT * FROM $table");
        if( $pdostatement ){
            return $pdostatement->fetchAll(PDO::FETCH_ASSOC);
        }
        return null;
    }

    static public function insertProduit(array $donnees)
    {
        $pdo = self::pdo();
        extract($donnees);
        $pdostatement = $pdo->prepare("INSERT INTO produit (categorie, titre, description, sexe, prix, stock, photo)
                                        VALUES (:categorie, :titre, :description, :sexe, :prix, :stock, :photo)");
        $pdostatement->bindValue(":categorie", $categorie);
        $pdostatement->bindValue(":titre", $titre);
        $pdostatement->bindValue(":description", $description);
        $pdostatement->bindValue(":sexe", $sexe);
        $pdostatement->bindValue(":prix", $prix);
        $pdostatement->bindValue(":stock", $stock);
        /* opérateur NULL COALESCENT ?? 
            $nb = $var1 ?? valeur
                => si var1 existe et n'est pas nulle alors $nb vaut $var1
                   sinon $nb vaut valeur
        */
        $pdostatement->bindValue(":photo", $photo ?? null);
        return $pdostatement->execute();

    }
}