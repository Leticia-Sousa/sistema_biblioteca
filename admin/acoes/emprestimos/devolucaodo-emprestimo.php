<?php
require('../../includes/conexao.php');
require('../../includes/verificaLogado.php');

$id = $_GET['id'];

$sql = "UPDATE livros SET emprestado = 'N' WHERE id = $id";

if(mysqli_query($conexao, $sql)){
  $sqlDelete = "DELETE FROM emprestimos WHERE tituloLivro = $id";
  mysqli_query($conexao, $sqlDelete);
    echo "<script>
          location.href='../../lista-emprestimos.php?msg=devolvido';
        </script>";
}

?>
