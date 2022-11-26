(function(){
    "use strict";

    trepcamp = trepcamp ? trepcamp : {};

    trepcamp.account = trepcamp.account ? trepcamp.account : {};

    trepcamp.account.elements = {
        $txtBirthday: $('#txtBirthday'),
        $txtPhone: $('#txtPhone'),
        $btnCreateAccount: $('#btnCreateAccount'),
        $txtName: $('#txtName'),
        $txtLastName: $('#txtLastName'),
        $selectGender: $('#selectGender')
    };

    trepcamp.account.uris = {
        createAccount: `${trepcamp.base.url}Account/Create`
    };

    const elements = trepcamp.account.elements;
    const uris = trepcamp.account.uris;

    elements.$txtBirthday.datepicker({
        language: 'es',
        format: 'dd/mm/yyyy',
        todayHighlight: true,
        autoclose: true,
        orientation: 'bottom'
    });

    elements.$txtPhone.keypress(function (e) {
        var charCode = (e.which) ? e.which : event.keyCode    
    
        if (String.fromCharCode(charCode).match(/[^0-9]/g))    
    
        return false; 
    });

    var inputPhone = window.intlTelInput(document.querySelector("#txtPhone"),{
        separateDialCode: true,
        initialCountry:"auto",
        hiddenInput: "full",
        // geoIpLookup: function(success, failure){
        //     $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp){
        //        var countryCode = (resp && resp.country) ? resp.country : "";
        //        success(countryCode);
        //     });
        // },
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js",
        autoHideDialCode: true
    });

    elements.$btnCreateAccount.on("click", function(e){
        e.preventDefault();
        let birthday = elements.$txtBirthday.data('datepicker').getFormattedDate('yyyy-mm-dd');
        var full_number = inputPhone.getNumber(intlTelInputUtils.numberFormat.E164);
        let model = {
            'Name': elements.$txtName.val(),
            'LastName': elements.$txtLastName.val(),
            'Birthday': birthday,
            'Gender': elements.$selectGender.val(),
            'Phone': full_number,
        };

        $.post(uris.createAccount, model,"JSON")
        .done(function(result){
            let data = JSON.parse(result);

            if(data){
                var titulo = "Update Correct";
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: titulo,
                    showConfirmButton: false,
                    timer: 1500
                }).then(result => {
                    if(result){
                        window.location.replace(`${trepcamp.base.url}Profile`);
                    }
                });
            }else{
                var titulo = "Update Incorrect";
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