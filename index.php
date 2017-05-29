<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = $_GET["nome"]; 
        $cpf = $_GET["cpf"];
        $senha = $_GET["senha"];
        $confirmaSenha = $_GET["confirmaSenha"];
        $endereco = $_GET["endereco"];
        $celular  = $_GET["celular"];
        $fixo = $_GET["fixo"];
        
        echo "O nome é $nome";
        echo "Cpf : $cpf";
        echo "Endereco: $endereco";
        echo "Celular: $celular";
        echo "Fixo: $fixo";
                
                
        
        
        
        ?>
    </body>
</html>
