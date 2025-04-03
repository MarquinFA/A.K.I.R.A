<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];

$sql = "INSERT INTO `login_teste` (`id`, `nome`, `senha`) VALUES ('$id', '$nome', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "teste concluido";
    } else {
        echo "teste falhou: " . $sql . "<br>" .
    $conexao->error;
    }

    $conexao->close();
}
?>