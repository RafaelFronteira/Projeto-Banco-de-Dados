<?php
    require_once 'configuracoes.php';
    
    $acesso;

    $comando = "SELECT acesso FROM registro WHERE livro ='{$idLivro}'";

    $executa = $conecta->query($comando);
    $row = $executa->fetch_assoc();
    if($row['acesso'] == 0) {
        
    }
    else {

        echo "<script>alert('Livro não encontrado!'); window.location.href='../index.php'</script>"; 
    }



    $data_atual = date("Y-m-d");



    $comando = $conecta->prepare('insert into registro (livro, data_acesso, acessos) values ($idLivro,$data_atual, $acesso)');