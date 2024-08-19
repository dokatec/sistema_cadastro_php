<?php 

$servidor = "localhost";
$user = "root";
$password = "root";
$databtase = "cadastro";

 $conexao = new \mysqli($servidor, $user, $password, $databtase); 

if($conexao->connect_errno){
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}


