<?php

require_once("modelo/Atleta.php");
require_once("modelo/Pais.php");

//2 países
$p1 = new Pais();
$p1->setNome("Brasil")->setContinente("América do Sul");

$p2 = new Pais();
$p2->setNome("Austrália")->setContinente("Oceânia");

//Atletas
$a1 = new Atleta();
$a1->setNome("Rayssa Leal")->setIdade(17)->setEsporte("Skate")->setPais($p1);

$a2 = new Atleta();
$a2->setNome("Isaquias Queiroz")->setIdade(30)->setEsporte("Canoagem")->setPais($p1);

$a3 = new Atleta();
$a3->setNome("Jessica Fox")->setIdade(30)->setEsporte("Natação")->setPais($p2);

$a4 = new Atleta();
$a4->setNome("Oscar Piatris")->setIdade(23)->setEsporte("Fórmula 1")->setPais($p2);

//Saída do programa
$atletas = array($a1, $a2, $a3, $a4);
foreach($atletas as $a) 
    printf("%s é atleta do %s, continente %s, possui %d anos e atua no esporte %s.\n",
            $a->getNome(), $a->getPais()->getNome(), $a->getPais()->getContinente(),
            $a->getIdade(), $a->getEsporte());