<?php 

require_once("modelo/Fabricante.php");
require_once("modelo/Carro.php");

//Função para listar os carros
function listarCarros($carros) {
    if(count($carros) > 0) {
        foreach($carros as $i => $carro)
            printf("%d- Modelo: %s | Fabricante: %s | Ano: %d\n", 
                $i+1, $carro->getModelo(), $carro->getFabricante(), 
                $carro->getAnoFabricacao());
    } else 
        echo "Nenhum carro cadastrado.\n";
}

//Função que busca o fabricante pela sigla no array, retornando-o
function retornaFabricante($fabricantes, $sigla) {
    //Encontra o fabricante no array
    foreach($fabricantes as $fab) {
        if($sigla == $fab->getSigla())
            return $fab;
    }

    return null;
}

//Programa inicia criando o array de fabricantes
$fabricantes = array(
    new Fabricante("Volkswagem", "VW"),
    new Fabricante("Chevrolet", "GM"),
    new Fabricante("Fiat", "F"),
    new Fabricante("Renault", "RN")
);
//print_r($fabricantes);

$carros = array();

//Iniciar a exibição do menu
do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar carro\n";
    echo "2- Excluir carro\n";
    echo "3- Listar carros\n";
    echo "0- Sair\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch($opcao) {
        case 1:
            $c = new Carro();
            $c->setModelo(readline("Informe o modelo: "));
            $c->setAnoFabricacao(readline("Informe o ano de fabricação: "));
            
            $fabricante = null;
            while($fabricante == null) {
                echo "\nFabricantes: \n";
                foreach($fabricantes as $fab)
                    echo $fab . "\n";
                
                $siglaFab = readline("Informe a sigla do fabricante: ");
                $fabricante = retornaFabricante($fabricantes, $siglaFab);
            }
            $c->setFabricante($fabricante);

            array_push($carros, $c);
            break;

        case 2:
            listarCarros($carros);
            if(count($carros) > 0) {
                $idx = readline("Informe o índice do carro para excluir: ");
                if($idx > 0 && $idx <= count($carros))
                    array_splice($carros, $idx-1, 1);
                else
                    echo "Índice inválido!\n";
            }
            break;

        case 3:
            listarCarros($carros);
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }

} while($opcao != 0);
