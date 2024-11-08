<?php

class Espaco {

    private string $nome;
    private string $endereco;

    protected function getDadosEspaco() {
        $dados = "Nome: " . $this->nome;
        $dados .= " | Endereço: " . $this->endereco;
        return $dados;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}