<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include ("acessoRestrito.php");

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "biblioteca";
    
    
    $conecta = new mysqli($servidor,$usuario,$senha,$bd);
    
    if(mysqli_connect_errno()){
        die("Erro ao conectar banco de dados  -> ".mysqli_connect_errno());
    }
    
        
        echo 'Você está conectado(a) como '.$_SESSION['email']. ' <button name="button">Sair</button>';
        if($_GET['button']){ 
           unset ( $_SESSION['email']);
		unset ( $_SESSION['senha']);
		header("Location: Main/paginalogin.html"); 
           session_destroy(); 
       }
       
        
        
        ?>
        
    </body>
</html>
