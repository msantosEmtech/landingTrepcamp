(function(){
    "use strict";

    trepcamp = trepcamp ? trepcamp : {};

    trepcamp.tiktok = trepcamp.tiktok ? trepcamp.tiktok : {};

    trepcamp.tiktok.elements = {
        $flexCheckChecked: $("#flexCheckChecked"),
        $btnSaveChallenge: $("#btnSaveChallenge"),
        $formTiktok: $("#formTiktok"),
        $videoTiktok: $("#videoTiktok"),
        $tiktok_username: $("#tiktok_username"),
        $tiktok_link: $("#tiktok_link")
    };

    trepcamp.tiktok.uris = {
        addTiktok: `${trepcamp.base.url}ChallengeTiktok/AddTiktok`
    };

    const elements = trepcamp.tiktok.elements;
    const uris = trepcamp.tiktok.uris;

    elements.$flexCheckChecked.on("click", function(){verifyChecked(this)});

    function verifyChecked($check){
        elements.$btnSaveChallenge.attr("disabled", $check.checked ? false : true);
    };

    elements.$formTiktok.on("submit", function(e){
        e.preventDefault();
        let fileVideo = typeof $("#videoTiktok")[0] === 'undefined' ? "" :$("#videoTiktok")[0].files[0];
        let username = elements.$tiktok_username.val();
        let linktiktok = elements.$tiktok_link.val();

        if(typeof fileVideo === "undefined"){
            fileVideo = "";
        }
        if(typeof username === "undefined"){
            username = "";
        }
        if(typeof linktiktok === "undefined"){
            linktiktok = "";
        }

        var parametros = new FormData();
    
        parametros.append("file_video",fileVideo);
        parametros.append("UserNameTiktok",username);
        parametros.append("UrlTiktok",linktiktok);

        $.ajax({
            data: parametros,
            url:uris.addTiktok,
            type:"POST",
            contentType:false,
            processData:false,
            success: function(result){
                let datos = JSON.parse(result);
                if(datos){
                    $("#modalCongratulations").modal('show');
                }else{
                    $("#modalErrorTiktok").modal('show');
                }
            }
        });

    });

    $("#btnGoChallenge").on("click", function(){
        $("#modalCongratulations").modal('hide');

        window.location.replace(`${trepcamp.base.url}Intranet/sumary`);
    });

    $("#btnGoChallenge2").on("click", function(){
        $("#modalErrorTiktok").modal('hide');

        window.location.replace(`${trepcamp.base.url}ChallengeTiktok`);
    });

    var $owl = $("#owl-tiktok");

        $owl.children().each(function (index) {
        $(this).attr("data-position", index); // NB: .attr() instead of .data()
        });

        $owl.owlCarousel({
        center: true,
        dots:true,
        loop: true,
        items: 3
        });

        $(document).on("click", ".owl-item>div", function () {
            // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
            var $speed = 300; // in ms
            $owl.trigger("to.owl.carousel", [$(this).data("position"), $speed]);
        });

}());