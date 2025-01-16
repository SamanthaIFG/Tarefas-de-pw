<?php
include "coneta_banco.inc";
$codigo = $_POST["codigo"];
$E_mail = $_POST["E_mail"];
$senha = $_POST["senha"];
$resultado = mysqli_query($conexao, "INSERT INTO usuarios VALUES ($codigo,'$E_mail', '$senha');");
$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);
echo "<p>";
echo "Foram inseridos ".$linhas." registros";

?>