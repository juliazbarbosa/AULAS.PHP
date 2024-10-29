<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Estrutura Condicional</title>
</head>
<body>
<div>
    <?php
        $n= $_GET['num'] ? $_GET['num']:  "0";//pega valor de num, verifica se o valor foi inserido, se nao, retorna 0
        $o=  $_GET['oper'] ?? 1;
        switch ($o) {
            case 1: 
                $r=$n*2;
                break;
            case 2:
                $r = $n**3;
                break;
            case 3:
                $r = sqrt($n);
        }
        echo "O resultado da operação foi <span class= 'foco'> $r</span>"
    ?>
    <br>
    <a href="condicionais03.html" >Voltar</a>
</div>
</body>
</html