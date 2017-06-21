<?php
    require_once "configuracoes.php";

    $sql = "SELECT id, titulo, img, descricao FROM livro ORDER BY id DESC limit 4";
    $comando = $conecta->query($sql);
    