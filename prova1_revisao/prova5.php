<?php

//Ler o primeiro carro
$carro1 = array();
$carro1["modelo"] = readline("Informe o modelo do carro 1: ");
$carro1["placa"] = readline("Informe o placa do carro 1: ");
$carro1["ano"] = readline("Informe o ano do carro 1: ");

//Ler o segundo carro
$carro2 = array();
$carro2["modelo"] = readline("Informe o modelo do carro 2: ");
$carro2["placa"] = readline("Informe o placa do carro 2: ");
$carro2["ano"] = readline("Informe o ano do carro 2: ");

if($carro1["ano"] > $carro2["ano"]) {
    printf("%s, %s, %d\n", 
        $carro1["modelo"], $carro1["placa"], $carro1["ano"]);
} else
    printf("%s, %s, %d\n", 
        $carro2["modelo"], $carro2["placa"], $carro2["ano"]);