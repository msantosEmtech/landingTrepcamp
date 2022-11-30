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
        items: 1
        });

        $(document).on("click", ".owl-item>div", function () {
            // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
            var $speed = 300; // in ms
            $owl.trigger("to.owl.carousel", [$(this).data("position"), $speed]);
        });

}());


const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
    },    
});

$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});