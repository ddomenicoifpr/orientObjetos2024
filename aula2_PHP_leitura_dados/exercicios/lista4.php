<?php
    $somaPares = 0;
    $somaImpares = 0;
    for($i=0; $i<10; $i++) {
        $num = readline("Informe um número: ");
        if($num % 2 == 0)
            $somaPares += $num;
        else
            $somaImpares += $num;    
    }

    echo "Soma dos pares: " . $somaPares . "\n";
    echo "Soma dos ímpares: " . $somaImpares . "\n";