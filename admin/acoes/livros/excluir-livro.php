<?php
require('../../includes/conexao.php');
require('../../includes/verificaLogado.php');

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
          location.href='../../lista-livros.php';
        </script>";
}