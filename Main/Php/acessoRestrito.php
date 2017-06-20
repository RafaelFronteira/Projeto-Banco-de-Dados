<?php

    session_start(); 
    if(isset($_SESSION['email'])){

    }else{
        header("Location:http://localhost/banco_de_dados/Projeto-Banco-de-Dados/Main/paginalogin.html");
    }