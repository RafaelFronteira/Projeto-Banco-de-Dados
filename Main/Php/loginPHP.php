<?php
    include_once 'configuracoes.php';
    
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    
    $sele = "Select * from USUARIO where email = $email and senha = $senha"; 
    
    $res = mysqli_query($conecta,$sele);
    
    $linha = mysqli_affected_rows($conecta); 

    if ($linha) {
        echo "Você foi logado com sucesso!"; 
        session_start(); 
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha']; 
        header("Location:http://localhost/GitHub/Projeto-Banco-de-Dados/Main/index.php");
    }
    else {
        echo 'Erro!';
    }