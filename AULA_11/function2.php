<?php
/// function soma(){
///     $p = func_get_args(); pega argumentos e coloca no vetor p. p()0 é o primeiro numero da sequencia e assim por diante
///     $total= func_num_args(); retorna o numero de argumentos passados}


function soma(){
    $p = func_get_args();
    $t = func_num_args ();
    $s = 0;
    for ($i = 0; $i<$t; $i++){
        $s +=$p [$i];
    }
    return $s;
}
$r = soma (2, 5, 8, 4);
echo "A soma dos valores é $r";

?>