<?php

function calculaArea(array $vetor) {
    $area = $vetor["base"] * $vetor["altura"];
    return $area;
}

$retangulos = array();

for($i=0; $i<5; $i++) {
    $base = readline("Informe a base: ");
    $altura = readline("Informe a altura: ");
    //$ret = array("base" => $base, "altura" => $altura);
    $ret = array();
    $ret["base"] = $base;
    $ret["altura"] = $altura;
    array_push($retangulos, $ret);
}

//print_r($retangulos);

foreach($retangulos as $r) 
{
    //$area = $r["base"] * $r["altura"];
    $area = calculaArea($r);
    //echo $area . "\n";
    printf("O retângulo %dcmX%dcm tem área de %dcm²!\n",
        $r["base"], $r["altura"], $area);
}





