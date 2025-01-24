<?php
include "conecta-mysql.inc";
$Nome = $_POST["Nome"];
$quantidade=$_POST["quantidade"];
$codigo = $_POST["codigo"];
$resultado = mysqli_query($conexao, "INSERT INTO livros-disponiveis VALUES ('$Nome',$quantidade,$codigo);");
$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);
echo "<p>";
echo "Foram inseridos ".$linhas." registros";
echo "<p><a href='listar.php'>Listar Livros</a><p>";
?>