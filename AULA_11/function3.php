<?php 

function teste ($x){  ///se botar &$x o A se torna 5
    $x+= 2;
    echo "<p> O valor de x é $x</p>";
}

$a = 3;
teste ($a);
echo "<p> O valor de A é $a</p>";

?>