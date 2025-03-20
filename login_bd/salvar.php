<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cadastro (nome, senha) VALUES ('$nome', '$senha')";

    if ($conxao->query($sql) === TRUE) {
        echo "teste concluido";
    } else {
        echo "teste falhou: " . $sql . "<br>" .
    $conexao->error;
    }

    $conexao->close();
}
?>