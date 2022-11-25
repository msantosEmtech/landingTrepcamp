(function(){
    "use strict";

    trepcamp = trepcamp ? trepcamp : {};

    trepcamp.login = trepcamp.login ? trepcamp.login : {};

    trepcamp.login.elements = {
        $txtEmail: $('#txtEmail'),
        $txtPassword: $('#txtPassword'),
        $txtPassword2: $('#txtPassword2'),
        $btnSignUp: $('#btnSignUp'),
        $formSignUp: $('#formSignUp'),

        $txtEmailSignIn: $('#txtEmailSignIn'),
        $txtPasswordSignIn: $('#txtPasswordSignIn'),
        $btnSignIn: $('#btnSignIn'),
        $formSignIn: $('#formSignIn')
    };

    trepcamp.login.uris = {
        add: `${trepcamp.base.url}Login/Insert`,
        startSession: `${trepcamp.base.url}Login/InitSession`
    };

    const elements = trepcamp.login.elements;
    const uris = trepcamp.login.uris;

    function validPasswordEquals(pass1, pass2){
        if(pass1 != pass2){
            return false;
        }else{
            return true;
        }
    }

    elements.$formSignUp.on("submit", function(e){
        e.preventDefault();

        let valid = validPasswordEquals(elements.$txtPassword.val().trim(), elements.$txtPassword2.val().trim());

        if(valid){
            let model = {
                'email': elements.$txtEmail.val().trim(),
                'password': elements.$txtPassword.val().trim()
            }

            
            $.post(uris.add, model, "JSON")
            .done(function(result){
                
                let res = JSON.parse(result);
                if(res){
                    Swal.fire('se ha enviado un correo de verificación');
                        elements.$txtEmail.val("");
                        elements.$txtPassword.val("");
                        elements.$txtPassword2.val("");
                }else{
                    Swal.fire('error');
                    elements.$txtEmail.val("");
                        elements.$txtPassword.val("");
                        elements.$txtPassword2.val("");
                }
            });

        }else{
            Swal.fire('no is same password');
        }
    });

    elements.$formSignIn.on("submit", function(e){
        e.preventDefault();
        
        var model = {
            'email': $("#txtEmailSignIn").val(),
            'password': $("#txtPasswordSignIn").val()
        }

        $.post(uris.startSession,model)
        .done(function(result){
            var data = JSON.parse(result);

            if(data != false){
                var titulo = "Acceso Correcto";
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: titulo,
                    showConfirmButton: false,
                    timer: 1500
                }).then(result => {
                    if(result){
                        window.location.replace(trepcamp.base.url + "Login");
                    }
                });
                
            }else{
                var titulo = "Email or password Incorrect";
                alertaMensajeDenied(titulo);
                
            }
        });
    });

    function alertaMensajeDenied(titulo){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: titulo,
            showConfirmButton: false,
            timer: 1500
        });
    };
}());