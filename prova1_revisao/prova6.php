<?php

$pc1 = array("processador" => "Core i7",
             "memoria" => "8 GB",
             "preco" => 2500.00);

$pc2 = array("processador" => "Core i5",
            "memoria" => "16 GB",
            "preco" => 3800.00);

$pcs = array($pc1, $pc2);

foreach($pcs as $pc) {
    /*
    echo "Processador: " . $pc["processador"] . "\n";
    echo "Memória: " . $pc["memoria"] . "\n";
    echo "Preço: " . $pc["preco"] . "\n\n";
    */
    foreach($pc as $dado)
        echo $dado . "\n";
    echo "\n";
}
