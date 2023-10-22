<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "landing";

    $conn = new mysqli($host, $usuario, $senha, $banco);
    if($conn -> connect_error){
        echo("erro de conexão com o banco". $conn -> connect_error);
    }
    
?>