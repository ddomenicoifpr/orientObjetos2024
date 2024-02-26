<?php 

function mediaPonderada($a, $b, $c) {
    $media = ( ($a * 3) + ($b * 5) + ($c * 2) ) / 10;
    return $media;
}

//Programa principal
$a = readline("Informe o valor para A: ");
$b = readline("Informe o valor para B: ");
$c = readline("Informe o valor para C: ");

$media = mediaPonderada($a, $b, $c);

echo "A média ponderada é: " . $media . "\n";