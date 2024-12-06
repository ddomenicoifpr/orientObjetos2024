<?php

require_once("modelo/Balde.php");
require_once("modelo/Computador.php");
require_once("modelo/Livro.php");
require_once("modelo/Produto.php");

//Produto
$produto = new Produto();
$produto->setDescricao("Produto genérico");
$produto->setUnidadeMedida("UN");
echo $produto->getDados();

//Livro
$livro = new Livro();
$livro->setDescricao("Harry Potter e o Prisioneiro de Azkaban");
$livro->setUnidadeMedida("VL");
$livro->setAutor("J.K. Rowling");
echo $livro->getDados();

//Computador
$computador = new Computador();
$computador->setDescricao("Notebook Acer");
$computador->setUnidadeMedida("UN");
$computador->setProcessador("Intel");
$computador->setMemoria("DDR5");
echo $computador->getDados();

//Balde
$balde = new Balde();
$balde->setDescricao("Balde de plástico");
$balde->setUnidadeMedida("UN");
$balde->setCapacidade(10);
echo $balde->getDados();