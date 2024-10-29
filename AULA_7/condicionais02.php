<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title> Condicional 02</title>
</head>
<body>
<div>
    <?php
       $a = isset($_GET["ano"])? $_GET["ano"]: 1900;
       $i = date("Y") - $a;
       echo " Você nasceu em $a e tem $i anos";
       if ($i<16){
        $tipodeVoto = "não obrigatório";      
       
       }
       elseif (($i>= 16 && $i < 18) || ($i>65)) {
            $tipodeVoto = "opcional";
        }
        else{
            $tipodeVoto = "obrigatório";
        }

       
       echo "</br> Para essa idade o o voto é $tipodeVoto";
    ?>
    

</div>
</body>
</html