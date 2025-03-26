<?php
session_start();
$localhost = "127.0.0.1:3306";
$user = "root";
$senha = "";
$banco = "akira";

$ligacao = mysqli_connect($localhost,$user,$senha,$banco);


if(!$ligacao){
    (die("Conexão falhou. ".mysqli_connect_error()));
}
else{
    echo "Banco de Dados conectado com sucesso.<br>";
}

?>