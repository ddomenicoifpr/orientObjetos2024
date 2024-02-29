<?php

$pessoa1 = array("nome" => "Manuel de Medeiros",
                "cidade" => "Foz do Igaçu",
                "endereco" => "Rua das Acácias",
                "uf" => "PR");
$pessoa2 = array("nome" => "Juliana de Amaral",
                "cidade" => "Florianópolis",
                "endereco" => "Rua dos Pinheiros",
                "uf" => "SC");
$pessoa3 = array("nome" => "Rodrigo Baidek",
                "cidade" => "Petrópolis",
                "endereco" => "Rua Dom Pedro I",
                "uf" => "RJ");

$pessoas = array($pessoa1, $pessoa2, $pessoa3);

foreach($pessoas as $p) {
    
    /* //Opção 1
    echo $p["nome"] . "|" . $p["endereco"] . "|" . 
        $p["cidade"] . "|" . $p["uf"] . "\n";
    */

    //Opção 2
    foreach($p as $dado) {
        echo $dado . "|";
    }
    echo "\n";
}

