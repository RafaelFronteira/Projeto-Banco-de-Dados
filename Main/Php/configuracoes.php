<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "biblioteca";
    
    
    $conecta = new mysqli($servidor,$usuario,$senha,$bd);
    $conecta->set_charset("utf8");

    if(mysqli_connect_errno()){
        die("Erro ao conectar banco de dados  -> ".mysqli_connect_errno());
    }