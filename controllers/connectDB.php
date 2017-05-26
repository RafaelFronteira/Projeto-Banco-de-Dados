<?php
    //Código para conexão com o banco de dados mysql

    $servidor = "localhost"; // nome do servidor
    $usuario = "root"; // nome do usuario no mysql
    $senha = ""; // senha do usuario no mysql
    $bdName = "nome_do_bd"; // nome do banco de dados
    
    $conecta = new mysqli($servidor,$usuario,$senha,$bdName);
    
    if(mysqli_connector_errno()){
        
        die("Erro ao conectar com o banco de dados. -> ".mysqli_connector_errno());
    }
