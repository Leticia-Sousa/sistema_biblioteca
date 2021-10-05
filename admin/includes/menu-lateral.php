
  <style>
    span{
      font-weight: bold;
      color: whitesmoke;
    }

  </style>
  
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #69E0B5;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
       
        <div style = "margin-top: 75px" class="sidebar-brand-text mx-3"><img style="width: 120px; height: 110px; 
    padding: 5px;" src="../admin/img/livro.png" ></div>
      </a>

      
      <!-- Nav Item - Pages Collapse Menu -->

        <a class="nav-link" href="inicio.php">
          <h3 style="text-align: center; margin-top: 60px; color: white; font-size: bold">Sistema Bibliotecário</h3></a>
      <hr style="background-color:aquamarine" class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="inicio.php" >
        <i class="fas fa-home"></i>
          <span >INÍCIO</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-user" aria-hidden="true"></i>
          <span>USUÁRIOS</span>
        </a>
        <div id="collapseUsuarios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cadastrar-usuarios.php">Cadastrar</a>
            <a class="collapse-item" href="lista-usuarios.php">Lista</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="far fa-address-card"></i>
          <span>CADASTRO</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cadastrar-livros.php">Livros</a>
            <a class="collapse-item" href="cadastrar-alunos.php">Alunos</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGerenciamento" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-book-open"></i>
          <span>GERENCIAMENTO</span>
        </a>
        <div id="collapseGerenciamento" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cadastrar-emprestimos.php">Empréstimos</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRelatorios" aria-expanded="true" aria-controls="collapseTwo">
          <i class="far fa-list-alt"></i>
          <span>RELATÓRIOS</span>
        </a>
        <div id="collapseRelatorios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="lista-livros.php">Lista de Livros</a>
            <a class="collapse-item" href="lista-alunos.php">Lista de Alunos</a>
            <a class="collapse-item" href="lista-emprestimos.php">Lista de Empréstimos</a>
          </div>
        </div>
      </li>




    </ul>


	    <!-- End of Sidebar --