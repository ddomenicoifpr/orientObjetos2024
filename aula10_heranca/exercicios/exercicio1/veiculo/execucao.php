<?php

require_once("modelo/CarroPasseio.php");
require_once("modelo/Caminhao.php");
require_once("modelo/Onibus.php");

//CarroPasseio
$carro = new CarroPasseio();
$carro->setModelo("Fusca");
$carro->setVelocidadeMax(95);
$carro->setCor("Preto");
$carro->setQtdPassageiros(5);
echo $carro->getDados();

//Caminhao
$onibus = new Caminhao();
$onibus->setModelo("Scania");
$onibus->setVelocidadeMax(160);
$onibus->setCor("Vermelho");
$onibus->setQtdCarga(42000);
$onibus->setAltura(4);
echo $onibus->getDados();

//Onibus
$onibus = new Onibus();
$onibus->setModelo("Mercedes");
$onibus->setVelocidadeMax(140);
$onibus->setCor("Branco");
$onibus->setQtdPassageiros(42);
$onibus->setPesoMax(5000);
echo $onibus->getDados();



