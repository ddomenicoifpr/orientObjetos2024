<?php

//------Funçoes------
function imprimeVetor($vetor) {
    for($i=0; $i<count($vetor); $i++) {
        if($i < count($vetor)-1)
            echo $vetor[$i] . ", ";
        else
             echo $vetor[$i] . "\n";
    }
}

function celsiusParaFahrenheit($grausCelsius) {
    $fahr = $grausCelsius * 1.8 + 32;
    return $fahr; 
}

function fatorial($n) {
    //Tratamento para retornar 0 caso $n for menor que 1
    if($n < 1)
        return 0;

    $fat = $n;
    for($i=$n-1; $i>1; $i--)
        $fat *= $n;
    
    return $fat;
}

function f($x) {
    //Tratamento para evitar divisão por 0
    if($x == 0)
        return 0;

    $res = ( ($x*$x) + (2*$x) + 4 ) / (2*$x);
    return $res;
}


//------Programa principal------
$vetorLido = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

//Leitura dos 5 números
for($i=0; $i<5; $i++) { 
    $num = readline("Informe um número: ");
    array_push($vetorLido, $num);
}

//Adicição dos números nos vetores 1, 2, 3 com seus respectivos cálculos
foreach($vetorLido as $num) {
    array_push($vetor1, celsiusParaFahrenheit($num));
    array_push($vetor2, fatorial($num));
    array_push($vetor3, f($num));
}

//Imprime os vetores 1, 2, 3
imprimeVetor($vetor1);
imprimeVetor($vetor2);
imprimeVetor($vetor3);




