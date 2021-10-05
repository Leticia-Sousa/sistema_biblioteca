<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>

<?php require('includes/conexao.php') ?>

<div class="card shadow mb-4">
<div class="card-header py-3">

<div class="row">
        <div class="col-md-9">
        <h4 style= "color: #FF9A9F " class="m-0 font-weight-bold">Lista de Alunos</h4>
    </div>

    <div class="col-md-3">
        <a href="cadastrar-alunos.php">
        <button style="background-color: #FF9A9F; border-color: #FF9A9F" class="btn btn-primary col-md-12"> Novo Aluno</button>
        </a>
    </div>
</div>
</div>

    <div class="card-body">   
        
   

        <div class="table-responsive">
            <table class="table table-bordered" id="table-usuarios" widht="100%" cellspacing="0" >
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ano</th>
                    <th>Turma</th>
                    <th>Turno</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                <?php
                    $sql = "SELECT * FROM alunos ORDER BY id DESC";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id = $row['id'];
                        $nomeAluno = $row['nomeAluno'];
                        $email = $row['email'];
                        $ano = $row['ano'];
                        $turma = $row['turma'];
                        $turno = $row['turno'];
                    ?>

                        <tr class="centro">
                            <td><strong><?php echo $id?></strong></td>
                            <td><?php echo $nomeAluno ?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $ano ?></td>
                            <td><?php echo $turma?></td>
                            <td><?php echo $turno ?></td>
                            <td>
                                <a href="editar-aluno.php?id=<?php echo $id?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </button></a>
                                <a href="acoes/alunos/excluir-aluno.php?id=<?php echo $id?>">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                        Excluir
                                    </button>
                            </td>
                        </tr>
                        <?php }?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>