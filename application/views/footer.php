<div class="section pt-5 pb-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="row py-2 pt-4 centerMobile">
                <div class="col-lg-6">
                    <a href="/" class=" align-items-center mb-3 link-dark text-decoration-none">
                        <img src="<?=base_url('assets/img/logoTrepcamp.png')?>" width="200">
                    </a>
                    <p class="text-muted pt-3 pb-3" style="color: #6A6A6A;">TrepCamp is an entrepreneurial academy focused on transformation, 
                        mindset, and practice that prepares aspiring entrepreneurs to launch real projects.
                    </p>

                    <div class="container">
                        <div class="row">
                            <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Home</a>
                            <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Our story</a>
                            <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Experience</a>
                        </div>
                        <div class="row">
                            <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">About us</a>
                            <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">Blog</a>
                            <a href="#" class="col nav-link p-0 text-muted" style="color:#000 !important">My account</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 offset-lg-3 columna-info">
                    <div class="container">
                        <div class="row text-center">
                            <p>
                                <img src="<?= base_url('assets/img/pin-blanco.svg') ?>" alt="">
                            </p>
                            <p class="mb-0">28 Liberty Street </p>
                            <p>Silicon Valley, California. EE. UU.</p>
                        </div>
                        <div class="row text-center">
                            <p><img src="<?= base_url('assets/img/telefono.svg') ?>" alt=""><a style="color:#999;margin-left:7px">+521 5578325423</a></p>
                        </div>
                        <div class="row text-center">
                            <p><img src="<?= base_url('assets/img/correo.svg') ?>" alt=""><a style="margin-left:7px">info@trepcamp.org</a></p>
                        </div>
                        <div class="row text-center mt-3">
                            <ul class="nav justify-content-center">
                                <li class="ms-4">
                                    <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/tiktok.png') ?>"></a>
                                </li>
                                <li class="ms-4">
                                    <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/instagram.png') ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- FOOTER -->
    
    <footer class="container" style="background-color:#ffffff;">
        <div class="row">
            <div class="col-lg-6 div-copyright">
                    <p style="margin-top: 0.5rem;color: #333333;">© Copyright 2022 TrepCamp.org. All rights reserved.</p>
            </div>
        </div>
    </footer>
</main>
<script src="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') ?>"></script>
<!-- <script src="<?= base_url('assets/plugins/jquery/js/query-3.6.0.min.js') ?>"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
    <!-- <script src="<?= base_url('assets/js/instafeed.min.js') ?>"></script> -->
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://js.stripe.com/v3/"></script>


<script>
        new WOW().init();
        
        var trepcamp = {};

        trepcamp.base = {
            url : '<?= base_url(); ?>'
        };
</script>
<?php if (isset($scriptDatePicker)){ echo $scriptDatePicker; }  ?>
<?php if (isset($scriptAlert)){ echo $scriptAlert; }  ?>
<?php if(isset($scriptMoment)){echo $scriptMoment;} ?>
<?php if(isset($scriptStripe)){ echo $scriptStripe; } ?>
<?php if(isset($scriptVista)){ echo $scriptVista; } ?>
<?php if(isset($scriptLogin)){ echo $scriptLogin; } ?>
<?php if(isset($scriptPreguntas)){ echo $scriptPreguntas;}?>

</body>

<script>
const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

$('.center').slick({
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

</html>