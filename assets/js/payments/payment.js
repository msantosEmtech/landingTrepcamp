  //console.log(pagoStripe)
  trepcamp = trepcamp ? trepcamp : {};
  
  const sendPayStripe = () => {
  
    let dato = "";
    let total = 50;//total del challenge
    let token = $('#stripeToken').val();

    let hoy = new Date();
    let fecha = hoy.getDate() + '-' + (hoy.getMonth() + 1) + '-' + hoy.getFullYear();
    let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
    let fechaYHora = fecha + ' ' + hora;

    // setTimeout(() => { 
    $.ajax({
        type: "POST",
        url: `${trepcamp.base.url}Payment/payOnStripe`,
        data: {
            total: total,
            stripeToken: token
        }
    }).done(function(data) {
        //data;
        let resp = JSON.parse(data);
        //console.log(resp["codigo"], total, resp["stripeId"], fechaYHora);
        if(resp["codigo"] == 1){
            //console.log(resp["stripeId"]);
            //modal success
            addPayment($("#idChapterActive").val(),$("#totalPayment").text(), resp["stripeId"]);
        }else{
            //modal error
            var titulo = "payment error";
            alertaMensajeDenied(titulo);
        }

    });

    function addPayment(idChapter, price, id_pay_stripe){
        let model = {
            'IdChapter': idChapter,
            'Price': price,
            'id_pay_confirm': id_pay_stripe
        }

        let uriAdd = `${trepcamp.base.url}Payment/Create`;
        $.post(uriAdd, model, "JSON")
        .done(function(result){
            let data = JSON.parse(result);
            if(data){
                var titulo = "payment complete";
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: titulo,
                    showConfirmButton: false,
                    timer: 3500
                }).then(result => {
                    if(result){
                        window.location.replace(`${trepcamp.base.url}Intranet/toolkit`);//congratulations
                    }
                });
            }else{
                var titulo = "payment error";
                alertaMensajeDenied(titulo);
            }
        });
    }

    function alertaMensajeDenied(titulo){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: titulo,
            showConfirmButton: false,
            timer: 1500
        });
    };



}
