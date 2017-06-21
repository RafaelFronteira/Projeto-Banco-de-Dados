<?php

    session_start(); 
    if(isset($_SESSION['email'])){
        header("Location:http://localhost/GitHub/Projeto-Banco-de-Dados/Main/index.php");
    }