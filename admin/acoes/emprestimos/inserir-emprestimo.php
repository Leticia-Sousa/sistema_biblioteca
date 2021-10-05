<?php

require('../../includes/conexao.php');
require('../../includes/verificaLogado.php');

$tituloLivro = $_POST['tituloLivro'];
$nomealuno = $_POST['nomealuno'];
$dataEmprestimo = $_POST['dataEmprestimo'];
$dataDevolucao = $_POST['dataDevolucao'];


$sql = "INSERT INTO
                emprestimos 
                    (tituloLivro, nomealuno, dataEmprestimo, dataDevolucao) 
                VALUES 
                    ('$tituloLivro', '$nomealuno', '$dataEmprestimo', '$dataDevolucao')";

                    

if(mysqli_query($conexao, $sql)){

    $sqlLivro = "UPDATE livros SET emprestado = 'S' WHERE id = $tituloLivro";
    mysqli_query($conexao, $sqlLivro);
    echo "<script>
            location.href='../../cadastrar-emprestimos.php?msg=salvo';
         </script>";
}else{
    echo "
        <script>
            alert('erro ao salvar');
        </script>
        ";
}