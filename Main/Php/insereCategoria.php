<?php
include 'configuracoes.php';
$categoria = $_POST["categoria"];

$comando = $conecta->prepare('insert into categoria (categoria) values (?)');

$comando->bind_param("s",$categoria);
$comando->execute();
echo $comando->store_result();
    

if($comando->store_result() > 0){
        echo "<script>alert('Dados inseridos com sucesso!!!!!');"
        . "window.location.href='../paginaAdCategoria.html'</script>";
    }
    else
    {
        echo "<script>alert('Erro ao inserir dados');"
        . "window.location.href='../paginaAdCategoria.html'</script>";
    }
    

