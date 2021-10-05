<?php
require('../../includes/conexao.php');
require('../../includes/verificaLogado.php');

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
          location.href='../../lista-usuarios.php';
        </script>";
}