<?php include('includes/header.php'); ?>
<?php include('includes/menu-lateral.php'); ?>
<?php include('includes/barra-superior.php'); ?>

<?php include ('includes/conexao.php'); ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM alunos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
while($row = mysqli_fetch_assoc($resultado)){
    $nomeAluno = $row['nomeAluno'];
    $email = $row['email'];
    $ano = $row['ano'];
    $turma = $row['turma'];
    $turno = $row['turno'];
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 style="margin-left: 4%; color: #FF757C" class="h3 mb-0 ">Alterar Alunos</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="alert alert-danger" id="erro-aluno" hidden>
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


                <form method="POST" action="acoes/alunos/editar-aluno.php" id="form-aluno" onsubmit="return false">
                <input type="hidden" name="id" value="<?php echo $id?>">
                    <div class="form-group">
                        <label>Nome do Aluno:</label>
                        <input type="text" class="form-control form-control-user" id="nomeAluno" name="nomeAluno" value="<?php echo $nomeAluno?>">
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control form-control-user" id="email" name="email" value="<?php echo $email?>">
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>Ano:</label>
                        <select id="ano" name="ano" class="form-control form-control-user">
                        <?php 
                            if($ano == "1EF"){
                                echo "
                                <option value='1EF' selected>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
                            }

                            if($ano == "2EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF' selected>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "3EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF' selected>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "4EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF' selected>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "5EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF' selected>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "6EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF' selected>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "7EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF' selected>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "8EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF' selected>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "9EF"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF' selected>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "1EM"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM' selected>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "2EM"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM' selected>2° ano Ensino Médio</option>
                                <option value='3EM'>3° ano Ensino Médio</option>";
     
                            }

                            if($ano == "3EM"){
                                echo "
                                <option value='1EF'>1° ano Ensino Fundamental</option>
                                <option value='2EF'>2° ano Ensino Fundamental</option>
                                <option value='3EF'>3° ano Ensino Fundamental</option>
                                <option value='4EF'>4° ano Ensino Fundamental</option>
                                <option value='5EF'>5° ano Ensino Fundamental</option>
                                <option value='6EF'>6° ano Ensino Fundamental</option>
                                <option value='7EF'>7° ano Ensino Fundamental</option>
                                <option value='8EF'>8° ano Ensino Fundamental</option>
                                <option value='9EF'>9° ano Ensino Fundamental</option>
                                <option value='1EM'>1° ano Ensino Médio</option>
                                <option value='2EM'>2° ano Ensino Médio</option>
                                <option value='3EM' selected>3° ano Ensino Médio</option>";
     
                            }

                            ?>
                            </select>
                        </div>
                        </div>
                        

                        <div class="col-md-4">
                        <div class="form-group">
                        <label>Turma:</label>
                        <input type="text" class="form-control form-control-user" id="turma" name="turma" value="<?php echo $turma?>">
                    </div>
                    </div>

                        <div class="col-md-4">
                            <div class="form-group">
                        <label>Turno:</label>
                        <select id="turno" name="turno" class="form-control form-control-user">
                        <?php if ($turno == "M") {
                                echo " 
                                <option value='M' selected>Manhã</option>
                                <option value='T'>Tarde</option>
                                <option value='N'>Noite</option>";
                            } else if ($turno == "T") {
                                echo " 
                                <option value='M'>Manhã</option>
                                <option value='T' selected>Tarde</option>
                                <option value='N'>Noite</option>";
                            } else {
                                echo " 
                                <option value='M'>Manhã</option>
                                <option value='T'>Tarde</option>
                                <option value='N' selected>Noite</option>";
                            } 
                            ?>

                        </select>
                    </div>
                    </div>
                        </div>
                   
                    <input type="submit" value="Editar Aluno" class="btn btn-success col-lg-12" onclick="validarEdicaoAluno()" />
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>

<script src="js/alunos.js"></script>
<?php include('includes/footer.php'); ?>