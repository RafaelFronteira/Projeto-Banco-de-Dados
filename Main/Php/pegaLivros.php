<?php
    require_once "configuracoes.php";

    $sql = "SELECT id, nome, img FROM livro";
    
    $comando = $conecta->query($sql);