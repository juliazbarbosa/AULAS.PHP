<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Operadores de Atribuição</title>
    <style> 
        h2 {
            font: 12pt Arial;
        }
    </style>
</head>
<body>
<div>
    <?php
        $atual= $_GET["aa"]??2024;
        $preco=$_GET["p"];
        echo"O preço desse produto é: R$ ". number_format($preco,2);
        $preco +=  ($preco*10/100);
        echo " </br> O preço desse produto com os 10% de aumento será: R$ ". number_format($preco,2);//formatando valor com duas casas decimais
        echo "</br> O ano atual é $atual e o ano passado foi ". --$atual;
    ?>

</div>
</body>
</html