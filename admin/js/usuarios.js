function validarUsuario(){
    var nomeUsuario = document.getElementById('nomeUsuario').value;
    var emailUsuario = document.getElementById('emailUsuario').value;
    var senha = document.getElementById('senha').value;

    if(nomeUsuario == "" || emailUsuario == "" || senha == ""){
        document.getElementById('erro-usuario').removeAttribute('hidden');
    }else{
        document.getElementById('form-usuario').removeAttribute('onsubmit');
    }
}

function validarEdicaoUsuario(){
    var nomeUsuario = document.getElementById('nomeUsuario').value;
    var emailUsuario = document.getElementById('emailUsuario').value;

    if(nomeUsuario == "" || emailUsuario == ""){
            document.getElementById('erro-usuario').removeAttribute('hidden');
        }else{
            document.getElementById('form-usuario').removeAttribute('onsubmit');
        }
}
