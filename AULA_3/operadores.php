<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"/>
    <title>Operações Aritméticas</title>
</head>
<body>
    <h2>Cálculos com divisão, multiplicação, soma e subtração </h2>
<div>
    <?php
        $n1 = $_GET["a"]; //coloca valor da "a" na url 
        $n2 = $_GET["b"];
        $m = ($n1+$n2)/2;
        echo "<h2> Valores Recebidos: $n1 e $n2 </h2>";
        //$soma = $n2 + $n1;
        //echo "A soma entre $n1 e $n2 é igual a $soma"
        echo " A soma vale: ". ($n1+$n2);
        echo "<br/> A subtração vale: ". ($n1-$n2);
        echo "<br/> A multiplicação vale: ". ($n1*$n2);
        echo "<br/> divisão vale: ". ($n1/$n2);
        echo "<br/> o modulo vale: ". ($n1%$n2);
        echo "<br/> A media é: ". ($m);
    ?>
 </div>   
</body>
</html>