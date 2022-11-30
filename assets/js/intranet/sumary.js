(function(){
    "use strict";

    trepcamp = trepcamp ? trepcamp : {};

    $('#start_challenges').click(function() {
        $.post(`${trepcamp.base.url}Intranet/AddUserChallenge`,
            {
                'id_estatus':2

            }, "JSON").done(function(result){
                window.location.replace(`${trepcamp.base.url}Intranet/sumary`);
            });
    });

}());





