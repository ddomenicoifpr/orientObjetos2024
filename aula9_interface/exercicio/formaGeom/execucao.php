<?php

require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");
require_once("modelo/Circulo.php");

echo "1- Quadrado\n";
echo "2- Retângulo\n";
echo "3- Círculo\n";

$opcao = readline("Informe a forma desejada: ");

$forma = null;
if($opcao == 1) {
    $forma = new Quadrado();
    $forma->setLado(readline("Informe o lado: "));

} else if($opcao == 2) {
    $forma = new Retangulo();
    $forma->setBase(readline("Informe a base: "));
    $forma->setAltura(readline("Informe a altura: "));

} else if($opcao == 3) {
    $forma = new Circulo();
    $forma->setRaio(readline("Informe o raio: "));
} 

echo "Área: " . $forma->getArea() . "\n";
echo "Desenho: " . $forma->getDesenho() . "\n";