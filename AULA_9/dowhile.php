<?php

echo '<h3> Repetição Do While </br></h3>';
$c = 1;
do {
    echo "$c,";
    $c+=2;// pulando de dois em dois

} 
while ($c <= 20);

echo '<h3> Exemplo 2:</h3>';
$c = 10;
do{
    echo "$c,";
    $c--;
} while ($c>= 1);


echo ' <h3> Exemplo 3: tabuada</h3>';
$n= 1;
$c = 5;
do {
    echo "$c";
    $n+1;
    $c*$n;
    

}while ($n<=10);
?>