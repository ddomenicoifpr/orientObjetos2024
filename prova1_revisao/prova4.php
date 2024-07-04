<?php

$nums = array();

//Lendo os números
for($i=0; $i<10; $i++) {
    $num = readline("Informe um número: ");
    array_push($nums, $num);
}

//Veriricar se os números são pares ou ímpares
$somaPar = 0;
$somaImpar = 0;

foreach($nums as $n) {
    if($n % 2 == 0) 
        //Somar como par
        $somaPar = $somaPar + $n;
    else
        //Somar como ímpar
        $somaImpar += $n;
}

echo "Soma dos números pares: " . $somaPar . "\n";
echo "Soma dos números ímpares: " . $somaImpar . "\n";
