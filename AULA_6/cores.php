<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <?php
        $txt= isset($_GET["t"])? $_GET["t"]: "Texto Generico";//retornará false ao verificar uma variável que foi atribuída com o valor null 
        $tam= isset($_GET["tam"])? $_GET["tam"]: "12pt";
        $cor= isset($_GET["cor"])? $_GET["cor"]: "#000000";
    ?>
    <link rel="stylesheet" href="estilo.css">
    <title>Texto, cor e fonte</title>
    <style> 
    span.texto{
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor;?>;
    } 
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'> $txt</span></br>";
    ?>
    <a href="cores.html">Voltar ao formulário</a>
</div>
</body>
</html>