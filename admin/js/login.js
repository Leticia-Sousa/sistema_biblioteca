function validarLogin(){
    var emailUsuario = document.getElementById('emailUsuario').value;
    var senha = document.getElementById('senha').value;

    if(emailUsuario == ""){
        document.getElementById('retorno-login').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno-login').innerHTML = 'Ops! Preencha o <strong>LOGIN</strong> para continuar';
    }else if(senha == ""){
        document.getElementById('retorno-login').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno-login').innerHTML = "Ops! Preencha a <strong>SENHA</strong> para continuar";
    }else{
        document.getElementById('form-login').removeAttribute('onsubmit');
    }
}
