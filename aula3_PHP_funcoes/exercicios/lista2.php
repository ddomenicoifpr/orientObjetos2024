<?php

function area(float $base, float $altura) : float {
    return $base * $altura;
}

function perimetro(float $base, float $altura) : float {
    return $base + $base + $altura + $altura;
}

//Programa principal
for($i=0; $i<3; $i++) {
    $b = readline("Informe a base do retângulo (cm): ");
    $a = readline("Informe a altura do retângulo (cm): ");

    $area = area($b, $a);
    $per = perimetro($b, $a);
    printf("Área: %.2fcm | Perímetro: %.2fcm \n\n", 
                $area, $per);
}