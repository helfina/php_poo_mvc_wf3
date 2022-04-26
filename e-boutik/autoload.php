<?php

function chargementClasse($classe) {
    // Controleurs\ProduitControleur
    $classe = str_replace("\\", "/", $classe);// $classe = str_replace("\\", DIRECTORY_SEPARATOR, $classe);
    // Controleurs/ProduitControleur
    require "$classe.php";
    // Controleurs/ProduitControleur.php
}

spl_autoload_register("chargementClasse");