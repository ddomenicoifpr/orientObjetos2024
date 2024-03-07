<?php

$numeros = array();

for($i=1; $i<=10; $i++) {
    $num = readline("Informe um número [" . $i ."]: ");
    array_push($numeros, $num);
}

$soma = 0;
foreach($numeros as $num)
    //$soma = $soma + $num;
    $soma += $num;

$media = $soma / count($numeros);
echo "A média dos elementos do vetor é: " . $media . "\n";



