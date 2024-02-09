<?php
    echo "10 números, inciando em 1 e pulando de 2 em 2\n";
    
    $num = 1;
    $conta = 1;
    
    while($conta <= 10) {
        echo $num . "\n";
        $num = $num + 2;
        $conta++;
    }
