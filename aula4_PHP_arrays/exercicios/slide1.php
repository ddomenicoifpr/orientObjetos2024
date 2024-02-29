<?php

function imprimeVetor($vet) {
    foreach($vet as $v) 
        echo $v . "|";
    echo "\n";
}

//Programa principal
$f1 = array("Mclaren", "Willians", "RBR", "Ferrari", "Minardi");
$times = array("Grêmio", "Palmeiras", "Inter", "SP", "Bahia");
$frutas = array("Maça", "Uva", "Laranja", "Limão", "Abacate");
$alunos = array("Guilherme", "Petrus", "Rebecca", "Maria", "Felipe");

imprimeVetor($f1);
imprimeVetor($times);
imprimeVetor($frutas);
imprimeVetor($alunos);