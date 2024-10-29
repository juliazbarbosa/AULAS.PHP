<?php
///conta quantas palavras tem na frase?
$frase = "Eu vou estudar PHP";
$count = str_word_count($frase, 0);//se eu utilizar 1 ao invés de 0 ele cria um array contandoas palavras
print_r($count);
?>