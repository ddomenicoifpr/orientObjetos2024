<?php
    $num1 = readline("Informe o primeiro número: ");
    $num2 = readline("Informe o segundo número: ");
    
    $mult = 0;
    for($i=0; $i<$num2; $i++) 
        $mult += $num1;

    echo $mult . "\n";
