<?php

require_once("Veiculo.php");

class Onibus extends Veiculo {

    private int $qtdPassageiros;
    private int $pesoMax;

    public function getDados() {
        $dados = sprintf("Modelo: %s | Velocidade máx: %dkm/h | Cor: %s | " . 
                         "Quant. Passageiros : %d | Peso Máximo: %dt\n", 
                        $this->modelo, $this->velocidadeMax, 
                        $this->cor, $this->qtdPassageiros, $this->pesoMax);
        return $dados;
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros(): int
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros(int $qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax(): int
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax(int $pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }

}