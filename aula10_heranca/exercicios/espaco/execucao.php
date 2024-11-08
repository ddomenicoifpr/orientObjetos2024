<?php

require_once("modelo/Hotel.php");
require_once("modelo/PontoTuristico.php");
require_once("modelo/Restaurante.php");

function listarEspacos(array $espacos) {
    echo "ESPAÇOS CADASTRADOS\n";

    $i = 1;
    foreach($espacos as $e) {
        if($e instanceof Hotel)
            echo $i . "- " . $e->getDadosHotel();

        else if($e instanceof Restaurante)
            echo $i . "- " . $e->getDadosRestaurante();

        else if($e instanceof PontoTuristico)
            echo $i . "- " . $e->getDadosPontoTuristico();
        $i++;
    }
}

function novoHotel() {
    $hotel = new Hotel();
    $hotel->setNome(readline("Informe o nome: "));
    $hotel->setEndereco(readline("Informe o endereço: "));
    $hotel->setNumeroEstrelas(readline("Informe o número de estrelas: "));
    $cafeIncluso = readline("Possui café incluso? (1-Sim | 2-Não): ");
    $hotel->setCafeIncluso($cafeIncluso == 1 ? true : false);

    return $hotel;
}

function novoRestaurante() {
    $rest = new Restaurante();
    $rest->setNome(readline("Informe o nome: "));
    $rest->setEndereco(readline("Informe o endereço: "));
    $rest->setTipoComida(readline("Informe o tipo de comida: "));
    return $rest;
}

function novoPontoTurist() {
    $pontTur = new PontoTuristico();
    $pontTur->setNome(readline("Informe o nome: "));
    $pontTur->setEndereco(readline("Informe o endereço: "));
    $pontTur->setDuracaoDaVisita(readline("Informe o tempo de visitação (em minutos): "));
    return $pontTur;
}

$opcao = 0;
$espacos = array();

do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar Espaço\n";
    echo "2- Excluir Espaço\n";
    echo "3- Listar Espaços\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";
    switch ($opcao) {
        case 1:
            $tipo = 0;
            do {
                $tipo = readline("Informe o tipo do espaço (1-Hotel | 2-Ponto Turístico | 3-Restaurante): ");

                switch($tipo) {
                    case 1:
                        array_push($espacos, novoHotel());
                        break;

                    case 2:
                        array_push($espacos, novoPontoTurist());
                        break;

                    case 3:
                        array_push($espacos, novoRestaurante());
                        break;

                    default:
                        echo "Tipo do espaço inválido!\n";
                }

            } while($tipo < 1 || $tipo > 3);

            break;

        case 2:
            listarEspacos($espacos);

            $idx = readline("Informe o índice do espaço a ser excluído: ");

            if($idx > 0 && $idx <= count($espacos))
                array_splice($espacos, $idx-1, 1);
            else
                echo "Índice informado é inválido.\n";
            break;

        case 3:
            listarEspacos($espacos);
            break;

        case 0:
            echo "Programa encerrado!!\n";
            break;

        default:
            echo "Opção inválida\n";            
    }
} while ($opcao != 0);