<?php

class Posto {
    private $litrosGasolina;
    private $abastecimentosGasolina;

    public function __construct() {
        $this->litrosGasolina = 0;
        $this->abastecimentosGasolina = array();
    }

    public function abastecer($litros) {
        
        if($this->litrosGasolina >= $litros) {
            $this->litrosGasolina -= $litros;
            array_push($this->abastecimentosGasolina, $litros);

            return true;
        }

        return false;
    }

    public function reporEstoque($litros) {
        $this->litrosGasolina += $litros;
    }

    /**
     * Get the value of abastecimentosGasolina
     */
    public function getAbastecimentosGasolina()
    {
        return $this->abastecimentosGasolina;
    }
}

$posto = new Posto();

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Abastecer\n";
    echo "2- Repor estoque\n";
    echo "3- Listar abastecimentos\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n"; //Apenas para executar uma quebra de linha

    switch($opcao) {
        case 1:
            $litros = readline("Informe a quantidade de litros: ");
            $deuCerto = $posto->abastecer($litros);
            if($deuCerto) {
                echo "Abastecimento realizado com sucesso!\n";
            } else
                echo "Não foi possível abastecer por falta de gasolina!\n";

            break;

        case 2: 
            //Repor estoque
            $litros = readline("Informe a quantidade de litros: ");
            $posto->reporEstoque($litros);

            break;

        case 3:
            $abastecimentos = $posto->getAbastecimentosGasolina();
            for($i=0; $i<count($abastecimentos); $i++)
                printf("- Abastecimento %d: %d litros\n", $i+1, $abastecimentos[$i]);

            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção Inválida!\n";
            break;
    }

} while($opcao != 0);