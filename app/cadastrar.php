<?php
require_once "./config/valida_session.php";
include "../layout/header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="container-form">
        <h1>Novo Cadastro</h1>
        <form action="config/valida_cadastro.php" method="post">
            <div>
                <label for="">Nome Completo:</label>
                <input type="text" name="nome" id="nome" required>
                <label for="">RG:</label>
                <input type="text" name="rg" id="rg" required>
                <label for="">CPF:</label>
                <input type="text" name="cpf" id="cpf" required>
                <label for="">E-mail:</label>
                <input type="email" name="email" id="email" required>
                <label for="">Endereço: </label>
                <input type="text" name="endereco" id="endereco" required>
            </div>
            <div>
                <label for="">Data de Nascimento:</label>
                <input type="text" name="data_nascimento" id="data_nascimento" required>
                <label for="">Idade:</label>
                <input type="text" name="idade" id="idade" required>
                <label for="">Escolha o Curso:</label>
                <select name="" id=""></select>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </main>
</body>

</html>