<?php

require('../../includes/conexao.php');


$emailUsuario = $_POST['emailUsuario'];
$senha = md5($_POST['senha']);


$sql = "SELECT 
            COUNT(*) as total
        FROM 
            usuarios
        WHERE
            emailUsuario = '$emailUsuario'
        AND
            senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    if ($row['total'] >= 1) {
        session_start();
        $_SESSION['logado'] = true;
        $sqlNome = "SELECT nomeUsuario FROM usuarios WHERE emailUsuario = '$emailUsuario' LIMIT 1";
        $resultadoNome = mysqli_query($conexao, $sqlNome);

        while($rowNome = mysqli_fetch_assoc($resultadoNome)) {
            $_SESSION['nomeUsuario'] = $rowNome['nomeUsuario'];
        }
        echo "<script>
        location.href='../../inicio.php';
        </script>";
} else {
    echo "<script>
            location.href='../../index.php?msg=erro';
        </script>";
}
}
