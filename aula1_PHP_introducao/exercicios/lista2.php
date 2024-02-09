<?php
    echo "PA de 10 valores, iniciando em 5 com razão 3\n";

    $n = 5;
    $r = 3;
    $conta = 1;
    
    while($conta <= 10) {
        echo $n . "\n";
        $n = $n + $r;
        $conta++;
    }