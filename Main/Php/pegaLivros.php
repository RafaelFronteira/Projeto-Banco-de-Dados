<?php
    require_once "configuracoes.php";

    $sql = "SELECT id, titulo, img, descricao FROM livro";
    $comando = $conecta->query($sql);
    