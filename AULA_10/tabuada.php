<?php
    $n = isset($_GET["num"])? $_GET["num"]: 1;
    for ($C=1; $C<=10; $C++){
        $r = $n*$c;
        echo "$n x $c = $r </br>";
    }

?>