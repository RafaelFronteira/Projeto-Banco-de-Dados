<?php
@session_start(); 
 if(isset($_SESSION['email'])){
            
}else{
    header("Location:http://localhost/projetoBD/Main/paginalogin.html");
}