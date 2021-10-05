<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>

<?php include ('includes/conexao.php'); ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
while($row = mysqli_fetch_assoc($resultado)){
    $titulo = $row['titulo'];
    $autor = $row['autor'];
    $editora = $row['editora'];
    $categoria = $row['categoria'];
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 style="margin-left: 4%; color: #FF757C" class="h3 mb-0 ">Alterar Livros</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-livro" hidden>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    Ops! Informe todos os dados para continuar!
                </div>


                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == "salvo") {
                        echo "<div class='alert alert-success'>
                        Editado com sucesso!
                        </div>";
                    }
                }
                ?>


                <form method="POST" action="acoes/livros/editar-livro.php" id="form-livro" onsubmit="return false">
                <input type="hidden" name="id" value="<?php echo $id?>">
                    <div class="form-group">
                        <label>Titulo do Livro:</label>
                        <input type="text" class="form-control form-control-user" id="titulo" name="titulo" value="<?php echo $titulo?>">
                    </div>

                    <div class="form-group">
                        <label>Autor:</label>
                        <input type="text" class="form-control form-control-user" id="autor" name="autor" value="<?php echo $autor?>">
                    </div>

                    <div class="form-group">
                        <label>Editora:</label>
                        <input type="text" class="form-control form-control-user" id="editora" name="editora" value="<?php echo $editora?>">
                    </div>

                    <div class="form-group">
                        <label>Categoria:</label>
                        <select id="categoria" name="categoria" class="form-control form-control-user">
                        <?php 
                            if($categoria == "Apostilas"){
                                echo "<option value='Apostilas' selected>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Anuários"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários' selected>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Atlas"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas' selected>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Dicionários"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários' selected>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Livros Didáticos"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos' selected>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Livros Infantis"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis' selected>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Livros Infanto-Juvenis"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis' selected>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas'>Revistas</option>";
                            }

                            if($categoria == "Revistas"){
                                echo "<option value='Apostilas'>Apostilas</option>";
                                echo "<option value='Anuários'>Anuários</option>";
                                echo "<option value='Atlas'>Atlas</option>";
                                echo "<option value='Dicionários'>Dicionários</option>";
                                echo "<option value='Gibis'>Gibis</option>";
                                echo "<option value='Livros Didáticos'>Livros Didáticos</option>";
                                echo "<option value='Livros Infantis'>Livros Infantis</option>";
                                echo "<option value='Livros Infanto-Juvenis'>Livros Infanto-Juvenis</option>";
                                echo "<option value='Revistas' selected>Revistas</option>";
                            }

                                ?>

                        </select>
                    </div>
                   

                    <input type="submit" value="Editar Livro" class="btn btn-success col-lg-12" onclick="validarEdicaoLivro()" />
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>

<script src="js/livros.js"></script>
<?php include('includes/footer.php'); ?>