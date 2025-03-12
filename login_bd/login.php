<?php
$servidor = "localhost";
$user = "root";
$password = "aKiR4baNkmys8l";
$banco = "Akira";

$conexao = new mysqli($servidor, $user, $password, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " .
    $conexao->connect_error);
}
?>