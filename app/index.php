<?php

require_once './config/valida_session.php';
include "../layout/header.php";
require_once 'config/db.php';


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Alunos Cadastrados</h1>
        <?php
        $sql = "SELECT * FROM alunos";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {

            echo "<table>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Curso</th>
    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
        <td>" . $row['nome'] . "</td>
        <td> " . $row['cpf'] . "</td>
        <td>" . $row['email'] . "</td>
        <td> " . $row['curso'] . "</td>

    </tr>";


            }

        } else {
            echo "Cadastro de alunos não encontrado!";
        }

        $conexao->close();

        ?>


    </main>
</body>

</html>