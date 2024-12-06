<?php

require_once("Produto.php");

class Livro extends Produto {

    private string $autor;

    //Método sobreescrito
    public function getDados() {
        $dados = "Descricao: " . $this->descricao;
        $dados .= " | Unidade de Medida: " . $this->unidadeMedida;
        $dados .= " | Autor: " . $this->autor;
        $dados .= "\n";

        return $dados;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}