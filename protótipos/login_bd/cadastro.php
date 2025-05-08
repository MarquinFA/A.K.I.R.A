<?php
require 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!empty($usuario) && !empty($senha)) {
        // Verifica se o usuário já existe
        $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $stmt->execute([$usuario]);

        if ($stmt->rowCount() > 0) {
            $erro = "Usuário já existe.";
        } else {
            // Criptografa a senha e insere o novo usuário
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, senha) VALUES (?, ?)');
            $stmt->execute([$usuario, $hash]);

            // Cria sessão e redireciona
            $_SESSION['usuario'] = $usuario;
            header('Location: principal.php');
            exit;
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>