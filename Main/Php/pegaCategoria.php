<?php
    require_once "configuracoes.php";

    $sql = "SELECT categoria FROM categoria";
    $comando = $conecta->query($sql);
    
    