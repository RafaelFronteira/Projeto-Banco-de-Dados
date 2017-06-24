<?php
    require_once "configuracoes.php";

    $sql = "SELECT id, titulo, img, descricao FROM livro ORDER BY id DESC limit 15";
    $comando = $conecta->query($sql);
    