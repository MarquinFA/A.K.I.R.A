<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sim</title>
</head>
<body>
    <h1>
    <?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    $sql = "INSERT INTO cadastro (nome, senha) VALUES ('$nome', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "teste concluido";
    } else {
        echo "teste falhou: " . $sql . "<br>" .
    $conexao->error;
    }

    $conexao->close();
}
?>
    </h1>
</body>
</html>