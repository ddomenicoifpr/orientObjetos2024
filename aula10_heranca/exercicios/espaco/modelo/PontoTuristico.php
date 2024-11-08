<?php

require_once("Espaco.php");

class PontoTuristico extends Espaco {
    
    private int $duracaoDaVisita;

    public function getDadosPontoTuristico() {
        $dados = "PONTO TURÍSTICO - ";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Duração da visita: " . $this->duracaoDaVisita . " minutos\n";
        return $dados;
    }

    public function getDuracaoDaVisita(): int
    {
        return $this->duracaoDaVisita;
    }

    public function setDuracaoDaVisita(int $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}