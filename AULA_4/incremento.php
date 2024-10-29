<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Operadores de Incremento</title>
</head>
<body>
<div>
    <?php
        $a=3;
        $b= &$a;//O & cria uma referecia de b na variável a
        $b += 5;
        echo "A variavel A vale $a ";
        echo "</br> A variavel B vale $b";
        echo "</br>";
        echo "</br> Variavel derivada de outra:";
        $x = "abc";
        $$x = "def";
        echo "</br> O conteúdo da variável x é $x";
        echo "</br> A variavel abc criada recebeu o valor $abc"

    ?>
</div>
</body>
</html>