<?php
use Controllers\PlayerController;
?>
<main class="container">
<h1>PLAYER</h1>

    <?php

    echo "<table class='table table-stripped'>";

    foreach($players as $key => $value){
        echo "<tr>";
            echo "<td>$value[nickname]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo"<hr><br>";
    ?>


    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="name">Nickname</label>
        <input type="text" name="name" id="name">
        <input type="submit">

    </form>
    <?php
//    $player = new \Controllers\PlayerController();
//    $player->addPlayer();
    ?>
</main>