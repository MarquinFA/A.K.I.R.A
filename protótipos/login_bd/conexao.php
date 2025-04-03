<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "akira";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

echo("conectado");

if ($conexao->connect_error) {
    die("Falha na conexão: " .
    $conexao->connect_error);
}
?>