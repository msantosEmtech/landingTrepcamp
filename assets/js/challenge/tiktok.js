(function(){
    "use strict";

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


$(document).ready(function() {
    $('.formInput input').change(function() {
        $('.formInput p').text("File selected successfully");
    });
});