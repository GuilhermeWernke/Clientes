<?php
    
    require_once("modelo/ClientePF.php");
    require_once("modelo/ClientePJ.php");
    
    require_once("dao/ClienteDAO.php");
    
    $opcao = "";
    
    do
    {
        
        print("\033[1;44m╔═══════════════╣\033[m  Cadastro de Clientes  \033[1;44m╠════════════════╗\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                    Escolha uma opção:                   \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                 1- Cadastrar Cliente PF                 \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                 2- Cadastrar Cliente PJ                 \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                   3- Listar Clientes                    \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                    4- Buscar Cliente                    \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                   5- Excluir Cliente                    \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                         0- Sair                         \033[1;44m║\033[m \n");
        print("\033[1;44m║\033[m                                                         \033[1;44m║\033[m \n");
        print("\033[1;44m╚═════════════════════════════════════════════════════════╝\033[m \n");
        $opcao = readline();
        system("clear");
        
        switch ($opcao) 
        {
            
            case 1:
                
                $cliente = new ClientePF();
                $cliente->setNome(readline("Informe o nome: "));
                system("clear");
                
                $cliente->setNomeSocial(readline("Informe o nome social: "));
                system("clear");
                
                $cliente->setEmail(readline("Informe o e-mail: "));
                system("clear");
                
                $cliente->setCpf(readline("Informe o CPF: "));
                system("clear");
                
                $clienteDAO = new ClienteDAO();
                $clienteDAO->inserirCliente($cliente);
                
                print("Cliente inserido com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 2:
                
                $cliente = new ClientePJ();
                $cliente->setRazaoSocial(readline("Informe a razão social: "));
                system("clear");
                
                $cliente->setNomeSocial(readline("Informe o nome social: "));
                system("clear");
                
                $cliente->setEmail(readline("Informe o e-mail: "));
                system("clear");
                
                $cliente->setCnpj(readline("Informe o CNPJ: "));
                system("clear");
                
                $clienteDAO = new ClienteDAO();
                $clienteDAO->inserirCliente($cliente);
                
                print("Cliente inserido com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 3:
                
                $clienteDAO = new ClienteDAO();
                
                $clientes = $clienteDAO->listarClientes();
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 4:
                
                $clienteDAO = new ClienteDAO();
                
                print($clienteDAO->buscarClientePorId(readline("Informe o ID do cliente: ")));
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 5:
                
                # code...
                
            break;
            
            case 0:
                
                system("clear");
                
                print("Salvando Alterações... \n");
                sleep(rand(1, 3));
                
                system("clear");
                
            break;
            
            default:
                
                print ("Valor informado errado! \n");
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
        }
        
    } while ($opcao != 0)
    
    
    
    
    
    
    
    
    // Teste de Conexão
    
    // require_once("util/conexao.php");
    
    // $conexao = new Conexao();
    // $con = $conexao->getCon();
    
    // print_r($con);
    
?>