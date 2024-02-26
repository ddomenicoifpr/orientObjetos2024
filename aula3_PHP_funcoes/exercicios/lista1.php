<?php

function f($x) {
    return 5 * $x + 2 * $x + 3;
}

//Programa principal
for($i=0; $i<5; $i++) {
    $x = readline("Informe o valor de X: ");
    $resultado = f($x);

    echo "f(x) = 5x + 2x + 3 é " . $resultado . "\n\n";
}