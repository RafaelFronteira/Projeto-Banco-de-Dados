<?php

include 'configuracoes.php';


$titulo = $_POST["titulo"]; 
$autor = $_POST["autor"];
$editora = $_POST["editora"]; 
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"]; 
$ano = $_POST["ano"]; 
$subcategoria =$_POST["subcategoria"];
$img = $_POST["img"];
$src = $_POST["src"];

$comando = $conecta->prepare('insert into livro (titulo,autor,editora,categoria,descricao,ano,subcategoria, img, src) values (?,?,?,?,?,?,?,?,?)');

    //Subistitui as interrogações pelos dados do usuario:
    $comando->bind_param("sssisisss",$titulo,$autor,$editora,$categoria,$descricao,$ano,$subcategoria, $img, $src);
    
    //Executa o insert no banco de dados
    $comando->execute();
    
    //Pega o resultado
    echo $comando->store_result();
    
    
    if($comando->store_result() > 0){
        echo "<script>alert('Dados inseridos com sucesso!!!!!');"
        . "window.location.href='../insereLivro.html'</script>";
    }
    else
    {
        echo "<script>alert('Erro ao inserir dados');"
        . "window.location.href='../insereLivro.html'</script>";
    }
    
    $conecta->close();


        