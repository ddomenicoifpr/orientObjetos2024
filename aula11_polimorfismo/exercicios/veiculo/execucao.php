<?php

require_once("modelo/Carro.php");
require_once("modelo/Van.php");
require_once("modelo/MicroOnibus.php");
require_once("modelo/Onibus.php");

echo "CALCULADORA DO CUSTO DE VIAGEM\n\n";

echo "Veículos:\n";
echo "1- Carro\n";
echo "2- Van\n";
echo "3- Micro-Ônibus\n";
echo "4- Ônibus\n";

$tipo = readline("Informe o tipo do veículo: ");

$veiculo = null;

switch ($tipo) {
    case 1:
        $veiculo = new Carro();
        break;

    case 2:
        $veiculo = new Van();
        break;

    case 3:
        $veiculo = new MicroOnibus();
        break;

    case 4:
        $veiculo = new Onibus();
        break;

    default:
        echo "Tipo de veículo inválido!\n";
        exit;
}

$veiculo->setValorAluguel(readLine("Informe o valor do aluguel: "));
$veiculo->setKmRodados(readLine("Informe a quantidade de quilometros rodados: "));

printf("\nO valor total da viagem é: R$ %.2f\n", $veiculo->getCustoViagem());