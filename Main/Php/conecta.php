<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior


$host = "localhost"; 
$user = "root";
$sen ="";
$dbname = "biblioteca";
$tabela= "usuario";
$mysqli = new mysqli($host, $user, $senha, $dbname,$tabela);

if(mysqli_connect_errno()){
    die('Erro ao conectar'. mysqli_connect_errno());
    
    exit(); 
}
