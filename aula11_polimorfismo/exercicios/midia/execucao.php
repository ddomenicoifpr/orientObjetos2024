<?php

require_once("modelo/CD.php");
require_once("modelo/DVD.php");

echo "--------COLEÇÃO DE MÍDIAS--------\n";

$midias = array();

//Ler as cinco mídias (CD ou DVD)
for($i=1; $i<=5; $i++) {
    echo "\nMÍDIA " . $i . "\n";

    $tipo = "";
    do {
        $tipo = readline("Informe o tipo da mídia (CD ou DVD): ");
    } while($tipo != "CD" && $tipo != "DVD");

    $midia = null;
    if($tipo == "CD")
        $midia = new CD();
    else
        $midia = new DVD();

    $midia->setDescricao(readline("Informe a descricão: "));
    $midia->setPrecoPago(readline("Informe o preço pago: "));

    array_push($midias, $midia);
}

//Listagem das mídias
echo "\nMídias do colecionador: \n";
foreach($midias as $midia)
    echo $midia->getTipo() . " | " . $midia->getDados();
