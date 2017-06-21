<?php
    include_once 'configuracoes.php';

    $titulo = strtoupper($_POST['pesquisa']);    

    $comando = "SELECT * FROM livro WHERE titulo ='{$titulo}'";

    $executa = $conecta->query($comando);
    $row = $executa->fetch_assoc();
    if($row['id'] != '') {

        $id = $row['id'];
        echo "<script> window.location.href='../detalhe.php?idLivro=$id'</script>"; 
    }
    else {

        echo "<script>alert('Livro não encontrado!'); window.location.href='../index.php'</script>"; 
    }
    
    