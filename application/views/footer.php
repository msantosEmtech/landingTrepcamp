<!-- FOOTER -->
<div class="container">
    <footer class="container py-5 my-5">

        <div class="col mb-3">
            <div class="container">
                <a href="/" class="row justify-content-center mb-5 link-dark text-decoration-none">
                    <img src="<?= base_url('assets/img/logoTrepcamp.png') ?>" style="width:45%">
                </a>

                <div class="row text-center">
                    <p class="text-muted">TrepCamp is an entrepreneurial academy focused on transformation, mindset, and practice that prepares aspiring entrepreneurs to launch real projects.</p>
                </div>
            </div>
        </div>

        <div class="col mt-5 mb-4 text-center">
            <div class="container">
                <div class="row">
                    <a href="#" class="col nav-link p-0 text-muted">Home</a>
                    <a href="#" class="col nav-link p-0 text-muted">Our story</a>
                    <a href="#" class="col nav-link p-0 text-muted">Experience</a>
                    <a href="#" class="col nav-link p-0 text-muted">Simulator</a>
                </div>
                <div class="row">
                    <a href="#" class="col nav-link p-0 text-muted">About us</a>
                    <a href="#" class="col nav-link p-0 text-muted">Blog</a>
                    <a href="#" class="col nav-link p-0 text-muted">My account</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 offset-md-2 mb-3">
            <div class="container">
                <div class="row text-center">
                    <p>
                        <img src="<?= base_url('assets/img/pin-blanco.svg') ?>" alt="">
                    </p>
                    <p class="mb-0">28 Liberty Street </p>
                    <p>Silicon Valley, California. EE. UU.</p>
                </div>
                <div class="row text-center">
                    <p><img src="<?= base_url('assets/img/telefono.svg') ?>" alt=""><a style="color:#999;margin-left:7px">4563635635</a></p>
                </div>
                <div class="row text-center">
                    <p><img src="<?= base_url('assets/img/correo.svg') ?>" alt=""><a style="margin-left:7px">info@trepcamp.com</a></p>
                </div>
                <div class="row text-center mt-3">
                    <ul class="nav justify-content-center">
                        <li class="ms-4">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/tiktok.png') ?>"></a>
                        </li>
                        <li class="ms-4">
                            <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/instagram.png') ?>"></a>
                        </li>
                        <li class="ms-4">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/facebook.png') ?>"></a>
                        </li>
                        <li class="ms-4">
                            <a href="https://www.linkedin.com/school/emtechinstitute/"><img src="<?= base_url('assets/img/linkedin.png') ?>"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="row">
        <div class="col col div-img-footer">
            <p>© Copyright 2022 TrepCamp.org. All rights reserved.</p>
        </div>
        <ul class="nav col-md-6 justify-content-center list-unstyled d-flex">
            <li class="ms-3"><a style="color: #00A8FF;" href="#">Privacy policy</a></li>
            <li class="ms-3"><a style="color: #00A8FF;" href="#">Terms of use</a></li>
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
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        responsive: [{
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
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
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
</script>
</body>

</html>