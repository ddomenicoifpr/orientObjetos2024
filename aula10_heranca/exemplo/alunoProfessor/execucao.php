<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");

//Aluno
$aluno = new Aluno();
$aluno->setMatricula(2343455433);
$aluno->setNome("Walmonn");
$aluno->setIdade(17);
$aluno->setRg(43243242);
echo $aluno;
//echo $aluno->getNomeIdade() . "\n";

//Professor
$professor = new Professor();
$professor->setNome("Daniel");
$professor->setIdade(26);
$professor->setRg(43545434);
$professor->setSalario(2000);
echo $professor;
