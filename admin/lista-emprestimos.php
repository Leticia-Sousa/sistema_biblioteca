<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>

<?php require('includes/conexao.php') ?>

<div class="card shadow mb-4">
<div class="card-header py-3">

<div class="row">
        <div class="col-md-9">
        <h4 style= "color: #FF9A9F " class="m-0 font-weight-bold">Lista de Empréstimos</h4>
    </div>

    <div class="col-md-3">
        <a href="cadastrar-emprestimos.php">
        <button style="background-color: #FF9A9F; border-color: #FF9A9F" class="btn btn-primary col-md-12"> Novo Empréstimo</button>
        </a>
    </div>
</div>
</div>

    <div class="card-body">   
        
    <?php
    if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "devolvido") {
     echo "<div class='alert alert-success'>
    <i class='fa fa-check-circle' aria-hidden='true'></i>
     Devolução efetuada com sucesso!
    </div>";
    }
    }
    ?>

    

        <div class="table-responsive">
            <table class="table table-bordered" id="table-usuarios" widht="100%" cellspacing="0" >
                <thead>
                    <th>ID</th>
                    <th>Livro</th>
                    <th>Aluno</th>
                    <th>Data de Empréstimo</th>
                    <th>Data de Devolução</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                <?php
                    $sql = "SELECT * FROM emprestimos JOIN alunos ON emprestimos.nomealuno = alunos.id 
                    JOIN livros ON emprestimos.tituloLivro = livros.id ORDER BY emprestimos.id DESC";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id = $row['id'];
                        $tituloLivro = $row['titulo'];
                        $nomealuno = $row['nomeAluno'];
                        $dataEmprestimo = $row['dataEmprestimo'];
                        $dataDevolucao = $row['dataDevolucao'];
                    ?>

                    
                        <tr class="centro">
                            <td><strong><?php echo $id ?></strong></td>
                            <td><?php echo $tituloLivro ?></td>
                            <td><?php echo $nomealuno ?></td>
                            <td><?php echo $dataEmprestimo ?></td>
                            <td><?php echo $dataDevolucao ?></td>
                            <td>
                                
                                <a href="acoes/emprestimos/devolucaodo-emprestimo.php?id=<?php echo $id?>">
                                    <button class="btn btn-danger">
                                        Devolver
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