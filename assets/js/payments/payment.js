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
            alert('complete pay');
        }else{
            //modal error
            alert('error');
        }

    });
    /* }, 500); */

    
}
