<?php
    require_once 'configuracoes.php';


    //Pega os dados inseridos no formulario html:
    
    
    $nome = $_POST["nome"]; 
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];
    $email = $_POST["email"]; 
    $endereco = $_POST["endereco"];
    $celular  = $_POST["celular"];
    $fixo = $_POST["fixo"];
    
    //Fazer o comando insert do mysql:
    $comando = $conecta->prepare('insert into usuario (cpf,nome,email,senha,endereco,celular,fixo) values (?,?,?,?,?,?,?)');
    
    //Subistitui as interrogações pelos dados do usuario:
    $comando->bind_param("sssisss",$cpf,$nome,$email,$senha,$endereco,$celular,$fixo);
    
    //Executa o insert no banco de dados
    $comando->execute();
    
    //Pega o resultado
    echo $comando->store_result();
    
    
    if($comando->store_result() > 0){
        echo "<script>alert('Dados inseridos com sucesso!!!!!');"
        . "window.location.href='../cadastroCliente.html'</script>";
    }
    else
    {
        echo "<script>alert('Erro ao inserir dados');"
        . "window.location.href='../cadastroCliente.html'</script>";
    }
    
    $conecta->close();
