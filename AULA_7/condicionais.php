<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Condicional</title>
</head>
<body>
<div>
    <?php
       $a = isset($_GET["ano"])? $_GET["ano"]: 1900;
       $i = date("Y") - $a;
       echo " Você nasceu em $a e tem $i anos";
       if ($i>18){

        $v = "pode votar";
        $d = "pode dirigir";
       }
       else {
        $v = "não pode votar";
        $d = "não pode dirigir";

       }
       echo "</br> Com essa idade você $v e também $d";
    ?>
    

</div>
</body>
</html