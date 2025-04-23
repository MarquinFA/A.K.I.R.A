<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "akira";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);


if ($conexao->connect_error) {
    die("Falha na conexão: " .
    $conexao->connect_error);
}
{
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

$sql = "INSERT INTO `loginteste`(`nome`, `senha`) VALUES ('$nome', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "teste concluido";
    } else {
        echo "teste falhou: " . $sql . "<br>" .
    $conexao->error;
    }

    $conexao->close();
}
}
?>