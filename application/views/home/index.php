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
                        <div><img src="<?= base_url('assets/img/logo4yfn.svg') ?>" width="200"></div>
                        <div><img src="<?= base_url('assets/img/logoSantander.svg') ?>" width="200"></div>
                        <div><img src="<?= base_url('assets/img/logoBerkeley.svg') ?>" width="200"></div>
                        <div><img src="<?= base_url('assets/img/logoNewyork.svg') ?>" width="200"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secction pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 pb-3 wow zoomIn">
                    <h2 style="color: #333333;">Transform your life doing something meaningful</h2>
                    <p style="color:#999999; font-size:18px;padding-top: 1rem;">Watch a sneak peak of our<br> experience.</p>
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

    <!-- <div class="section pt-5 pb-5" style="background-color: rgba(0, 168, 255, 0.05);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center mb-5">
                    <div class="row justify-content-center mb-4">
                        <h2 class="titulo-sobrepuesto">WE ARE TURNING 10</h2>
                        <img class="img-detras" src="<?= base_url('assets/img/10.png') ?>" style="width:125px;height:85px;">
                    </div>
                    <div class="row justify-content-center">
                        <p class="mb-4" style="font-size: 18px;">Transforming entrepreneurs since 2013.</p>
                    </div>
                    <div class="row justify-content-center">
                        <a class="btn btn-lg btn-primary btnAmarillo" href="#">Our story</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
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
                </div>
            </div>
        </div>
    </div> -->
    <div class="section pt-5 pb-5" style="background-color: rgba(0, 168, 255, 0.05);">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-4 text-center my-auto py-3">
                    <div class="row justify-content-center mb-4">
                        <h2 class="titulo-sobrepuesto">WE ARE TURNING 10</h2>
                        <img class="img-detras" src="<?= base_url('assets/img/10.png') ?>" style="width:125px;height:85px;">
                    </div>
                    <div class="row justify-content-center">
                        <p class="mb-4" style="font-size: 20px;color: #393939;font-weight: 600;">Transforming entrepreneurs since 2013.</p>
                    </div>
                    <div class="row justify-content-center">
                        <a class="btn btn-primary btnAmarilloMeet" style="background-color: #FFD041;" href="#">Our story</a>
                    </div>
                </div>
                <div class="col-lg-8 text-center py-3">
                    <div class="row">
                        <div class="sliderNumeros">
                            <div class="col-md-4 divApplicantsSlider" style="border-right: 1px solid #6A6A6A;">
                                <img src="<?= base_url('assets/img/iconoAplicantes.png') ?>" style="margin: auto;">
                                <h4 style="color: #474747;">+<span class="counter" style="color: #474747;font-weight: 700;font-size: 24px;font-family: 'opensans-bold';">10,000</span></h4>
                                <p>applicants each year</p>
                            </div>
                            <div class="col-md-4 divSuccessfulSlider" style="border-right: 1px solid #6A6A6A;">
                                <img src="<?= base_url('assets/img/iconSchool.png') ?>" style="margin: auto;">
                                <h4 style="color: #474747;">+<span class="counter" style="color: #474747;font-weight: 700;font-size: 24px;font-family: 'opensans-bold';">5,000</span></h4>
                                <p>successful graduates</p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/iconLocation.png') ?>" style="margin: auto;">
                                <h4 style="color: #474747;">+<span class="counter" style="color: #474747;font-weight: 700;font-size: 24px;font-family: 'opensans-bold';">50 </span>programs</h4>
                                <h4 style="color: #474747;">+<span class="counter" style="color: #474747;font-weight: 700;font-size: 24px;font-family: 'opensans-bold';">8 </span>cities</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="section pt-5 pb-3">
        <div class="container" >
            <div class="row text-center pb-5">
                <div class="col-lg-12">
                    <h2 style="color: #393939;">Join TrepCamp</h2>
                    <h4 style="color: #393939;">and become the next:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sliderTestimonial text-center">
                        <div>
                            <div class="card card-testimonial" style="position: relative;z-index: 2;margin-top:3rem;border:none;">
                                <div class="card-body texto-testimonios">
                                    <div class="container">
                                        <div class="row fotos-testimonios col-7 offset-1">
                                            <div class="col">
                                                <div class="row flex-column align-items-center">
                                                    <img src="<?= base_url('assets/img/user1.png') ?>" style="width: 100%;">
                                                    <img src="<?= base_url('assets/img/logoUser.svg') ?>" style="width: 60%;">
                                                </div>                                        
                                            </div>
                                            
                                            <div class="col">
                                                <div class="row flex-column align-items-center">
                                                    <img src="<?= base_url('assets/img/user2.png') ?>" style="width: 100%;">  
                                                    <img src="<?= base_url('assets/img/logoUser1.svg') ?>" style="width: 80%;"> 
                                                </div>                                        
                                            </div>                                                          
                                        </div>
                                        <h4>Newest Mexican Unicorn</h4>
                                        <div class="row pb-3">
                                            <div class="col-lg-12">
                                                <img src="<?= base_url('assets/img/logoNowports.png') ?>" style="width: 40%;margin:auto;">
                                            </div>
                                        </div>
                                        <h6 style="color: #474747;text-transform: uppercase;">Alfonso De los Rios & Maximiliano Casal</h6>
                                        <p style="color: #474747;">Two talented software engineers, first matched at TrepCamp at Silicon Valley 2017. Co-founded Nowports, a digital freight forwarder which gained a $1.1 billion dollars value, becoming the newest Mexico's Unicorn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card card-testimonial2" style="position: relative;z-index: 2;margin-top:3rem;border:none;">
                                <div class="card-body texto-testimonios">
                                    <div class="container">
                                        <div class="row fotos-testimonios col-7 offset-1">
                                            <div class="col">
                                                <div class="row flex-column align-items-center">
                                                    <img src="<?= base_url('assets/img/user3.png') ?>" style="width: 55%;">
                                                    <img src="<?= base_url('assets/img/logoLaSelle.svg') ?>" style="width: 40%;padding-top: 1rem;">
                                                </div>                                        
                                            </div>                                                         
                                        </div>
                                        <h4 style="padding-top: 1rem;">¡Successfull investment round!</h4>
                                        <div class="row pb-3">
                                            <div class="col-lg-12">
                                                <img src="<?= base_url('assets/img/logoUser3.png') ?>" style="width: 30%;margin:auto;">
                                            </div>
                                        </div>
                                        <h6 style="color: #474747;text-transform: uppercase;">TAMARA CHAYO</h6>
                                        <p style="color: #474747;">Participant at TrepCamp 2020, during the same year founded MEDU, developing sustainable medical protection equipment. During 2022 closed an investment round for 4 million dollars to expand towards the United States.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="section pt-5 pb-5" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 style="color: #393939;">Join TrepCamp</h2>
                    <h4 style="color: #393939;">and become the next:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sliderTestimonial text-center sliderDesk">
                        <div>
                            <div class="card card-testimonial" style="position: relative;z-index: 2;margin-top:3rem;border:none;">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row flex-column align-items-center">
                                                    <img src="<?= base_url('assets/img/testimonio1.png') ?>" style="width: 260px;margin-top: -3rem;">  
                                                </div>
                                            </div>                                                          
                                        </div>
                                        <div class="row">
                                            <h4 style="color: #333333;">Newest Mexican Unicorn</h4>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-lg-12">
                                                <img src="<?= base_url('assets/img/nowports.svg') ?>" style="width: 100px;margin:auto;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 testimonio">
                                                <h6 style="color: #474747;text-transform: uppercase;">Alfonso De los Rios & Maximiliano Casal</h6>
                                                <p style="color: #474747;">Two talented software engineers, 
                                                first matched at TrepCamp at Silicon Valley 2017. Co-founded Nowports, 
                                                a digital freight forwarder which gained a $1.1 billion dollars value, 
                                                becoming the newest Mexico's Unicorn.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card card-testimonial2" style="position: relative;z-index: 2;margin-top:3rem;border:none;">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row flex-column align-items-center">
                                                    <img src="<?= base_url('assets/img/testimonio2.png') ?>" style="width: 121.5px;margin-top: -3rem;">  
                                                </div>
                                            </div>                                                          
                                        </div>
                                        <div class="row">
                                            <h4 style="color: #333333;">Successfull investment round!</h4>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-lg-12">
                                                <img src="<?= base_url('assets/img/medu.svg') ?>" style="width: 94px;margin:auto;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 testimonio">
                                                <h6 style="color: #474747;text-transform: uppercase;">TAMARA CHAYO</h6>
                                                <p style="color: #474747;">Participant at TrepCamp 2020, during the same year founded MEDU, 
                                                developing sustainable medical protection equipment. 
                                                During 2022 closed an investment round for 4 million dollars 
                                                to expand towards the United States.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5">
        <div class="container section-meet">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="color: #333333;">Meet all of our Success Stories</h3>
                    <a class="btn btn-primary btnAmarilloMeet" href="#" style="margin: auto;">Success stories</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-5 pb-5" style="background-color: rgba(71, 71, 71, 0.05);">
        <div class="container">

            <div class="row mb-4">
                <div class="row text-center mb-5">
                    <h2 class="mb-4" style="color: #333333;">
                        Two paths towards entrepreneurial success.
                    </h2>

                    <h3 style="color: #393939;font-weight: 600;font-family: 'opensans-regular';">
                        Choose where to <span style="font-weight: 700;">start your</span> entrepreneurial journey:
                    </h3>
                </div>

                <div class="col text-center">
                    <img class="mb-5" src="<?= base_url('assets/img/experience.svg') ?>">
                    <!-- <h2>Experience</h2> -->
                    <p style="color: #393939;font-weight: 700;">Develop your entrepreneurial skills in an immersive week in New York City</p>

                </div>
                <div class="col text-center">
                    <img class="mb-5" src="<?= base_url('assets/img/simulator.svg') ?>">
                    <!-- <h2>Simulator</h2> -->
                    <p style="color: #393939;font-weight: 700;">Build your own start-up in a three week program at Silicon Valley</p>

                </div>

            </div>


            <div class="row mb-5">
                <div class="row text-center">
                    <h5 style="color: #333333;"><b>Designed to:</b></h4>
                </div>
                <div class="col">
                    <hr>
                    <p style="color: #333333;">Connect you with your entrepreneurial higher self.</p>

                    <div class="col text-center">
                        <div class="row py-3">
                            <p style="line-height: 0px;">
                                <img src="<?= base_url('assets/img/reloj.svg') ?>" alt=""><span style="color:#999999;"> Duration:</span>
                            </p>
                            <p style="color: #333333;line-height: 0px;">
                                9 days and 8 nights
                            </p>
                        </div>
                        <div class="row py-3">
                            <p style="line-height: 0px;">
                                <img src="<?= base_url('assets/img/calendario.svg') ?>" alt=""><span style="color:#999999;"> Date:</span> 
                            </p>
                            <p style="color: #333333;line-height: 0px;">
                                June 2023
                            </p>
                        </div>
                        <div class="row py-3">
                            <p style="line-height: 0px;">
                                <img src="<?= base_url('assets/img/pin.svg') ?>" alt=""><span style="color:#999999;"> Place:</span>
                            </p>
                            <p style="color: #333333;line-height: 0px;">
                                New York
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <hr>
                    <p style="color: #333333;">Help you go from an idea to a pitch in one summer.</p>
                    <div class="col text-center">
                        <div class="row py-3">
                            <p style="line-height: 0px;">
                                <img src="<?= base_url('assets/img/reloj.svg') ?>" alt=""><span style="color:#999999;"> Duration:</span>
                            </p>
                            <p style="color: #333333;line-height: 0px;">
                                3 weeks
                            </p>
                        </div>
                        <div class="row py-3">
                            <p style="line-height: 0px;">
                                <img src="<?= base_url('assets/img/calendario.svg') ?>" alt=""><span style="color:#999999;"> Date:</span> 
                            </p>
                            <p style="color: #333333;line-height: 0px;">
                                July 2023
                            </p>
                        </div>
                        <div class="row py-3">
                            <p style="line-height: 0px;">
                                <img src="<?= base_url('assets/img/pin.svg') ?>" alt=""><span style="color:#999999;"> Place:</span>
                            </p>
                            <p style="color: #333333;line-height: 0px;">
                                Sillicon Valley
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-4">
                <div class="row text-center">
                    <h5 style="color: #333333;"><b>This program is for you if:</b></h5>
                </div>
                <div class="col">
                    <hr>
                    <div class="col text-center">
                        <div class="row">
                            <p>
                                <img src="<?= base_url('assets/img/circleCheck.png') ?>">
                            </p>
                            <p style="color: #333333;">You want to strengthen your entrepreneurial skills and mindset before launching your own start up.</p>
                        </div>
                        <div class="row">
                            <p>
                                <img src="<?= base_url('assets/img/circleCheck.png') ?>">
                            </p>
                            <p style="color: #333333;">You want to make significant connections that will be key for your professional development.</p>
                        </div>
                        <div class="row">
                            <p>
                                <img src="<?= base_url('assets/img/circleCheck.png') ?>">
                            </p>
                            <p style="color: #333333;">You want to get involved with international ecosystems to get out of your confort zone and discover your full potential.</p>
                        </div>
                        <div class="row mt-3">
                            <p><a class="btn btn-md btn-primary btnAmarilloBanner" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <hr>
                    <div class="col text-center">
                        <div class="row">
                            <p>
                                <img src="<?= base_url('assets/img/circleCheck.png') ?>">
                            </p>
                            <p style="color: #333333;">You want to strengthen your entrepreneurial skills and mindset before launching your own start up.</p>
                        </div>
                        <div class="row">
                            <p>
                                <img src="<?= base_url('assets/img/circleCheck.png') ?>">
                            </p>
                            <p style="color: #333333;">You want to make significant connections that will be key for your professional development</p>
                        </div>
                        <div class="row">
                            <p>
                                <img src="<?= base_url('assets/img/circleCheck.png') ?>">
                            </p>
                            <p style="color: #333333;">You want to get involved with international ecosystems to get out of your confort zone and discover your full potential.</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p><a class="btn btn-md btn-primary btnAmarilloBanner" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="card card-choose">
                        <div class="card-body pt-5 pb-5">
                            <h2>Not sure which one fits you better?</h2>
                            <p class="pt-4"><a class="btn btn-lg btn-outline-light" href="#">Choose Right</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section pt-5 pb-5 backgroundAzul" style="background-color: #33A4FE;">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-lg-12 text-center">
                    <h2 style="color: #fff;">Interested in learning more about us?</h2>
                    <p class="pt-4"><a class="btn btn-lg btn-outline-light" href="#">About us</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-5 pb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6">
                    <h3 style="color:#333333;text-align: center;">Get in touch with our<br> journey</h3>
                    <p style="color: #999999;">Be part of our Treps story. Follow TrepCamp in your favorite social media channel.</p>
                    <ul class="nav col-md-8 justify-content-center list-unstyled d-flex pt-3">
                        <li class="ms-2">
                            <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/iconInstagram.png') ?>"></a>
                        </li>    
                        <li class="ms-2">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/iconTiktok.png') ?>"></a>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-lg-6 pt-3">
                    <!-- <div class="sliderInstagram text-center">
                        <div>
                            <div class="container">
                                <div class="row">
                                    <img src="<?= base_url('assets/img/imagenInstagram1.png') ?>">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container">
                                <div class="row">
                                    <img src="<?= base_url('assets/img/imagenInstagram1.png') ?>">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container">
                                <div class="row">
                                    <img src="<?= base_url('assets/img/imagenInstagram1.png') ?>">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div id="instafeed" class="row owl-carousel owl-theme owl-loaded owl-drag"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="section pt-4 pb-4" style="background-color: rgba(0, 168, 255, 0.05);">
        <div class="container">
            <div class="row text-center">
                <div class="row mb-3">
                    <h2 class="mb-3">Receive more information</h2>
                    <p style="font-size:20px">Join our worldwide community to learn more.</p>
                </div>
                <div class="col">
                    <p class="mb-4">Fill the following form to receive more information:</p>
                    <form>
                        <div class="mb-4">
                            <input type="text" class="form-control input-redondo" id="txtName" placeholder="First Name">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control input-redondo" id="txtLastName" placeholder="Last Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control input-redondo" id="txtEmail" placeholder="Email">
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-secondary btnSend"><b>Send</b></button>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>