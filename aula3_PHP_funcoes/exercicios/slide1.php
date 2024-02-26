<?php

function fatorial($num) {
    $fatorial = 1;
    
    for($i=$num; $i>=2; $i--) 
        $fatorial *= $i;
    
    return $fatorial;
}

//Programa principal
do {
    $n = readline("Informe um número: ");
  
    if($n != 0) {
        $fat = fatorial($n);
        echo "O fatorial do número é: " . $fat . "\n";
    }

} while($n != 0);