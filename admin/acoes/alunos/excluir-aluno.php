<?php
require('../../includes/conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
          location.href='../../lista-alunos.php';
        </script>";
}
