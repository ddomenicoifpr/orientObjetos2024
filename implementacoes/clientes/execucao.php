<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");

//Teste da conexão
/*require_once("util/Conexao.php");
$con = Conexao::getCon();
print_r($con);*/

do {
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case 1:
            //Criar o objeto a ser persistido
            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o nome: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setCpf(readline("Informe o CPF: "));
            $cliente->setEmail(readline("Informe o e-mail: "));

            //Chamar o método do DAO para persistir o objeto
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "Cliente PF cadastrado com sucesso!\n";
            break;

        case 2:
            //Criar o objeto a ser persistido
            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline("Informe a razão social: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setCnpj(readline("Informe o CNPJ: "));
            $cliente->setEmail(readline("Informe o e-mail: "));

            //Chamar o método do DAO para persistir o objeto
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "Cliente PJ cadastrado com sucesso!\n";
            break;

        case 3:
            //Buscar os objetos do banco de dados
            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->listarClientes();

            //Exibir os dados dos objetos
            foreach($clientes as $c) {
                //Versão com implementação local
                /*
                printf("%d- %s | %s | %s | %s | %s\n",
                        $c->getId(), $c->getTipo(), $c->getNomeSocial(),
                        $c->getIdentificacao(), $c->getNroDoc(),
                        $c->getEmail());
                */

                //Versão com implementação utilizando o toString
                echo $c;
            }

            break;

        case 4:
            //Buscar um cliente pelo seu ID

            //1- Ler o ID
            $id = readline("Informe o ID do cliente: ");

            //2- Chamar o método que retorna o objeto cliente do banco de dados
            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->buscarPorId($id);

            //3- Verificar se o cliente retornar é diferente de NULL
            //3.1- Se for diferente de NULL, mostrar os dados do cliente
            //3.2- Se for igual a NULL, mostrar mensagem que o cliente não foi encontrado
            if($cliente != null)
                echo $cliente;
            else
                echo "Cliente não econtrado!\n";

            break;

        case 5:
            //EXCLUSÃO PELO ID DO CLIENTE
            
            //1- Listar os clientes
            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->listarClientes();
            foreach($clientes as $c)
                echo $c;

            //2- Solicatar ao usuário para informar o ID
            $id = readline("Informe o ID do cliente a ser excluído: ");

            //2.1 - Validar se o cliente existe
            $cliente = $clienteDAO->buscarPorId($id);
            if($cliente) {

                //3- Chamar o ClienteDAO para remover da base de dados
                $clienteDAO->excluirPorId($id);

                //4- Informar que o cliente foi excluido
                echo "Cliente excluído com sucesso!\n";
            } else
                echo "Cliente não encontrado!\n";

            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
