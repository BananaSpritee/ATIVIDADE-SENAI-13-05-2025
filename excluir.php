<?php

include("conexao.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM banco_de_dados WHERE id_aluno = '$id'";

    if ($conn->query($sql) === TRUE) {
        
        header("Location: index.php");

    } else {

        echo "Erro ao excluir: ". $conn->error;

    }
}

?>