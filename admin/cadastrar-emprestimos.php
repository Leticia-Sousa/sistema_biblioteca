<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>

<?php require('includes/conexao.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 style="margin-left: 4%; color: #FF757C; font-weight: 540" class="h3 mb-0 ">Empréstimos</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-emprestimo" hidden>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    Ops! Informe todos os dados para continuar!
                </div>


                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "salvo") {
                        echo "<div class='alert alert-success'>
                        <i class='fa fa-check-circle' aria-hidden='true'></i>
                        Salvo com sucesso!
                        </div>";
                    }
                }
                ?>


                <form method="POST" action="acoes/emprestimos/inserir-emprestimo.php" id="form-emprestimo" onsubmit="return false">
 

                    <div class="form-group">
                        <label>Titulo do Livro:</label>
                        <select class="form-control form-control-user" name="tituloLivro" id="tituloLivro" placeholder="Selecione...">
                            <?php
                            $sql = "SELECT * FROM 
                            livros WHERE emprestado = 'N' ORDER BY titulo ASC";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($row = mysqli_fetch_assoc($resultado)) {
                                $id = $row['id'];
                                $tit = $row['titulo'];
                                echo "<option value='$id'>$tit</option>";
                            }
                        
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nome do Aluno:</label>
                        <select class="form-control form-control-user" name="nomealuno" id="nomealuno">
                            <?php
                           
                            $sql = "SELECT * FROM 
                                        alunos
                                     ORDER BY
                                        nomeAluno
                                    ASC";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($row = mysqli_fetch_assoc($resultado)) {
                                $id = $row['id'];
                                $desc = $row['nomeAluno'];
                                echo "<option value='$id'>$desc</option>";
                            }

                            ?>
                        </select>
                    </div>

                    <div class="row">
                    <div class="col-md 4">
                    <div class="form-group">
                        <label>Data do Empréstimo:</label>
                        <input type="date" class="form-control form-control-user" id="dataEmprestimo" name="dataEmprestimo" >
                    </div>
                    </div>

                    <div class="col-md 4">
                    <div class="form-group">
                        <label>Data da Devolução:</label>
                        <input type="date" class="form-control form-control-user" id="dataDevolucao" name="dataDevolucao" >


                    </div>
                    </div>
                        </div>

                        <div class="form-group">
                        <label>Emprestado:</label>
                        <select id="emprestado" name="emprestado" class="form-control form-control-user">
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                        </select>
                    </div>
                   

                    <input type="submit" value="Registar Empréstimo" class="btn btn-success col-lg-12" onclick="validarEmprestimo()" />
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>

<script src="js/emprestimos.js"></script>
<?php include('includes/footer.php'); ?>