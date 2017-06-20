<?php
    include_once 'configuracoes.php';
    
    session_start();
    if(isset($_GET['sub'])){
        echo '<script> alert("Saindo"); </script>';
        session_destroy();
        unset($_SESSION);
        header("Location: ../index.php");
    }
        