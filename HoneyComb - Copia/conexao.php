<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "honeycomb";

    $conexao = mysqli_connect($host, $user, $senha, $banco);
    if(!$conexao){
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
?>