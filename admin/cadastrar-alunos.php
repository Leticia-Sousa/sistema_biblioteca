<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between ">
        <h1 style="margin-left: 4%; color: #FF757C; font-weight: 540" class="h3 mb-0">Cadastrar Alunos</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-aluno" hidden>
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


                <form method="POST" action="acoes/alunos/inserir-aluno.php" id="form-aluno" onsubmit="return false">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control form-control-user" id="nomeAluno" name="nomeAluno">

                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control form-control-user" id="email" name="email">
                    </div>

                    <div class="row">
                    <div class="col-md 4">
                    <div class="form-group">
                        <label>Ano:</label>
                        <select id="ano" name="ano" class="form-control form-control-user">
                            <option value="">Selecione...</option>
                            <option value="1EF">1° ano Ensino Fundamental</option>
                            <option value="2EF">2° ano Ensino Fundamental</option>
                            <option value="3EF">3° ano Ensino Fundamental</option>
                            <option value="4EF">4° ano Ensino Fundamental</option>
                            <option value="5EF">5° ano Ensino Fundamental</option>
                            <option value="6EF">6° ano Ensino Fundamental</option>
                            <option value="7EF">7° ano Ensino Fundamental</option>
                            <option value="8EF">8° ano Ensino Fundamental</option>
                            <option value="9EF">9° ano Ensino Fundamental</option>
                            <option value="1EM">1° ano Ensino Médio</option>
                            <option value="2EM">2° ano Ensino Médio</option>
                            <option value="3EM">3° ano Ensino Médio</option>
                        </select>
                    </div>
                    </div>

                    <div class="col-md 4">
                    <div class="form-group">
                        <label>Turma:</label>
                        <input type="text" class="form-control form-control-user" id="turma" name="turma">
                    </div>
                    </div>

                    <div class="col-md 4">
                    <div class="form-group">
                        <label>Turno:</label>
                        <select id="turno" name="turno" class="form-control form-control-user">
                            <option value="">Selecione...</option>
                            <option value="M">Manhã</option>
                            <option value="T">Tarde</option>
                            <option value="N">Noite</option>
                        </select>
                    </div>
                    </div>

                    <input type="submit" value="Salvar Aluno" class="btn btn-success col-lg-12" onclick="validarAluno()" />
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>

<script src="js/alunos.js"></script>
<?php include('includes/footer.php'); ?>