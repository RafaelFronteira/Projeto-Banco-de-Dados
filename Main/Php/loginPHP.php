<?php
include ("acessoRestrito.php");
?>
<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "biblioteca";
    
    
    $conecta = new mysqli($servidor,$usuario,$senha,$bd);
    
    if(mysqli_connect_errno()){
        die("Erro ao conectar banco de dados  -> ".mysqli_connect_errno());
    }
    
        
$email = $_POST['email'];
$senha = $_POST['senha']; 

$sele = "Select*from USUARIO where email = '$email' and senha = '$senha'"; 
$res = mysqli_query($conecta,$sele);
$linha = mysqli_affected_rows($conecta); 


    
if ($linha) {
    echo "Você foi logado com sucesso!"; 
    session_start(); 
    
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha']; 
    header("Location:principal.php");
    
    
}

?>