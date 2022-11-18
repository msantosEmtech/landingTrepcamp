    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
    $('.counter').addClass('animated fadeInDownBig');

//   SLIDERS
    $('.one-time').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.sliderTestimonial').slick({
        dots: false,
        arrows:false,
        infinite: true,
        speed: 200,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.sliderNumeros').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    var feed = new Instafeed({
        accessToken: 'IGQVJWMnNEeXdJdEREenFHVExIc2NqRHFfLTlMRUZAITm1salZAVTzBDVEx2dl8tclhnZAjcxc0JndTM1X0ZAMMUNIdmtCNGNrZAkp6d0toWHNoMVFxTk9IVWlvUllXZAkxxOE0yZA1B5QTlxN01weWxlRVVlaAZDZD',
        limit:3,
        template:'<div class="item"><a href="{{link}}"><img title="{{caption}}" src="{{image}}" class="imgSliderIns shadow-1-strong rounded mt-5 mb-4" /></a></div>',
        after: function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        nav:false,
                        loop:true
                    },
                    600:{
                        items:2,
                        nav:false,
                        loop:true
                    },
                    1000:{
                        items:3,
                        nav:false,
                        loop:true
                    }
                }
            });
        }
    });

    feed.run();