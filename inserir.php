<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO banco_de_dados (nome_aluno, email_aluno) values ('$nome', '$email')";

    if ($conn->query( $sql ) === TRUE) {

        header("Location: index.php");

    } else {

        echo "Erro ao inserir: ". $conn->error;

    }
}

?>