(function ($) {
    trepcamp = trepcamp ? trepcamp : {};

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
            $("#AC").fadeOut(250);
            $("#video-up").fadeIn(1350);
        }/* else{
            $('#btnSend').attr({
                'hidden':true
            });
        } */
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
    
    $('#btnSend').click(function () {

        const serialize = (formElement) => {
            let data = new FormData(formElement);
            let obj = {};
            for (let [key, value] of data) {
                obj[key] = value;
            }
            return obj;
        }
        let total = 0;
        let form = serialize(document.getElementById("formAC"));
        console.log(form);

        Object.values(form).forEach(val => {
            total += parseFloat(val);
        });
        console.log(total);

        let fileVideo = typeof $("#ac-vid")[0] === 'undefined' ? "" : $("#ac-vid")[0].files[0];
        let resultado_ac = total;

        if (typeof fileVideo === "undefined") {
            fileVideo = "";
        }
        var parametros = new FormData();

        parametros.append("file_video", fileVideo);
        parametros.append("AssessmentResult", resultado_ac);

        $.ajax({
            data: parametros,
            url: trepcamp.base.url + 'ChallengeTiktok/AddAssessment',
            type: "POST",
            contentType: false,
            processData: false,
            success: function (result) {
                let datos = JSON.parse(result);
                if (datos) {
                    $("#modalCongratulations").modal('show');
                } else {
                    $("#modalErrorTiktok").modal('show');
                }
            }
        });

       
        
    });

    $('#launch-file').click(function() {
        $('#ac-vid').click();
    });

    $('#ac-vid').change(function () {
        $('#launch-file').text("File selected successfully");
    });

    $("#btnGoChallenge").on("click", function(){
        $("#modalCongratulations").modal('hide');

        window.location.replace(`${trepcamp.base.url}Intranet/sumary`);
    });

    $("#btnGoChallenge2").on("click", function(){
        $("#modalErrorTiktok").modal('hide');

        window.location.replace(`${trepcamp.base.url}ChallengeTiktok`);
    });



})(window.jQuery); 

