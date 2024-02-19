<?php
    $menor = 999999999999;
    for($i=0; $i<3; $i++) {
        $num = readline("Informe um número: ");
        if($num < $menor)
            $menor = $num;
    }

    echo $menor . "\n";