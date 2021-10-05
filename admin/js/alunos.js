function validarAluno() {
    var nomeAluno = document.getElementById('nomeAluno').value;
    var email = document.getElementById('email').value;
    var ano = document.getElementById('ano').value;
    var turma = document.getElementById('turma').value;
    var turno = document.getElementById('turno').value;

    if(nomeAluno == "" || email == "" || turma == ""){
        document.getElementById('erro-aluno').removeAttribute('hidden');
    }else{
        document.getElementById('form-aluno').removeAttribute('onsubmit');
    }
}

function validarEdicaoAluno(){
    var nomeAluno = document.getElementById('nomeAluno').value;
    var email = document.getElementById('email').value;
    var turma = document.getElementById('turma').value;
   
    if(nomeAluno == "" || email == "" || turma == ""){
        document.getElementById('erro-aluno').removeAttribute('hidden');
    }else{
        document.getElementById('form-aluno').removeAttribute('onsubmit');
    }
}



