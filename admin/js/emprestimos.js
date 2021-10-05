function validarEmprestimo(){
    var tituloLivro = document.getElementById('tituloLivro').value;
    var nomealuno = document.getElementById('nomealuno').value;
    var dataEmprestimo = document.getElementById('dataEmprestimo').value;
    var dataDevolucao = document.getElementById('dataDevolucao').value;
 

    if(tituloLivro == "" || nomealuno == "" ){
        document.getElementById('erro-emprestimo').removeAttribute('hidden');
    }else{
        document.getElementById('form-emprestimo').removeAttribute('onsubmit');
    }

}

