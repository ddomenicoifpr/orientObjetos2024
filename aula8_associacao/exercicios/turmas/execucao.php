<?php 

require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");

//1- Criar o objeto turma
$turma = new Turma();
$turma->setNome("Turma 2023");
$turma->setCurso("Técnico em Desenvolvimento de Sistemas");

//2- Ler os dados dos alunos
for($i=1; $i<=5; $i++) {
    echo "\n-----ALUNO " . $i . "-----\n";
    $aluno = new Aluno();
    $aluno->setNome(readline("Informe o nome: "));
    $aluno->setIdade(readline("Informe a idade: "));
    $aluno->setTurma($turma);

    //Método da classe Turma que adicona o aluno nela
    $turma->addAluno($aluno);
}

//3- Listagem dos dados da turma e dos alunos
echo "\n\nDados da turma:\n";
echo "Nome: " . $turma->getNome() . " | Curso: " . $turma->getCurso() . "\n";

echo "Alunos:\n";
foreach($turma->getAlunos() as $a)
    echo " - " . $a->getNome() . ", " . $a->getIdade() . " anos\n";