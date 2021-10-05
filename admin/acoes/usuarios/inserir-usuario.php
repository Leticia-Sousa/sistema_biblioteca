<?php

require('../../includes/conexao.php');

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senha = md5($_POST['senha']);


$sql = "INSERT INTO
                usuarios 
                    (nomeUsuario, emailUsuario, senha) 
                VALUES 
                    ('$nomeUsuario', '$emailUsuario', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../cadastrar-usuarios.php?msg=salvo';
         </script>";
}else{
    echo "
        <script>
            alert('erro ao salvar');
        </script>
        ";
}