<?php

require_once("Veiculo.php");

class Caminhao extends Veiculo {

    private int $qtdCarga;
    private int $altura;

    public function getDados() {
        $dados = sprintf("Modelo: %s | Velocidade máx: %dkm/h | Cor: %s | " .
                         "Quant. Carga : %dt | Altura: %dm\n", 
                        $this->modelo, $this->velocidadeMax, 
                        $this->cor, $this->qtdCarga, $this->altura);
        return $dados;
    }
    
    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga(): int
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga(int $qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura(): int
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}