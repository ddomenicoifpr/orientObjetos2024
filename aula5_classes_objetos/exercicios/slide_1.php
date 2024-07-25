<?php

//1-Criar a classe Pessoa, com seus atributos e métodos
class Pessoa {
    //Atributos
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    //Métodos
    function falarOla() {
        echo "Olá mundo, sou " . $this->nome . "!\n";
    }

    function falarEndereco() {
        printf("Moro em %s, %s/%s!\n", $this->endereco, 
            $this->cidade, $this->uf);
    }

    function falarAltura() {
        echo "Tenho " . $this->altura . " metros.\n";

    }

} //Fim da classe Pessoa


//2- Criar o objeto a classe Pessoa
$pessoa = new Pessoa();

//3- Ler os dados para setar no objeto
$pessoa->nome = readline("Informe o nome da pessoa: ");
$pessoa->endereco = readline("Informe o endereço da pessoa: ");
$pessoa->cidade = readline("Informe a cidade da pessoa: ");
$pessoa->uf = readline("Informe o uf da pessoa: ");
$pessoa->altura = readline("Informe a altura da pessoa: ");


//4- Chamar os métodos a partir do objeto
$pessoa->falarOla();
$pessoa->falarEndereco();
$pessoa->falarAltura();