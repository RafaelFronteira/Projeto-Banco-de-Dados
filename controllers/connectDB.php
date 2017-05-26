<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdName = "nome_do_bd";
    
    $conecta = new mysqli($servidor,$usuario,$senha,$bdName);
    
    if(mysqli_connector_errno()){
        
        die("Erro ao conectar com o banco de dados. -> ".mysqli_connector_errno());
    }