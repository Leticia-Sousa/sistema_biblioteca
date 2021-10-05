<?php

require('../../includes/conexao.php');

$nomeAluno = $_POST['nomeAluno'];
$email = $_POST['email'];
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$turno = $_POST['turno'];

$sql = "INSERT INTO
                alunos 
                    (nomeAluno, email, ano, turma, turno) 
                VALUES 
                    ('$nomeAluno', '$email', '$ano', '$turma', '$turno')";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../cadastrar-alunos.php?msg=salvo';
         </script>";
}else{
    echo "
        <script>
            alert('erro ao salvar');
        </script>
        ";
}
