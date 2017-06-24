<?php
    require_once "configuracoes.php";

    $sql = "SELECT categoria FROM categoria order by categoria";
    $comando = $conecta->query($sql);
    
    