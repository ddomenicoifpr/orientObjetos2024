<?php

function area(float $raio) : float {
    return 3.14 * $raio * $raio;
}

function circunferencia(float $raio) : float {
    return 3.14 * 2 * $raio;
}

//Programa principal
for($i=0; $i<3; $i++) {
    $r = readline("Informe o raio (em centímetros): ");

    $area = area($r);
    $circunf = circunferencia($r);
    printf("O círculo de raio %.2fcm tem área de %.2fcm e circunferência de %.2fcm.\n\n", 
                $r, $area, $circunf);
}