  //console.log(pagoStripe)
  trepcamp = trepcamp ? trepcamp : {};
  
  const sendPayStripe = () => {
    /*  let total = totalPagoStripe;
     //totalPagoStripe.replace(".00", "");
     total = totalPagoStripe.replace(",", "");
     console.log(total); */
    let dato = "";
    let total = 100;
    //total = 100;
    let token = $('#stripeToken').val();
   let mail = 'oscar@valencia.emtech.digital';
      /*let cardsName = $('#cardName').val(); */
    let customer = 1;

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
            stripeToken: token,
            customerMail: mail,
            idCustomer: customer,
        }
    }).done(function(data) {
        //data;
        let resp = JSON.parse(data);
        console.log(resp["codigo"], total, resp["stripeId"], fechaYHora);
        
        if(resp["codigo"] == 1){
            //modal success
            addPayment(1,200);
        }else{
            //modal error
            var titulo = "payment error";
            alertaMensajeDenied(titulo);
        }

    });
    /* }, 500); */

    function addPayment(idChapter, price){
        let model = {
            'IdChapter': idChapter,
            'Price': price
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
                    timer: 1500
                }).then(result => {
                    if(result){
                        window.location.replace(`${trepcamp.base.url}Intranet/sumary`);
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
