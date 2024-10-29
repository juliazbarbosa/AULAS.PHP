<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>while</title>
</head>
<body>
<div>
    <form method="get" action="while.php">
        <?php
        $c=10;
        while ($c>=1)
        {
            echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
            $c++;
        }
        ?>
        <input type="submit" values="Enviar" class="botao"/>

    </form>
</div>
</body>
</html>