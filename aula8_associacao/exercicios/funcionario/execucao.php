<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

//1- Ler dados dos 5 funcionários
$funcionarios = array();

for($i=1; $i<=5; $i++) {
    echo "\n-----FUNCIONÁRIO " . $i . "-----\n";
    $funcionario = new Funcionario();
    $funcionario->setNome(readline("Informe o nome: "));
    $funcionario->setCargo(readline("Informe o cargo: "));
    $funcionario->setSalario(readline("Informe o salário: "));
    
    $depto = new Departamento();
    $depto->setNome(readline("Informe o nome do departamento: "));
    $depto->setNumeroSala(readline("Informe o número da sala do departamento: "));
    $funcionario->setDepto($depto);

    array_push($funcionarios, $funcionario);
}

//2- Imprimir os dados dos funcionários
echo "\n\n";
foreach($funcionarios as $func)
    echo $func . "\n"; //Impressão utilizando o método toString