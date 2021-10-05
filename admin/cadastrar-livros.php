<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 style="margin-left: 4%; color: #FF757C; font-weight: 540" class="h3 mb-0 ">Cadastrar Livros</h1>
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
                        <i class='fa fa-check-circle' aria-hidden='true'></i>
                        Salvo com sucesso!
                        </div>";
                    }
                }
                ?>


                <form method="POST" action="acoes/livros/inserir-livro.php" id="form-livro" onsubmit="return false">
                    <div class="form-group">
                        <label>Titulo do Livro:</label>
                        <input type="text" class="form-control form-control-user" id="titulo" name="titulo">

                    </div>

                    <div class="form-group">
                        <label>Autor:</label>
                        <input type="text" class="form-control form-control-user" id="autor" name="autor">
                    </div>

                    <div class="form-group">
                        <label>Editora:</label>
                        <input type="text" class="form-control form-control-user" id="editora" name="editora">
                    </div>

                    <div class="form-group">
                        <label>Categoria:</label>
                        <select id="categoria" name="categoria" class="form-control form-control-user">
                            <option value="">Selecione...</option>
                            <option value="Apostilas">Apostilas</option>
                            <option value="Anuários">Anuários</option>
                            <option value="Atlas">Atlas</option>
                            <option value="Dicionários">Dicionários</option>
                            <option value="Gibis">Gibis</option>
                            <option value="Livros Didáticos">Livros Didáticos</option>
                            <option value="Livros Infantis">Livros Infantis</option>
                            <option value="Livros Infanto-Juvenis">Livros Infanto-Juvenis</option>
                            <option value="Revistas">Revistas</option>
                        </select>
                    </div>
                   

                    <input type="submit" value="Salvar Livro" class="btn btn-success col-lg-12" onclick="validarLivro()" />
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>

<script src="js/livros.js"></script>
<?php include('includes/footer.php'); ?>