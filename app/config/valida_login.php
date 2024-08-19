<?php

require_once 'db.php';

// Receber dados do formulário (assumindo que o método é POST)

$username = $_POST['username'];
$password = $_POST['password'];

// Consultar o banco de dados
$sql = "SELECT * FROM usuarios WHERE username = '$username'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    session_start();
    $_SESSION['user_id'] = $row['id'];
    header('Location: ../index.php');
    exit();
} else {
    echo "Senha incorreta.";
}

$conexao->close();