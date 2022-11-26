<!doctype html>
<html lang="es_MX">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="TrepCamp 2022">
    <meta name="generator" content="TrepCamp">
    <title>Trepcamp | <?= isset($title) ? $title : "" ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">    
    <link href="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free-5.15.4-web/css/all.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/slick-1.8.1/slick/slick-theme.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/animate/animate.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') ?>"/>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>"/>
    <?php if(isset($header)){ 
        foreach ($header as $head) {
            echo $head;
        }
    }?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
        color: rgb(255 255 255 / 90%);
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/carousel.css') ?>" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home') ?>" style="padding-left: 0.2rem;"><img src="<?=base_url('assets/img/logoTrepcamp.png')?>" width="120"></a>
      
      <div class="dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= isset($fotoPerfil) ? $fotoPerfil : base_url('assets/img/user1.svg') ?>" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav nav-pills navbar-nav ms-auto mb-2 mb-lg-0 pt-3 pb-3" >
          <li class="nav-item"><a href="<?= base_url('Intranet/sumary')?>" class="nav-link" aria-current="page"><i class="fas fa-home"></i> Summary</a></li>
          <li class="nav-item"><a href="<?= base_url('Intranet/payFee')?>" class="nav-link"><i class="fas fa-dollar-sign"></i> Participation fee</a></li>
          <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-flag"></i> Challenge</a>
              <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Competencies Challenge</a>
                  <a href="#" class="dropdown-item">TikTok Viral Challenge</a>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>