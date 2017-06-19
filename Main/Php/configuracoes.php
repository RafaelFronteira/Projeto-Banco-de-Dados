<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "biblioteca";
    
    
    $conecta = new mysqli($servidor,$usuario,$senha,$bd);
    
    if(mysqli_connect_errno()){
        die("Erro ao conectar banco de dados  -> ".mysqli_connect_errno());
    }
    
        echo "Conectado"; 
        
        //$sele = "Select*from usuario where `email` = $email and `senha` = $senha"; 
        
        
    
