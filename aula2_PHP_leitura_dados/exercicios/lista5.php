<?php
    $num1 = readline("Informe o primeiro número: ");
    $num2 = readline("Informe o segundo número: ");
    
    for($i=$num1; $i<=$num2; $i++) {
        if($i % 5 == 0)
            echo $i . "\n";
    }