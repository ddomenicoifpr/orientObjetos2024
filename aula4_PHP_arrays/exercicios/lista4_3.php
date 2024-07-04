<?php

$turmas = array();

//Ler as turmas
for($i=1; $i<=4; $i++) {
    $turma = array();
    $turma["curso"] = readline("Informe o curso da turma " . $i . ": ");
    $turma["ano"] = readline("Informe o ano da turma " . $i . ": ");
    $turma["qtdAlunos"] = readline("Informe o qtd de alunos da turma " . $i . ": ");

    array_push($turmas, $turma);
}

//print_r($turmas);

$totalAlunos = 0;
foreach($turmas as $turma) {
    $totalAlunos = $totalAlunos + $turma["qtdAlunos"];
}

echo "Total de alunos: " . $totalAlunos . "\n";