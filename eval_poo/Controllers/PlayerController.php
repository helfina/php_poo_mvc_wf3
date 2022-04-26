<?php

namespace Controllers;

use Models\PlayerModel;

class PlayerController extends PlayerModel
{
    public function index(){
        $playerModel = new PlayerModel();
        $players = $playerModel->findAll();
        include "./Views/header.inc.php";
        include "./Views/addPlayer.php";
        include "./Views/footer.inc.php";

    }

    public function addPlayer(){
        if(isset($_POST)){
            $email = $_POST['email'];
            $nickname = $_POST['name'];

            $playerModel = new PlayerModel();
            // On hydrate
            $playerModel->setEmail($email)
                ->setNickname($nickname);

            echo "<pre>";
            print_r($_POST);
            echo "</pre>";


            // On enregistre
            $playerModel->create($playerModel);
        }

    }
}

