<?php
$mensagem; 
if($_POST){
    $senha = $_POST["senha"]; 
    $confirmaSenha = $_POST["confirmaSenha"]; 
    
}
if($senha = " "){
    $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi cadastrada!</span>";
        
}elseif($senha == $confirmaSenha){
    $mensagem = "<span class='aviso'><b>Aviso</b>: Senha vlildada com sucesso</span>";
        
}else{
    $mensagem = "<span class='aviso'><b>Aviso</b>: Erro!</span>";
    
        
}
echo "<p id='mensagem'>".$mensagem."</p>";


