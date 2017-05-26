<?php
    include 'connectDB.php';
    
    //pega os dados passados pelo formulario
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cel = $_POST['cel'];
    $fixo= $_POST['fixo'];
    
    //faz o insert
    $sql = $mysqli->prepare("insert into usuario(nome,senha,email,endereco,cel,fixo) values (?,?,?,?,?,?)");
    
    //ssssii = string,string,string,string,int,int
    $sql->bind_param("ssssii",$nome,$senha,$email,$endereco,$cel,$fixo);
    
    $sql->execute();
    
    $sql->store_result();
    
    //Verifica se alguma linha do BD foi afetada
    $resultado = $sql->afffected_rows();
    
    if($resultado > 0)
    {
        echo"<script> alert('Usuario cadastrado!')
            window.location.href='login.php';
        </script>
        ";
    }
    else
    {
          echo"<script> alert('Erro ao cadastrar!')
            window.location.href='login.php';
        </script>
        ";
    }
    