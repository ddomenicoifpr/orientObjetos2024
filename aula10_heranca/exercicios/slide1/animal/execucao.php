<?php

require_once("modelo/Gato.php");
require_once("modelo/Cachorro.php");

$gato1 = new Gato();
$gato1->setNome("Manda-chuva");
$gato1->setRaca("Vira lata");
echo $gato1;
$gato1->miar();

$gato2 = new Gato();
$gato2->setNome("Espeto");
$gato2->setRaca("Vira lata");
echo $gato2;
$gato2->miar();

$cao1 = new Cachorro("Bandit", "Bulldog");
echo $cao1;
$cao1->latir();

$cao2 = new Cachorro("K9", "Pastor Alemão");
echo $cao2;
$cao2->latir();