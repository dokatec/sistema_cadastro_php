<?php

// Conexão com o banco de dados
require_once 'db.php';

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$curso = $_POST['cursos'];


// Inserindo os dados no banco

$sql = "INSERT INTO alunos (nome, rg, cpf, email, endereco, data_nascimento, idade, curso) VALUES ('$nome', '$rg', '$cpf', '$email', '$endereco', '$data_nascimento', '$idade', '$curso')";

if ($conexao->query($sql) === true) {
    echo 'Cadastro efetuado!';
} else {
    echo 'Erro ao cadastrar';
}


