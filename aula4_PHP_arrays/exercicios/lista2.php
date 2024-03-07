<?php

//Leitura das palavras para o 1º array
$palavras1 = array();
for($i=0; $i<5; $i++) {
    $palavra = readline("Informe uma palavra: ");
    array_push($palavras1, $palavra);
}

//Adiciona as palavras no 2º array
$palavras2 = array();
foreach($palavras1 as $p)
    array_push($palavras2, $p);

//Imprime o array $palavras2
for($i=0; $i<count($palavras2); $i++) {
    if($i < count($palavras2)-1)
        echo $palavras2[$i] . ", ";
    else
        echo $palavras2[$i]; 
}
echo "\n";