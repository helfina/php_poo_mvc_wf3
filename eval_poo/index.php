<?php

/*J'AI BLOQUER, ET JE ME SUIS PERDUE DANS MON CODE */

require "autoload.php";
Autoloader::register();

$controller = $_GET["c"] ?? "player";
$methode    = $_GET["m"] ?? "index";
$nomClasse = "Controllers\\" . ucfirst($controller) . "Controller";
$controller = new $nomClasse;
$controller->$methode();

//try {
//
//    if (isset($_GET['page'])){
//
//        if ($_GET['page']== 'home') {
//            $home = new \Controllers\HomeController();
//            $home->index();
//        } else if($_GET['page'] == 'player'){
//            $player = new \Controllers\PlayerController();
//            $player->index();
//        }else{
//            throw new Exception('Cette page n\'existe pas ou a été supprimer');
//        }
//    } else {
//        $home = new \Controllers\HomeController();
//        $home->index();
//    }
//
//} catch (Exception $e) {
//    //die('Erreur : '. $e->getMessage());
//    $error = $e->getMessage();
//    echo $error;
//
//    //require('Views/error_view.php');
//}

//debug($methode);