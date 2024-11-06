<?php

require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

function listarPessoas(array $pessoas) {
    echo "PESSOAS CADASTRADAS\n";

    $i = 1;
    foreach($pessoas as $p) {
        echo $i . "- " . $p; //Funciona pois foi implementado o toString() nas classes
        $i++;
    }

}

$opcao = 0;
$pessoas = array();

do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar pessoa física\n";
    echo "2- Cadastrar pessoa jurídica\n";
    echo "3- Listar\n";
    echo "4- Excluir\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";
    switch ($opcao) {
        case 1:
            $p = new PessoaFisica();
            $p->setNome(readline("Informe o nome: "));
            $p->setIdade(readline("Informe a idade: "));
            $p->setCpf(readline("Informe o CPF: "));

            array_push($pessoas, $p);
            break;

        case 2:
            $p = new PessoaJuridica();
            $p->setNome(readline("Informe o nome: "));
            $p->setNomeFantasia(readline("Informe o nome fantasia: "));
            $p->setCnpj(readline("Informe o CNPJ: "));

            array_push($pessoas, $p);
            break;

        case 3:
            listarPessoas($pessoas);
            break;

        case 4:
            listarPessoas($pessoas);

            $idx = readline("Informe o índice da pessoa a ser excluída: ");

            if($idx > 0 && $idx <= count($pessoas))
                array_splice($pessoas, $idx-1, 1);
            else
                echo "Índice informado é inválido.\n";
            break;

        case 0:
            echo "Programa encerrado!!\n";
            break;

        default:
            echo "Opção inválida\n";            
    }
} while ($opcao != 0);
