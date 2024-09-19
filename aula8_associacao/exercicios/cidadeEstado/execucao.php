<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

//Objetos estado
$sc = new Estado("SC", "Santa Catarina");
$pr = new Estado("PR", "Paraná");

//Objetos cidade
$fpolis = new Cidade();
$fpolis->setNome("Florianópolis")
    ->setAltitude(0)
    ->setQtdHabitantes(500000)
    ->setEstado($sc);

$blu = new Cidade();
$blu->setNome("Blumenau")
    ->setAltitude(200)
    ->setQtdHabitantes(300000)
    ->setEstado($sc);

$foz = new Cidade();
$foz->setNome("Foz do Iguaçu")
    ->setAltitude(150)
    ->setQtdHabitantes(300000)
    ->setEstado($pr);

$casc = new Cidade();
$casc->setNome("Cascavel");
$casc->setAltitude(300);
$casc->setQtdHabitantes(400000);
$casc->setEstado($pr);

$cidades = array($fpolis, $blu, $foz, $casc);

//Testear se as cidades foram adicionadas ao array
//print_r($cidades);

//Imprimir a mensagem para cada cidade
foreach($cidades as $c) 
    /*printf("A cidade de %s, localizada no estado %s-%s, possui " .
           "%d habitantes e uma altitude de %d metros.\n", 
            $c->getNome(), $c->getEstado()->getNome(), $c->getEstado()->getSigla(), 
            $c->getQtdHabitantes(), $c->getAltitude());
    */
    echo $c;

