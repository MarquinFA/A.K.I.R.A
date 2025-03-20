<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "akira";
$porta = "3306";

$conexao = new mysqli($servidor, $usuario, $senha, $banco , $porta);

if ($conexao->connect_error) {
    die("Falha na conexão: " .
    $conexao->connect_error);
}
?>