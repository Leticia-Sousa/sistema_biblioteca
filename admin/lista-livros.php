<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>

<?php require('includes/conexao.php') ?>

<div class="card shadow mb-4">
<div class="card-header py-3">

<div class="row">
        <div class="col-md-9">
        <h4 style= "color: #FF9A9F " class="m-0 font-weight-bold">Lista de Livros</h4>
    </div>

    <div class="col-md-3">
        <a href="cadastrar-livros.php">
        <button style="background-color: #FF9A9F; border-color: #FF9A9F" class="btn btn-primary col-md-12"> Novo Livro</button>
        </a>
    </div>
</div>
</div>

    <div class="card-body">    

        <div class="table-responsive">
            <table class="table table-bordered" id="table-usuarios" widht="100%" cellspacing="0" >
                <thead>
                    <th >ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                <?php
                    $sql = "SELECT * FROM livros ORDER BY id DESC";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id = $row['id'];
                        $titulo = $row['titulo'];
                        $autor = $row['autor'];
                        $editora = $row['editora'];
                        $categoria = $row['categoria'];
                    ?>

                        <tr class="centro">
                            <td><strong><?php echo $id?></strong></td>
                            <td><?php echo $titulo ?></td>
                            <td><?php echo $autor ?></td>
                            <td><?php echo $editora ?></td>
                            <td><?php echo $categoria?></td>
                            <td>
                                <a href="editar-livro.php?id=<?php echo $id ?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </button></a>
                                <a href="acoes/livros/excluir-livro.php?id=<?php echo $id?>">
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