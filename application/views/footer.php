<!-- FOOTER -->
    <div class="container">
        <footer class="container row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col-md-4 mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="<?=base_url('assets/img/logoTrepcamp.png')?>" width="100">
                </a>
                <p class="text-muted">TrepCamp is a Training Academy  in entrepreneurial creativity, leadership, and innovation, with the main purpose of preparing aspiring entrepreneurs to acquire the knowledge and strengthen their competencies as they embark on their entrepreneurial journey.</p>
            </div>

            <div class="col-md-3 mb-3 text-center">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Our story</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Experience</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Simulator</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">My account</a></li>
                </ul>
            </div>

            <div class="col-md-3 offset-md-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><i class="fas fa-map-marker-alt"></i> 28 Liberty Street Silicon Valley, California. EE. UU.</li>
                    <li class="nav-item mb-2"><i class="fas fa-phone-alt"></i> 4563635635</li>
                    <li class="nav-item mb-2"><i class="fas fa-envelope"></i> info@trepcamp.com</li>
                    
                </ul>
                <ul class="nav col-md-8 justify-content-start list-unstyled d-flex">
                    <li class="ms-2">
                        <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/tiktok.png') ?>"></a>
                    </li>
                    <li class="ms-2">
                        <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/instagram.png') ?>"></a>
                    </li> 
                    <li class="ms-2">
                        <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/facebook.png') ?>"></a>
                    </li>
                    <li class="ms-2">
                        <a href="https://www.linkedin.com/school/emtechinstitute/"><img src="<?= base_url('assets/img/linkedin.png') ?>"></a>
                    </li>
                </ul>
            </div>
        </footer>
        <div class="row">
                <div class="col-lg-6 col-md-2 div-img-footer" style="padding-left: 2rem;">
                    <p>© Copyright 2022 TrepCamp.org. All rights reserved.</p>
                </div>
                <ul class="nav col-md-6 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#">Privacy policy</a></li>
                    <li class="ms-3"><a class="text-muted" href="#">Terms of use</a></li>
                </ul>
            </div>
    </div>   
</main>
    <script src="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery/js/query-3.6.0.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.min.js') ?>"></script>
        <script>
            new WOW().init();
        </script>
        <script>
            $('.one-time').slick({
                dots: false,
                arrows:false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay:true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
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
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 2,
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

            $('.sliderInstagram').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [
                    {
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

        </script>
    </body>
</html>