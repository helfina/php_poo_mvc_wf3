<?php

function chargementClasse($classe)
{
    require "Classes/$classe.php"; 
}

/*
    On définit la fonction qui va être exécutée quand une classe devra être chargée en mémoire.
    Si la définition de MaClasse n'est pas encore chargée en mémoire, PHP va exécuter 
    la fonction 'chargementClasse' avec le nom complet de la classe en argument
*/
spl_autoload_register("chargementClasse");