<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Funções Aritméticas em PHP</title>
    <style>
        h2 {
            font: 14pt Arial;
        }
    </style>
</head>
<body>
<div>
    <?php

        $v1 = $_GET["x"]?? 3;
        $v2 = $_GET["y"]?? -5;
        echo "<h2> Valores recebidos: $v1 e $v2 </h>";
        echo"<br/>";
        echo "O valor absoluto de $v2 é: ". abs($v2); //valor absoluto é o numero sem sinais
        echo "<br/> O valor de $v1 <sup> $v2 </sup> e: ". pow($v1, $v2);//elevei v1 ao v2
        echo "<br/> A raiz de $v1 é". sqrt($v1);
        echo "<br/> O valor de $v2 arredondado e: ". round($v2);
        echo "<br/> A parte inteira de $v2 é: ". intval ($v2);
        echo "<br/> O de $v1 em moeda é R$ ". number_format($v1,2, ",");

    ?>
</div>
</body>
</html>