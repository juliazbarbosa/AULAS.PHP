<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $nome= ($_GET["nome"])? $_GET["nome"]: "[Nome não informado]";
        $ano= ($_GET["ano"])? $_GET["ano"]: "[0]";
        $sexo= ($_GET["sexo"])? $_GET["sexo"]:"[sem sexo informado]" ;
        $idade= date("Y") -$ano;
        echo "$nome é $sexo e tem $idade anos. ";

    ?>
    </br>
    <a href="idade.html">Voltar ao formulário</a>
</div>
</body>
</html>