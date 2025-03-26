<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insere Aluno na Database</title>
</head>
<body>
   <h1>Insere Aluno da DB</h1>
   <?php
   include "conexao.php";
       echo 'Nome : ',$_POST['nome'],'<br>';
       echo 'Senha : ', $_POST['senha'],'<br>';
       $nome = $_POST["nome"];
       $senha = $_POST["senha"];
       $sql = "INSERT INTO cadastro (nome,senha) values ('$nome','$senha'')";
       if(mysqli_query($ligacao, $sql)){
           echo "<br> Dados inseridos com sucesso ";
       }else{
           echo "Erro ao inserir os dados";
       }
       mysqli_close($ligacao);
   ?>


</body>
</html>


