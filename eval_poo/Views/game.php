<?php
use Controllers\GameController;

?>

<h1>Game</h1>

<?php
echo "<table class='table table-stripped'>";

foreach($game as $key => $value){
    echo "<tr>";
    echo "<td>$value[nickname]</td>";
    echo "</tr>";
}
echo "</table>";
echo"<hr><br>";