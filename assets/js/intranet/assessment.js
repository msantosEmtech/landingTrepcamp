(function ($) {
    const fields = document.querySelectorAll(".step");
    let num_preguntas = 0;
    for (let i = 0; i < fields.length; i++) {
        num_preguntas += 1;
    }

    let ask_current = 1;

    $('#ask' + ask_current).attr({
        'hidden': false
    });


   
    $('#num_preguntas').text(num_preguntas);


    const showNext = (id) => {
        let prevQ = id - 1;
        let nextQ = id;
        $('#ask' + prevQ).attr({
            'hidden': true
        });
        $('#ask' + nextQ).attr({
            'hidden': false
        });
    }

    const showPrev = (id) => {
        let prevQ = id;
        let nextQ = id + 1;
        $('#ask' + prevQ).attr({
            'hidden': false
        });
        $('#ask' + nextQ).attr({
            'hidden': true
        });
    }


    $('#btnContinuar').click(function () {
        if (ask_current == num_preguntas) {
            $('#btnSend').attr({
                'hidden':false
            });
        }else{
            $('#btnSend').attr({
                'hidden':true
            });
        }
        if (ask_current >= 1 && ask_current < num_preguntas) {
            if ($('.radio' + ask_current + ':checked').length > 0) {
                ask_current++;
                showNext(ask_current);
                $('#contador').text(ask_current);
            } else {
                alert('Please check one option');
            }
        }
    })

    $('#btnAtras').click(function () {
        if (ask_current != 1) {
            ask_current--;
            showPrev(ask_current);
            $('#contador').text(ask_current);
            $('#btnSend').attr({
                'hidden':true
            });
        }
    })


    $('#start_AC').click(function() {
        $("#instrucctions").fadeOut(250);
        $("#AC").fadeIn(1350);
    });
    
    /* const start_AC = ()=>{
        $("#instrucctions").fadeOut(250);
        $("#AC").fadeIn(1350);
    } */

})(window.jQuery); 

