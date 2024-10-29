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
        $valor= $_GET["v"];
        $rq = sqrt($valor);
        echo " </br> O valor enviado foi $valor e sua raiz quadrada é ".number_format($rq,2);
    ?>
    <a href="valor.html">Voltar ao formulário</a>
</div>
</body>
</html>