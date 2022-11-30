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

            $.ajax({
                type: 'POST',
                url:  uris.add,
                data: model,
                // here
                beforeSend: function() {
                    swal.fire({
                        html: '<h5>Loading...</h5>',
                        showConfirmButton: false,
                        onRender: function() {
                             // there will only ever be one sweet alert open.
                            $('.swal2-content').prepend(sweet_loader);
                        }
                    });
                },
                success: function(json) {
                    try {
                        json = JSON.parse(json);
                    }
                    catch(error) {
                        Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Ups!!',
                                text: 'your email is already registered',
                                confirmButtonColor: '#FFD041',
                                showClass: {
                                    popup: 'animate__animated animate__zoomInDown'
                                },
                                hideClass: {
                                    popup: 'animate__animated animate__zoomOutUp'
                                }
                            });
                    }
                    if(json == 1){
                        Swal.fire('a verification email has been sent');
                            elements.$txtEmail.val("");
                            elements.$txtPassword.val("");
                            elements.$txtPassword2.val("");
                    }else if(json == -1){
                        swal.fire({
                            icon: 'error',
                            html: '<h5>your email is already registered</h5>'
                        });
                        elements.$txtEmail.val("");
                        elements.$txtPassword.val("");
                        elements.$txtPassword2.val("");
                    }
                    else if(json == 0){
                        swal.fire({
                            icon: 'error',
                            html: '<h5>a verification email has not been sent</h5>'
                        });
                        elements.$txtEmail.val("");
                        elements.$txtPassword.val("");
                        elements.$txtPassword2.val("");
                    }
                },
                error: function() {
                    swal.fire({
                        icon: 'error',
                        html: '<h5>Error!</h5>'
                    });
                    return false;
                }
            });

            // $.post(uris.add, model, "JSON")
            // .done(function(result){
                
            //     let res = JSON.parse(result);
            //     if(res){
            //         Swal.fire('a verification email has been sent');
            //             elements.$txtEmail.val("");
            //             elements.$txtPassword.val("");
            //             elements.$txtPassword2.val("");
            //     }else{
            //         Swal.fire('error');
            //         elements.$txtEmail.val("");
            //             elements.$txtPassword.val("");
            //             elements.$txtPassword2.val("");
            //     }
            // });

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

            if(data.status == 1){
                var titulo = "Access success";
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: titulo,
                    showConfirmButton: false,
                    timer: 1500
                }).then(result => {
                    if(result){
                        window.location.replace(`${trepcamp.base.url}Intranet/sumary`);
                    }
                });
                
            }else if(data.status == 2){
                var titulo = "Access success";
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: titulo,
                    showConfirmButton: false,
                    timer: 1500
                }).then(result => {
                    if(result){
                        window.location.replace(`${trepcamp.base.url}Account`);
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