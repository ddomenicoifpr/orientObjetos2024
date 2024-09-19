<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");

//1- Criar objeto time
$time = new Time();
$time->setNome("Grêmio");
$time->setCidade("Porto Alegre");
//print_r($time);

//2- Criar o objeto jogador
$suarez = new Jogador();
$suarez->setNome("Luiz Suarez");
$suarez->setNumero(9);
$suarez->setTime($time);

$geromel = new Jogador();
$geromel->setNome("Pedro Geromel");
$geromel->setNumero(4);
$geromel->setTime($time);

//3- Imprimir o nome do time do jogador Suarez
echo $suarez->getTime()->getNome() . "\n";
$t = $suarez->getTime();
echo $t->getCidade() . "\n";

//4- Adicionar os jogadores no arry da classe Time
$jogadores = array();
array_push($jogadores, $suarez);
array_push($jogadores, $geromel);
$time->setJogadores($jogadores);
print_r($time->getJogadores());
