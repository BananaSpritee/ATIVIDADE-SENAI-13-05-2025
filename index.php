<?php

include("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>

<body>

    <h1>Cadastrar Aluno</h1>

    <form action="inserir.php" method="POST">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <button type="submit">Enviar</button>

    </form>

    <hr>

    <h2>Lista de Alunos</h2>

    <table border="1" cellpading="10">

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>

        </tr>

        <?php

        $sql = "SELECT * FROM banco_de_dados";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<tr>
                        <td>{$row['id_aluno']}</td>
                        <td>{$row['nome_aluno']}</td>
                        <td>{$row['email_aluno']}</td>
                        <td><a href='excluir.php?id={$row['id_aluno']}' onclick='return confirm(\"Tem certeza?\")'>Excluir</a></td>
                      </tr>";

            }
        } else {

            echo "<tr><td colspan='4'>Nenhum aluno cadastrado.</td></tr>";

        }

        ?>

    </table>

</body>

</html>