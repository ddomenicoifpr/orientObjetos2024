<?php

$pessoas = array(); //Matriz

for($i=1; $i<=4; $i++) {
    echo "\n----Pessoa " . $i . "----\n";

    $pessoa["nome"] = readline("Informe o nome: ");
    $pessoa["idade"] = readline("Informe a idade: ");
    $pessoa["cidadeNatal"] = readline("Informe a cidade natal: ");
    $pessoa["profissao"] = readline("Informe a profissão: ");

    array_push($pessoas, $pessoa); //Adiciona o array $pessoa na matriz $pessoas
}

//Encontra a pessoa mais velha
$pessoaVelha = $pessoas[0];
foreach($pessoas as $p) {
    if($p["idade"] > $pessoaVelha["idade"])
        $pessoaVelha = $p;
}

//Imprime os dados da pessoa mais velha
echo "\nDados da pessoa mais velha: \n";
echo "Nome: " . $pessoaVelha["nome"] . "\n";
echo "Idade: " . $pessoaVelha["idade"] . "\n";
echo "Cidade natal: " . $pessoaVelha["cidadeNatal"] . "\n";
echo "Profissão: " . $pessoaVelha["profissao"] . "\n";