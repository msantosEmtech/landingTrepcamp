    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active tarjeta1">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="transparent" />
                </svg> -->
                <div class="container">
                    <!-- <div class="row">
                        <img src="<?= base_url('assets/img/imgTarjeta1.png') ?>" class="bd-placeholder-img">
                    </div> -->
                    <div class="carousel-caption text-start">                
                        <img src="<?= base_url('assets/img/imgTarjeta1.png') ?>" class="bd-placeholder-img" style="margin-left: -2rem;">
                        <h1>Awaken your inner Enterpreneur</h1>
                        <p>Start your entrepreneurial journey at <i style="color:#FFD041;">Silicon Valley</i></p>
                        <div class="row">
                            <a class="btn btn-primary btnAmarilloBanner" href="#">See programs</a>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <a class="btn btn-lg btn-primary btnAmarillo" href="#">See programs</a>
                    </div> -->
                </div>
            </div>
            <div class="carousel-item tarjeta2">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="transparent" />
                </svg> -->
                <div class="container">
                    <div class="carousel-caption text-start">
                        <img src="<?= base_url('assets/img/imgTarjeta2.png') ?>" class="bd-placeholder-img" style="margin-left: 4rem;">
                        <h1>Awaken your inner Enterpreneur</h1>
                        <p>Start your entrepreneurial journey at <i style="color:#FFD041;">New York</i></p>
                        <div class="row">
                            <a class="btn btn-primary btnAmarilloBanner" href="#">See programs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item tarjeta3">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="transparent" />
                </svg> -->
                <div class="container">
                    <div class="carousel-caption text-start">
                        <img src="<?= base_url('assets/img/imgTarjeta3.png') ?>" class="bd-placeholder-img" style="margin-left: 4rem;">
                        <h1>Awaken your inner Enterpreneur</h1>
                        <p>Start your entrepreneurial journey at <i style="color:#FFD041;">TrepCamp</i></p>
                        <div class="row">
                            <a class="btn btn-primary btnAmarilloBanner" href="#">See programs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item tarjeta4">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="transparent" />
                </svg> -->
                <div class="container">
                    <div class="carousel-caption text-start">
                        <img src="<?= base_url('assets/img/imgTarjeta4.png') ?>" class="bd-placeholder-img" style="margin-left: 4rem;">
                        <h1>Awaken your inner Enterpreneur</h1>
                        <p>Start your entrepreneurial journey <i style="color:#FFD041;">from Anywhere</i></p>
                        <div class="row">
                            <a class="btn btn-primary btnAmarilloBanner" href="#">See programs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 mx-auto">
                    <div class="one-time text-center">
                        <div><img src="<?= base_url('assets/img/logo4yfn.png') ?>" width="200"></div>
                        <div><img src="<?= base_url('assets/img/logoSantander.png') ?>" width="200"></div>
                        <div><img src="<?= base_url('assets/img/logoBerkeley.png') ?>" width="200"></div>
                        <div><img src="<?= base_url('assets/img/logoNewyork.png') ?>" width="200"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secction pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6">
                    <h2>Transform your life doing something meaningful</h2>
                    <p style="color:#999999; font-size:18px;">Watch a sneak peak of our experience.</p>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="thumb wow fadeInUp" data-wow-delay="0.5s">
                        <video class="video-trailer" controls poster="<?= base_url('assets/img/portadaVideo.png') ?>" style="cursor: pointer;width:100%">
                            <source src="<?= base_url('assets/videos/ADS_S4S.mp4') ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5" style="background-color: rgba(0, 168, 255, 0.05);">
        <div class="container">
            <div class="row">
                <div class="text-center" style="padding-left: 1.5rem;">
                    <div class="row">                        
                        <div class="col-lg-4 mb-5">
                            <div class="row justify-content-center mb-4">
                                <h2 class="titulo-sobrepuesto">WE ARE TURNING 10</h2>
                                <img class="img-detras" src="<?=base_url('assets/img/10.png')?>" style="width:125px;height:85px;">
                            </div>                    
                            <p class="mb-4" style="font-size: 18px;">Transforming entrepreneurs since 2013.</p>
                            <div class="row mb-4">
                                <a class="btn btn-lg btn-primary btnAmarillo" href="#">Our story</a>
                            </div>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide numeros-seccion" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p><img src="<?= base_url('assets/img/iconoAplicantes.png') ?>"></p>
                                    <h4>+10,000</h4>
                                    <p>applicants each year</p>
                                </div>
                                <div class="carousel-item">
                                    <p><img src="<?= base_url('assets/img/iconSchool.png') ?>"></p>
                                    <h4>+5,000</h4>
                                    <p>successful graduates</p>
                                </div>
                                <div class="carousel-item">
                                    <p><img src="<?= base_url('assets/img/iconLocation.png') ?>"></p>
                                    <h4>+50 programs</h4>
                                    <h4>+8 cities</h4>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- <div class="col-lg-8"> -->
                            <!-- <div class="row">
                                <div class="col-lg-4">
                                    <p><img src="<?//= base_url('assets/img/iconoAplicantes.png') ?>" width="30"></p>
                                    <h4>+10,000</h4>
                                    <p>applicants each year</p>
                                </div>
                                <div class="col-lg-4">
                                    <p><img src="<?//= base_url('assets/img/iconSchool.png') ?>" width="30"></p>
                                    <h4>+5,000</h4>
                                    <p>successful graduates</p>
                                </div>
                                <div class="col-lg-4">
                                    <p><img src="<?//= base_url('assets/img/iconLocation.png') ?>" width="30"></p>
                                    <h4>+50 programs</h4>
                                    <h4>+8 cities</h4>
                                </div>
                            </div> -->
                            <!-- <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>                                
                                    </div>

                                    <div class="carousel-item active">
                                        <p><img src="<?//= base_url('assets/img/iconoAplicantes.png') ?>" width="30"></p>
                                        <h4>+10,000</h4>
                                        <p>applicants each year</p>
                                    </div>

                                    <div class="carousel-item">
                                        <p><img src="<?//= base_url('assets/img/iconSchool.png') ?>" width="30"></p>
                                        <h4>+5,000</h4>
                                        <p>successful graduates</p>
                                    </div>

                                    <div class="carousel-item">
                                        <p><img src="<?//= base_url('assets/img/iconLocation.png') ?>" width="30"></p>
                                        <h4>+50 programs</h4>
                                        <h4>+8 cities</h4>
                                    </div>
                                </div>
                        
                            </div> -->

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row text-center pb-5">
                <div class="col-lg-12">
                    <h2>Join TrepCamp</h2>
                    <h4>and become the next:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sliderTestimonial text-center"><!-- sliderTestimonial -->
                        <div>
                            <div class="card card-testimonial">

                                <div class="row fotos-testimonios">
                                    <div class="col">
                                        <div class="row flex-column align-items-center">
                                            <img src="<?= base_url('assets/img/user1.png') ?>" style="width: 100%;">
                                            <img src="<?= base_url('assets/img/logoUser1.png') ?>" style="width: 50%;">
                                        </div>                                        
                                    </div>
                                    
                                    <div class="col">
                                        <div class="row flex-column align-items-center">
                                            <img src="<?= base_url('assets/img/user2.png') ?>" style="width: 100%;">  
                                            <img src="<?= base_url('assets/img/logoUser2.png') ?>" style="width: 50%;"> 
                                        </div>                                        
                                    </div>                                                          
                                </div>
                                <div class="card-body texto-testimonios">
                                    <h5 class="card-title">Newest Mexican Unicorn</h5>
                                    <p class="card-text">Alfonso De los Rios & Maximiliano Casal</p>
                                    <p class="card-text">Two talented software engineers, first matched at TrepCamp at Silicon Valley 2017. Co-founded Nowports, a digital freight forwarder which gained a $1.1 billion dollars value, becoming the newest Mexico's Unicorn.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card card-testimonial">
                                <div class="row fotos-testimonios">
                                    <div class="col"> 
                                        <div class="row flex-column align-items-center">
                                            <img src="<?= base_url('assets/img/user3.png') ?>" style="width: 100%;">
                                            <img src="<?= base_url('assets/img/logoUser3.png') ?>" style="width: 50%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body texto-testimonios">
                                    <h5 class="card-title">¡Successfull investment round!</h5>                                    
                                    <p class="card-text">TAMARA CHAYO</p>
                                    <p class="card-text">Participant at TrepCamp 2020, during the same year founded MEDU, developing sustainable medical protection equipment. During 2022 closed an investment round for 4 million dollars to expand towards the United States.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 text-center">
                    <h3>Meet all of our Success Stories</h3>
                    <p><a class="btn btn-lg btn-primary" href="#">See all</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/logoTrepcamp.png') ?>">
                    <h2>Experience</h2>
                    <p>Develop your entrepreneurial skills in an immersive week in New York City</p>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/logoTrepcamp.png') ?>">
                    <h2>Simulator</h2>
                    <p>Build your own start-up in a three week program at Silicon Valley</p>
                </div>
                <div class="row">
                    <p>Designed to:</p>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Connect you with your entrepreneurial higher self.</h3>
                    <p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><i class="fas fa-clock"></i> Duration: 9 days and 8 nights</li>
                        <li class="nav-item mb-2"><i class="far fa-calendar"></i> Date: June 2023</li>
                        <li class="nav-item mb-2"><i class="fas fa-map-marker-alt"></i> Place: New York</li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3>Help you go from an idea to a pitch in one summer.</h3>
                    <p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><i class="fas fa-clock"></i> Duration: 3 weeks</li>
                        <li class="nav-item mb-2"><i class="far fa-calendar"></i> Date: July 2023</li>
                        <li class="nav-item mb-2"><i class="fas fa-map-marker-alt"></i> Place: Sillicon Valley</li>
                    </ul>
                    </p>
                </div>
                <div class="row">
                    <p>This program is for you if:</p>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav flex-column pb-3">
                        <li class="nav-item mb-2"><img src="<?= base_url('assets/img/circleCheck.png') ?>"> You want to strengthen your entrepreneurial skills and mindset before launching your own start up.</li>
                        <li class="nav-item mb-2"><img src="<?= base_url('assets/img/circleCheck.png') ?>"> You want to make significant connections that will be key for your professional development.</li>
                        <li class="nav-item mb-2"><img src="<?= base_url('assets/img/circleCheck.png') ?>"> You want to get involved with international ecosystems to get out of your confort zone and discover your full potential.</li>
                    </ul>
                    <div class="row">
                        <p><a class="btn btn-md btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav flex-column pb-3">
                        <li class="nav-item mb-2"><img src="<?= base_url('assets/img/circleCheck.png') ?>"> You want to strengthen your entrepreneurial skills and mindset before launching your own start up.</li>
                        <li class="nav-item mb-2"><img src="<?= base_url('assets/img/circleCheck.png') ?>"> You want to make significant connections that will be key for your professional development.</li>
                        <li class="nav-item mb-2"><img src="<?= base_url('assets/img/circleCheck.png') ?>"> You want to get involved with international ecosystems to get out of your confort zone and discover your full potential.</li>
                    </ul>
                    <div class="row">
                        <p><a class="btn btn-md btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5" style="background-color: #33A4FE;">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 style="color: #fff;">Interested in learning more about us?</h2>
                        <p><a class="btn btn-lg btn-outline-light" href="#">About us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="one-time text-center">
                        <div><img src="<?= base_url('assets/img/logo4yfn.png') ?>" width="50"></div>
                        <div><img src="<?= base_url('assets/img/logoSantander.png') ?>" width="50"></div>
                        <div><img src="<?= base_url('assets/img/logoBerkeley.png') ?>" width="50"></div>
                        <div><img src="<?= base_url('assets/img/logoNewyork.png') ?>" width="50"></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h2>Get in touch with our journey</h2>
                    <p>Be part of our Treps story. Follow TrepCamp in your favorite social media channel.</p>
                    <ul class="nav col-md-8 justify-content-start list-unstyled d-flex">
                        <li class="ms-2">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/iconFacebookAzul.png') ?>"></a>
                        </li>
                        <li class="ms-2">
                            <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/iconGoogleAzul.png') ?>"></a>
                        </li>
                        <li class="ms-2">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/iconTwitterAzul.png') ?>"></a>
                        </li>
                        <li class="ms-2">
                            <a href="https://www.linkedin.com/school/emtechinstitute/"><img src="<?= base_url('assets/img/iconShareAzul.png') ?>"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>Receive more information</h2>
                    <p>Join our worldwide community to learn more.</p>
                </div>
                <div class="col-lg-5">
                    <h3>Fill the following form to receive more information:</h3>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="txtName" placeholder="First Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="txtLastName" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="txtEmail" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-secondary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>