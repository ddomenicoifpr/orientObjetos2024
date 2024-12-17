<?php

require_once("modelo/Divisao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Resto.php");
require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");

$numA = readline("Informe o numA: ");
$numB = readline("Informe o numB: ");

while ($numA != 0 && $numB != 0) {
    $op = readline("Informe a operação (+, -, *, /, %): ");

    $calculo = null;

    switch ($op) {
        case "+":
            $calculo = new Soma();
            break;

        case "-":
            $calculo = new Subtracao();
            break;

        case "/":
            $calculo = new Divisao();
            break;

        case "*":
            $calculo = new Multiplicacao();
            break;

        case "%":
            $calculo = new Resto();
            break;

        default:
            echo "Operação inválida!\n";
    }

    if($calculo) {
        $calculo->setNumA($numA);
        $calculo->setNumB($numB);
        echo "Resultado: " . $calculo->calcular() . "\n";
    }

    $numA = readline("Informe o numA: ");
    $numB = readline("Informe o numB: ");
}
