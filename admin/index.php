<?php
session_start();
if (isset($_SESSION['logado'])) {
    echo "<script>
            location.href='inicio.php';
          </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js"></script>
    <title>Login - Sistema Bibliotecário</title>
</head>

<body>
<div class="container container-fluid">
       <div class="row">
           <div class="offset-md-3 col-md-6 box-login">
               <img src="img/livro.png" width="95" heigth="60" hspace="13" alt="Livro">
               <h2 class="titulo1">Sistema Bibliotecário</h2>

               <div id="retorno-login">

               <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "erro") {
                        echo "
                                <div class='alert alert-danger'>
                                    Ops! Os dados informados estão 
                                    incorretos.
                                </div>";
                    }
                }
                ?>

               
                </div>

                <form method="post" id="form-login" action="acoes/usuarios/login.php" onsubmit="return false">
                    <div class="form-group">
                        <label class="form-label">Email:</label>
                        <input type="email" name="emailUsuario" id="emailUsuario" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>

                    <div class="form-group btn-logar">
                        <button onclick="validarLogin()" class="btn btn-outline-success  col-sm-12 col-xs-12 offset-md-3 col-md-6">ENTRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

