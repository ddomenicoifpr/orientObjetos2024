<?php
    /*
    $n = 1;
    $soma = 0;
    while($n <= 100) {
        $soma = $soma + $n;
        $n++;
    }*/

    $soma = 0;
    for($n=1; $n<=100; $n++)
        $soma += $n;

    echo "Soma dos números de 1 a 100: " . $soma;
    echo "\n";