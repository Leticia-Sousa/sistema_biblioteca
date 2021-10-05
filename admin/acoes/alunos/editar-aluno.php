<?php

require('../../includes/conexao.php');

$id = $_POST['id'];
$nomeAluno = $_POST['nomeAluno'];
$email = $_POST['email'];
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$turno = $_POST['turno'];

$sql = "UPDATE 
                 alunos
            SET 
                 nomeAluno = '$nomeAluno',
                 email = '$email',
                 ano ='$ano',
                 turma ='$turma',
                 turno ='$turno'
            WHERE id=$id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
    location.href='../../lista-alunos.php';  
  </script>";
}