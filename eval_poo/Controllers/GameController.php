<?php

namespace Controllers;

use Models\GameModel;

class GameController extends GameModel
{
    public function index(){
        $gameModel = new GameModel();
        $game = $gameModel->findAll();
        include "./Views/header.inc.php";
        include "./Views/game.php";
        include "./Views/footer.inc.php";

    }
}