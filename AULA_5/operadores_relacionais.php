<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Operadores relacionais</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo= $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 </br>";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
        echo "O resultado é: $r";

        echo "</br>";

        echo "</br> Exemplo de numeros iguais:";
        $a = 3;
        $b = "3";
        $r = ($a === $b)? "SIM":"NAO";
        echo "</br> As variaveis A e B são identicas? $r";

        echo "</br>";

        echo "</br> Exemplo de média:";
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1+$nota2)/2;
        echo "</br> A media das notas $nota1 e $nota2 é: $media ";
       // $sit = ($media<6) ? "REPROVADO":"APROVADO";
       //echo "</br> a situação do aluno é: $sit";
       //simplificando o código acima:
        echo "</br> A situação do aluno é: ".(($media<7)?"REPROVADO":"APROVADO");
        
        echo "</br>";

        $ano = $_GET["an"]??2005;
        $idade = 2024 - $ano;
        echo "</br> Quem nasce em $ano tem $idade anos";
        $tipo = ($idade>=18 && $idade<=65 )? "OBRIGATORIO":"NAO OBRIGATORIO";
        echo "</br> Dessa forma seu voto é $tipo";
        



    ?>
</div>
</body>
</html>