<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "aKiR4baNkmys8l";
$banco = "Akira";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " .
    $conexao->connect_error);
}
?>