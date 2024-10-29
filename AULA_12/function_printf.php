<?php
///função para manipulação de string
/// string = tudo que esta entre ""


///função printf

$p="leite";
$pr= 4.5;
printf ("O produto %s custa R$ %.2f", $p, $pr);///%s = string %f = float
///ou
echo "O $p custa R$" .number_format($pr,2);
?>