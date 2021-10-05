<?php include('includes/header.php') ?>
<?php include('includes/menu-lateral.php') ?>
<?php include('includes/barra-superior.php') ?>

<?php include('includes/conexao.php') ?>

<div class="card shadow mb-4">
<div class="card-header py-3">

<div class="row">
        <div class="col-md-9">
        <h4 style= "color: #FF9A9F " class="m-0 font-weight-bold">Lista de Usuários</h4>
    </div>

    
</div>
</div>

    <div class="card-body">    

        <div class="table-responsive">
            <table class="table table-bordered" id="table-usuarios" widht="100%" cellspacing="0" >
                <thead>
                    <th >ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                <?php
                    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id = $row['id'];
                        $nomeUsuario = $row['nomeUsuario'];
                        $emailUsuario = $row['emailUsuario'];
                    ?>
                    
                        <tr class="centro">
                            <td ><strong><?php echo $id?></strong></td>
                            <td><?php echo $nomeUsuario?></td>
                            <td><?php echo $emailUsuario?></td>
                            <td>
                                <a href="editar-usuario.php?id=<?php echo $id?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </button></a>
                                <a href="acoes/usuarios/excluir-usuario.php?id=<?php echo $id?>">
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