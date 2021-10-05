<?php

require('../../includes/conexao.php');
require('../../includes/verificaLogado.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$categoria = $_POST['categoria'];


$sql = "INSERT INTO
                livros 
                    (titulo, autor, editora, categoria) 
                VALUES 
                    ('$titulo', '$autor', '$editora', '$categoria')";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../cadastrar-livros.php?msg=salvo';
         </script>";
}else{
    echo "
        <script>
            alert('erro ao salvar');
        </script>
        ";
}
