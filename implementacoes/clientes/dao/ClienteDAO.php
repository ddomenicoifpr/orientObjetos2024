<?php

require_once("../modelo/Cliente.php");
require_once("../modelo/ClientePF.php");
require_once("../modelo/ClientePJ.php");

class ClienteDAO {

    //Método para inserir um cliente
    public function inserirCliente(Cliente $cliente) {
        $sql = "INSERT INTO clientes 
                (tipo, nome_social, email, nome, cpf, razao_social, cnpj)
                VALUES
                (?, ?, ?, ?, ?, ?, ?)";
    }

}