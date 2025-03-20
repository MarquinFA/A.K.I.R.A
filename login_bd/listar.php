<?php
include("conexao.php");

$sql = "SELECT * FROM cadastro";
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