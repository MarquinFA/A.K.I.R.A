<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'akira';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " .
    $conexao->connect_error);
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){


    
}

$sql = "SELECT * FROM loginteste";
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] .
        " - Senha: " . $row["senha"] .
        "<br>";
    }
    } else {
        echo "Nenhum usuario encontrado";
    }

    $conexao->close();
    ?>