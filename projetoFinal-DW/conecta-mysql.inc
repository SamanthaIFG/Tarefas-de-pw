<?php
 $bdServidor = 'localhost';
    $bdUsuario = 'root';
    $bdSenha = '';
    $bdBanco = 'livros-para-doação';

    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

    if (mysqli_connect_errno($conexao)) {
        echo "Problema para conectar no banco. Verifique os dados!";
        die();
    }
?>