<?php

require('../../includes/conexao.php');
require('../../includes/verificaLogado.php');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$categoria = $_POST['categoria'];

$sql = "UPDATE 
                 livros
            SET 
                 titulo = '$titulo',
                 autor = '$autor',
                 editora ='$editora',
                 categoria ='$categoria'
            WHERE id=$id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
    location.href='../../lista-livros.php'    
  </script>";
}

