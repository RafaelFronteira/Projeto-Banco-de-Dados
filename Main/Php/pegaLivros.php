<?php
    require_once "configuracoes.php";

    $sql = "SELECT nome, img FROM livro";
    
    $comando = $conecta->query($sql);