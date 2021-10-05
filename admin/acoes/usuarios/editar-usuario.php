<?php
require('../../includes/verificaLogado.php');
require('../../includes/conexao.php');

$id = $_POST['id'];
$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senha = $_POST['senha'];

if($senha == ""){
$sql = "UPDATE 
                 usuarios
            SET 
                 nomeUsuario = '$nomeUsuario',
                 emailUsuario = '$emailUsuario'
                
            WHERE id=$id";
}else{
     $senhaCripto = md5($senha);
    $sql = "UPDATE 
                 usuarios
            SET 
                 nomeUsuario = '$nomeUsuario',
                 emailUsuario = '$emailUsuario',
                 senha ='$senhaCripto'
                
            WHERE id=$id";
}

if(mysqli_query($conexao, $sql)){
    echo "<script>
    location.href='../../lista-usuarios.php';  
  </script>";
}