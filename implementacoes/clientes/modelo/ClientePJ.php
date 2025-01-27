<?php

require_once("Cliente.php");

class ClientePJ extends Cliente {

    //Atributos
    private string $razaoSocial;
    private string $cnpj;

    //Métodos
    public function getIdentificacao() {
        return $this->razaoSocial;
    }

    public function getNroDoc() {
        return $this->cnpj;
    }

    public function getTipo() {
        return "J";
    }

    //GET e SET
    

    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}