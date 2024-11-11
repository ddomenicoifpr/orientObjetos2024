<?php

require_once("modelo/Poder.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Combatente.php");

//1- Criar os objetos Poder
$p1 = new Poder("Recupera energia", 0);
$p2 = new Poder("Recupera energia super", 20);
$p3 = new Poder("Golpe normal", 0);
$p4 = new Poder("Golpe especial", 15);

//2- Criar os objetos dos Magos
$curand = new Curandeiro();
$curand->setNome("Presto");
$curand->setPoder($p1);
$curand->setForcaDeCura(100);
$curand->lancarPoder();

//2- Criar os objetos dos Magos
$curand = new Combatente();
$curand->setNome("Cecil");
$curand->setPoder($p4);
$curand->setForcaDeAtaque(200);
$curand->lancarPoder();
