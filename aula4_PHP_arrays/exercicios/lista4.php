<?php

//Leitura dos 10 números
$numeros = array();
for($i=0; $i<10; $i++) {
    $num = readline("Informe um número: ");
    array_push($numeros, $num);
}

//Encontra o maior e o menor
$maior = $numeros[0];
$menor = $numeros[0];
foreach($numeros as $num) {
    if($num > $maior)
        $maior = $num;

    if($num < $menor)
        $menor = $num;
}

echo "Maior: " . $maior . "\n";
echo "Menor: " . $menor . "\n";

