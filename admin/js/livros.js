function validarLivro() {
    var titulo = document.getElementById('titulo').value;
    var autor = document.getElementById('autor').value;
    var editora = document.getElementById('editora').value;
    var categoria = document.getElementById('categoria').value;

    if(titulo == "" || autor == "" || editora == ""){
        document.getElementById('erro-livro').removeAttribute('hidden');
    }else{
        document.getElementById('form-livro').removeAttribute('onsubmit');
    }
}

function validarEdicaoLivro(){
    var titulo = document.getElementById('titulo').value;
    var autor = document.getElementById('autor').value;
    var editora = document.getElementById('editora').value;
    var categoria = document.getElementById('categoria').value;

    if(titulo == "" || autor == "" || editora == ""){
        document.getElementById('erro-livro').removeAttribute('hidden');
    }else{
        document.getElementById('form-livro').removeAttribute('onsubmit');
    }
}
