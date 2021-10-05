<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>

<?php require('includes/conexao.php'); ?>

<?php

$totalLivrosQuery = "SELECT count(*) as totalLivros FROM livros";

$totalLivrosResult = mysqli_query($conexao, $totalLivrosQuery);
while($row = mysqli_fetch_assoc($totalLivrosResult)){
  $totalLivros = $row['totalLivros'];
}

$totalAlunosQuery = "SELECT count(*) as totalAlunos FROM alunos";

$totalAlunosResult = mysqli_query($conexao, $totalAlunosQuery);
while($row = mysqli_fetch_assoc($totalAlunosResult)){
  $totalAlunos = $row['totalAlunos'];
}

$totalEmprestimosQuery = "SELECT count(*) as totalEmprestimos FROM emprestimos";

$totalEmprestimosResult = mysqli_query($conexao, $totalEmprestimosQuery);
while($row = mysqli_fetch_assoc($totalEmprestimosResult)){
  $totalEmprestimos = $row['totalEmprestimos'];
}
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 style= "color: #FF9A9F; font-weight: bold" class="h3 mb-0"></h1>          
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-4">
            <div class="card-t">
              <div class="card-header align-items-center background-inicio">
                LIVROS CADASTRADOS
              </div>
              <div class="card-body">
              <img src="../admin/img/livros-inicio.jpg" class="card-img-top" alt="...">
                <button type="button" style="margin-top: 20px; background-color: #FF636B; border: pink; font-weight: bold" disabled class="btn btn-primary col-lg-12">
                  TOTAL:  <?php echo $totalLivros?> <span class="badge badge-light"></span>
                </button>
              </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card-t">
              <div class="card-header background-inicio">
                ALUNOS CADASTRADOS
              </div>
              <div class="card-body">
              <img src="../admin/img/alunos.jpg" height="179" class="card-img-top" alt="...">
                <button type="button" style="margin-top: 20px; background-color: #FF636B; border: pink; font-weight: bold" disabled class="btn btn-primary col-lg-12">
                TOTAL: <?php echo $totalAlunos?> <span class="badge badge-light"></span>
                </button>
              </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card-t">
              <div class="card-header background-inicio">
                LIVROS EMPRESTADOS 
              </div>
              <div class="card-body">
              <img src="../admin/img/emprestimo.jpg" height="179" class="card-img-top" alt="...">
              <button type="button" style="margin-top: 20px; background-color: #FF636B; border: pink; font-weight: bold" disabled class="btn btn-primary col-lg-12">
              TOTAL: <?php echo $totalEmprestimos?><span class="badge badge-dark"></span>
                </button>
              </div>
            </div>
            </div>


           
            </div>

            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include('includes/footer.php');  ?>