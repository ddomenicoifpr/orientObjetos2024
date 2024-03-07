<?php

//Função para verificar se um número existe no array
function existe($vetor, $num)  {
    foreach($vetor as $v)
        if($v == $num)
            return true;

    return false;
}

//Função para imprimir o array recebido por parâmetro
function imprimeVetor($vetor) {
    foreach($vetor as $v) {
        echo $v . ", ";
    }
    echo "\n";
}

/*----------------PROGRAMA PRINCIPAL--------------*/ 

//Vetor A - Deve ser lido
$vetA = array();
echo "Informe os elementos de A: \n";
for($i=0; $i<5; $i++) {
    $num = readline("Informe um número: ");
    array_push($vetA, $num);
}

//Vetor B - Deve ser lido
$vetB = array();
echo "\nInforme os elementos de B: \n";
for($i=0; $i<5; $i++) {
    $num = readline("Informe um número: ");
    array_push($vetB, $num);
}

//Vetor D = União
$vetD = array();
foreach($vetA as $a) {
    if(! existe($vetD, $a))
        array_push($vetD, $a);
}
for($i=0; $i<count($vetB); $i++) {
    if(! existe($vetD, $vetB[$i]))
        array_push($vetD, $vetB[$i]);
}

echo "\nVetor D: ";
imprimeVetor($vetD);

//Vetor C = Intersecção
$vetC = array();
foreach($vetA as $a) {
    if(existe($vetB, $a))
        array_push($vetC, $a);
    /* //Implementação sem a função existe()
    foreach($vetB as $b) {
        if($a == $b) {
            array_push($vetC, $a);
            break;
        }
    }
    */
}
echo "\nVetor C: ";
imprimeVetor($vetC);