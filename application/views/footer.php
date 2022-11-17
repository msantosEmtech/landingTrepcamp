<!-- FOOTER -->
<div class="container">
    <footer class="container py-5 my-5">

        <div class="col mb-3">
            <div class="container">
                <a href="/" class="row justify-content-center mb-5 link-dark text-decoration-none">
<<<<<<< HEAD
                    <img src="<?= base_url('assets/img/logoTrepcamp.png') ?>" style="width:45%">
=======
                    <img src="<?= base_url('assets/img/logoTrepcamp.svg') ?>" style="width:45%">
>>>>>>> ramaMario2
                </a>

                <div class="row text-center">
                    <p class="text-muted">TrepCamp is an entrepreneurial academy focused on transformation, mindset, and practice that prepares aspiring entrepreneurs to launch real projects.</p>
                </div>
            </div>
        </div>

        <div class="col mt-5 mb-4 text-center">
            <div class="container">
                <div class="row">
<<<<<<< HEAD
                    <a href="#" class="col nav-link p-0 text-muted">Home</a>
                    <a href="#" class="col nav-link p-0 text-muted">Our story</a>
                    <a href="#" class="col nav-link p-0 text-muted">Experience</a>
                    <a href="#" class="col nav-link p-0 text-muted">Simulator</a>
                </div>
                <div class="row">
                    <a href="#" class="col nav-link p-0 text-muted">About us</a>
                    <a href="#" class="col nav-link p-0 text-muted">Blog</a>
                    <a href="#" class="col nav-link p-0 text-muted">My account</a>
=======
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Home</a>
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Our story</a>
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Experience</a>
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Simulator</a>
                </div>
                <div class="row">
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">About us</a>
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Blog</a>
                    <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">My account</a>
>>>>>>> ramaMario2
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
        <div class="col col div-img-footer text-center">
            <p style="font-size:14px">© Copyright 2022 TrepCamp.org. All rights reserved.</p>
        </div>
        <ul class="nav col-md-6 justify-content-center list-unstyled d-flex">
            <li class="ms-3"><a style="color: #00A8FF;font-size:14px" href="#">Privacy policy</a></li>
            <li class="ms-3"><a style="color: #00A8FF;font-size:14px" href="#">Terms of use</a></li>
        </ul>
    </div>
</div>
</main>
<script src="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') ?>"></script>
<!-- <script src="<?= base_url('assets/plugins/jquery/js/query-3.6.0.min.js') ?>"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/js/instafeed.min.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script>
        new WOW().init();
        
        var trepcamp = {};

        trepcamp.base = {
            url : '<?= base_url(); ?>'
        };

        var feed = new Instafeed({
            accessToken: 'IGQVJYSURaZAHdwVkNTZAW9ZAajlhVnIwVm1TcmlCQWZAiYmktUnhZALTJ0TUhoQ3I1LWZAQWXc3eTdRem9rMFduQkEzREwyU0pYMzR0c3RMUUN2TDlHd2RXeGpmYXNiN216RFAyYnhBZAktIMmN0Qm5FRkZAQXwZDZD',
            limit:3,
            template:'<div class="item"><a href="{{link}}"><img title="{{caption}}" src="{{image}}" class="imgSliderIns shadow-1-strong rounded mt-5 mb-4" /></a></div>',
            after: function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:1,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:2,
                            nav:false
                        },
                        600:{
                            items:2,
                            nav:false
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

</script>
<?php if(isset($scriptVista)){ echo $scriptVista; } ?>
</body>

</html>