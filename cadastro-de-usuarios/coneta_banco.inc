<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";

//criar a nossa conexão com o banco  de dados 
$conexao = new mysqli($servidor, $usuario, $senha);
mysqli_select_db($conexao,"cadastro-de-usuarios");


//checar se a conexão foi realizada com sucesso
if($conexao->connect_error)
{die("conexão falhou! ".$conexão->connect_error);
}
echo " conexão realizada com sucesso!";
?>