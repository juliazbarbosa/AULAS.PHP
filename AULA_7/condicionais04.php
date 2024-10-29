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
        $d = $_GET["ds"]?? 0;

        switch($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Hora de estudar";
                break;
            case 7:
            case 8:
                echo "Dia do descanso merecido";
                break;
            default:
                echo "Dia da semana invalido";
        }

    ?>
    <br>
    <a href="condicionais04.html" >Voltar</a>
</div>
</body>
</html