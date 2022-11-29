<section class="secction pt-5 pb-5 seccion1-sumary">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mb-5">
                <h2 style="color: #00A8FF;">Welcome, <?= $nombre_user ?>!</h2>
                <p><img style="margin-right: 5px;" src="<?= base_url('assets/img/check-chapter.svg') ?>">Chapter: <?= $chapter_name ?></p>
                <p><img style="margin-right: 5px;" src="<?= base_url('assets/img/Calendar.svg') ?>">Date: <?= $chapter_date_start ?> to <?= $chapter_date_ends ?></p>
                <?php if ($estado_user >1 && $estado_user <= 4) {?>
                    <p class="mb-2 mt-5">You are currently taking the Challenge</p>
                    
                    <div class="d-flex justify-content-between">
                        <div class="progress">                         
                            <div class="progress-bar" style="width:<?=$chapter_progreso?>%;"><!-- width es el porcentaje de recorrido -->                            
                                <img  src="<?= base_url('assets/img/flag.svg')?>" alt="">                          
                            </div>
                        </div>
                        <p style="margin-right: 13px;"><?=$chapter_progreso_text?>%</p>
                    </div>               
                <?php }else if ($estado_user == 5 && $tiktok_challenge == 1 && $ac_challenge == 0) {// falta ac challenge?>
                    <p class="mb-2 mt-5">You completed TikTok Viral Challenge</p>
                    
                    <div class="d-flex justify-content-between">
                        <div class="progress">                         
                            <div class="progress-bar" style="width:<?=$chapter_progreso?>%;"><!-- width es el porcentaje de recorrido -->                            
                                <img  src="<?= base_url('assets/img/flag.svg')?>" alt="">                          
                            </div>
                        </div>
                        <p style="margin-right: 13px;"><?=$chapter_progreso_text?>%</p>
                    </div>
                    
                <?php }else if ($estado_user == 5 && $ac_challenge == 1 && $tiktok_challenge == 0) {//falta tiktok challenge?>
                    <p class="mb-2 mt-5">You completed Competencies Challenge</p>
                    
                    <div class="d-flex justify-content-between">
                        <div class="progress">                         
                            <div class="progress-bar" style="width:<?=$chapter_progreso?>%;"><!-- width es el porcentaje de recorrido -->                            
                                <img  src="<?= base_url('assets/img/flag.svg')?>" alt="">                          
                            </div>
                        </div>
                        <p style="margin-right: 13px;"><?=$chapter_progreso_text?>%</p>
                    </div>
                
                <?php }else if ($estado_user == 6 && $all_challenges == 1) {?>
                    <p class="mb-2 mt-5">You completed the "Growth Mindset" Edition Challenge</p>
                    
                    <div class="d-flex justify-content-between">
                        <div class="progress">                         
                            <div class="progress-bar" style="width:<?=$chapter_progreso?>%;"><!-- width es el porcentaje de recorrido -->                            
                                <img  src="<?= base_url('assets/img/flag.svg')?>" alt="">                          
                            </div>
                        </div>
                        <p style="margin-right: 13px;"><?=$chapter_progreso_text?>%</p>
                    </div>
                    
                <?php }?>
            </div>
            <div class="col-md-6">
                <div class="px-3">
                    <div class="row text-center" style="background-color: #00A8FF;border-radius: 8px;">
                    <?php if ($estado_user == 1) {?>
                        <h4 style="color:#FFF;" class="px-5 pt-5">Are you ready to start our TrepChallenge?</h4>
                        <p style="color:#FFF; font-size:14px;" class="px-5 mb-4">Get ready to prove your communication and personal competencies to win an all-paid unique experience to transform your mindset at New York City.</p>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-primary btnAmarilloStories"><b>Start Challenge</b></button>
                        </div>
                    <?php }else if ($estado_user > 1 && $estado_user <=2) {?>
                        <h4 style="color:#FFF;" class="px-5 pt-5">You are currently taking the Challenge</h4>
                        <p style="color:#FFF; font-size:14px;" class="px-5 mb-4">Please move on to step 1 "Participation Fee"</p>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="<?= base_url('Intranet/payFee')?>" class="btn btn-primary btnAmarilloMeet"><b>Next Step</b></a>
                        </div>
                    <?php }else if ($estado_user >= 3 && $estado_user <= 4 && $all_challenges == 0) {//escoges un reto independiente de ?>
                        <h4 style="color:#FFF;" class="px-5 pt-5">You're currently participating in our TrepChallenge</h4>
                        <p style="color:#FFF; font-size:14px;" class="px-5 mb-4">Please move on to step 2 "Challenge"</p>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="<?= base_url('Intranet/takeChallenge')?>" class="btn btn-primary btnAmarilloMeet">Next Step</a>
                        </div>
                    <?php }else if ($estado_user >= 5 && $all_challenges == 0) {//escoges un reto independiente de ?>
                        <h4 style="color:#FFF;" class="px-5 pt-5">You're currently participating in our TrepChallenge</h4>
                        <p style="color:#FFF; font-size:14px;" class="px-5 mb-4">Double your chances of winning to make your effort count! Remember you can complete our Entrepreneurial 
                        Competencies Assessment/TikTok Viral Challenge to add another participation entry and increase your chances of becoming a winner.</p>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="<?= base_url('Intranet/takeChallenge')?>" class="btn btn-primary btnAmarilloMeet">Extra Shot</a>
                        </div>
                    <?php }else if ($estado_user == 6 && $all_challenges == 1) {//esta seria la vista de closed challeng ?>
                        <h4 style="color:#FFF;" class="px-5 pt-5">Congratulations! You covered all our Challenge steps</h4>
                        <p style="color:#FFF; font-size:14px;" class="px-5 mb-4">Be patient, our jury will be reviewing all participant's 
                        applications until December 16, 2022. You're at the final stretch of joining our Experience Program at New York City, yet remember 
                        to check constantly your registered email, where we'll notify if you won our TrepChallenge.</p>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-primary btnAmarillo"><b>See Last Chapters Winners</b></button>
                        </div>
                    <?php }?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="secction pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mt-5">Review our Challenge steps below:</h4>
                <div class="mt-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item accordion-custom">
                            <h2 class="accordion-header item-custom" id="flush-headingOne">
                                <button class="accordion-button accordion-button-reto collapsed button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <img class="me-3" src="<?= base_url('assets/img/payfee.svg') ?>" alt="">1. Fulfill the "Participation Fee"
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="row">
                                    <!-- <div class="col-md-2 col-sm-2 col-2">
                                        <div class="accordion-body">
                                            <img src="<?= base_url('assets/img/barra-puntos.png') ?>" style="margin-left: 5px;">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 col-12 holder-barra">
                                        <div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Registration</b>
                                            </div>
                                            <p style="padding-left: 36px;">Access to a platform where you'll take the participation steps, and follow-up to your status.
                                                Get for free our ebook "Dream Builders" by Fernando Sepulveda that will help you start your entrepreneurial journey.</p>
                                        </div>
                                        <div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Participation fee</b>
                                            </div>
                                            <p style="padding-left: 36px;">Fulfill a $50 USD participation fee to start the Challenge. Participation fee grants you access to the chance of winning an all-paid Experience Program at New York City valued at $5,000 USD.
                                                Also, receive access to our Entrepreneurial Toolkit that will help you develop your competencies and have more chances to win the prize.</p>
                                        </div>
                                        <div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Challenge</b>
                                            </div>
                                            <p style="padding-left: 36px;">You can win in two possible ways:</p>
                                            <p style="padding-left: 50px;">1.Competencies Challenge: We relate in unique ways to competencies we develop through life. Prove your capacities around 7 entrepreneurial competencies by taking an Assessment. The most voted candidates from our Entrepreneurial Jury will receive the prize.</p>
                                            <p style="padding-left: 50px;">2.Viral Challenge: The way we communicate stories have a huge influence in developing entrepreneurship. Prove your communication capacities by creating, uploading and sharing a TikTok, following the theme guidelines. The most viral TikToks will receive the prize.</p>
                                        </div>
                                        <div class="accordion-body">
                                            <!-- <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Participation fee</b>
                                            </div> -->
                                            <p style="padding-left: 36px;">You can participate through one or both ways to increase your chances of winning.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="accordion-item accordion-custom">
                            <h2 class="accordion-header item-custom" id="flush-headingTwo">
                                <button class="accordion-button accordion-button-reto collapsed button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <img class="me-3" src="<?= base_url('assets/img/tiktok.svg') ?>" alt="" srcset=""> 2. Take the "Challenge"
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 holder-barra">
                                        <div class="accordion-body">
                                            <p style="padding-left: 21px;">You can win in two possible ways:</p>
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Competencies Challenge:</b>
                                            </div>
                                            <p style="padding-left: 36px;">We relate in unique ways to competencies we develop through life. Prove your capacities around 7 entrepreneurial competencies
                                                by taking an Assessment. The most voted candidates from our Entrepreneurial Jury will receive the prize.</p>
                                        </div>
                                        <div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">TikTok Viral Challenge:</b>
                                            </div>
                                            <p style="padding-left: 36px;">The way we communicate stories have a huge influence in developing entrepreneurship. Prove your communication capacities
                                                by creating, uploading and sharing a TikTok, following the theme guidelines. The most viral TikToks will receive the prize.</p>
                                            <p style="padding-left: 21px;"><i><b>You can participate through one or both ways to increase your chances of winning.</b></i></p>
                                        </div>
                                        <!--<div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Announcement:</b>
                                            </div>
                                            <p style="padding-left: 36px;">Find out if you're one of our winners. In case you're one of them, we'll contact you via email. Also, you can review the full list of winners and participants here. *For more information, review our Terms and Conditions.</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item accordion-custom">
                            <h2 class="accordion-header item-custom" id="flush-headingThree">
                                <button class="accordion-button accordion-button-reto collapsed button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <img class="me-3" src="<?= base_url('assets/img/medalla.svg') ?>" alt="" srcset="">3. Review the "Winners"
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 holder-barra">
                                        <div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">OnBoarding:</b>
                                            </div>
                                            <p style="padding-left: 36px;">We'll get in contact to review the logistics information, and give you all the details you need to know prior to the program.</p>
                                        </div>
                                        <div class="accordion-body">
                                            <div class="row dot-titulo">
                                                <img style="width: 11%;" src="<?= base_url('assets/img/bullet.svg') ?>" alt=""><b style="width: 81%; font-size:20px;">Travel:</b>
                                            </div>
                                            <p style="padding-left: 36px;">Save the best for last, it's time to travel to New York City to put in practice the entrepreneurial competencies in our Experience Program.</p>
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
</section>

<section class="secction pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="px-3">
                    <div class="row text-center libro-secction">
                        <div class="mb-2 mt-5">
                            <img src="<?=base_url('assets/img/libro-descarga.png')?>">
                        </div>
                        <h5 class="mb-3">Download "Dreambuilders" eBook by Fernando Sepulveda</h5>        
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-primary btnAmarilloStories">Download eBook</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="secction pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="color-section">
                <div class="col-md-12 text-center">
                    <div class="row mt-4 mb-2">
                        <h2 style="color: #FFF;">New winners</h2>
                    </div>
                    <div class="row mb-3">
                        <p style="color: #FFF;font-size: 18px;">every two weeks</p>
                    </div>
                    <div class="row">
                        <p><b style="color: #FFD041;font-size: 20px;">Congratulations!</b></p>
                    </div>
                    <div class="row">
                        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item-custom carousel-item active">

                                    <div class="carousel-caption text-center">
                                        <div>
                                            <img src="<?= base_url('assets/img/user1.png') ?>" class="bd-placeholder-img">
                                        </div>
                                        <p class="mt-5 mb-0" style="font-size: 20px; color:#FFF;">Mahatma Gandhi</p>
                                        <p style="font-size: 14px;">Gold Mine Edition</p>
                                        <div class="row justify-content-center">
                                            <a class="btn btn-primary btnAmarilloStories" href="#">meet our winners</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item-custom carousel-item">
                                    <div class="carousel-caption text-center">
                                        <div>
                                            <img src="<?= base_url('assets/img/user2.png') ?>" class="bd-placeholder-img">
                                        </div>
                                        <p class="mt-5 mb-0" style="font-size: 20px; color:#FFF;">Mahatma Gandhi 2</p>
                                        <p style="font-size: 14px;">Gold Mine Edition 2</p>
                                        <div class="row justify-content-center">
                                            <a class="btn btn-primary btnAmarilloStories" href="#">meet our winners</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item-custom carousel-item">

                                    <div class="carousel-caption text-center">
                                        <div>
                                            <img src="<?= base_url('assets/img/user3.png') ?>" class="bd-placeholder-img">
                                        </div>
                                        <p class="mt-5 mb-0" style="font-size: 20px; color:#FFF;">Mahatma Gandhi 3</p>
                                        <p style="font-size: 14px;">Gold Mine Edition 3</p>
                                        <div class="row justify-content-center">
                                            <a class="btn btn-primary btnAmarilloStories" href="#">meet our winners</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <div class="col-md-12">
                    <div class="row text-center">
                        <p class="" style="color: #6C20ED; font-size:18px">Got questions?</p>
                        <h2>We have answers</h2>
                    </div>
                    <div class="row">
                        <div class="mt-5">
                            <div class="accordion accordion-flush" id="acordeonPreguntas">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heder1">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta1" aria-expanded="false" aria-controls="pregunta1">
                                            <img src="" class="me-2"> 1. How many winners will the TrepChallenge have?
                                        </button>
                                    </h2>
                                    <div id="pregunta1" class="accordion-collapse collapse" aria-labelledby="flush-heder1" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">
                                            The TrepChallenge is designed to have 100 winners, although the final recount number will depend on the total number of participants joining each 
                                            Chapter. From every 100 participants, we'll select 1 winner. Yes, you read that correctly, never before had it been so easy to experience New York 
                                            as an entrepreneur. Your time has come!
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header2">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta2" aria-expanded="false" aria-controls="pregunta2">
                                            <img src="" class="me-2"> 2. What are my chances of winning the TrepChallenge?
                                        </button>
                                    </h2>
                                    <div id="pregunta2" class="accordion-collapse collapse" aria-labelledby="flush-header2" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header3">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta3" aria-expanded="false" aria-controls="pregunta3">
                                            <img src="" class="me-2"> 3. If I don't win one Chapter, may I try the TrepChallenge again?
                                        </button>
                                    </h2>
                                    <div id="pregunta3" class="accordion-collapse collapse" aria-labelledby="flush-header3" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heder4">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta4" aria-expanded="false" aria-controls="pregunta4">
                                            <img src="" class="me-2"> 4. What is the size of each Experience Program?
                                        </button>
                                    </h2>
                                    <div id="pregunta4" class="accordion-collapse collapse" aria-labelledby="flush-heder4" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header5">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta5" aria-expanded="false" aria-controls="pregunta5">
                                            <img src="" class="me-2"> 5. What is the cost of the program?
                                        </button>
                                    </h2>
                                    <div id="pregunta5" class="accordion-collapse collapse" aria-labelledby="flush-header5" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header6">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta6" aria-expanded="false" aria-controls="pregunta6">
                                            <img src="" class="me-2"> 6. How may I enter the program?
                                        </button>
                                    </h2>
                                    <div id="pregunta6" class="accordion-collapse collapse" aria-labelledby="flush-header6" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heder7">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta7" aria-expanded="false" aria-controls="pregunta7">
                                            <img src="" class="me-2"> 7. How many sessions does the program contains?
                                        </button>
                                    </h2>
                                    <div id="pregunta7" class="accordion-collapse collapse" aria-labelledby="flush-heder7" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header8">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta8" aria-expanded="false" aria-controls="pregunta8">
                                            <img src="" class="me-2"> 8. Where will these sessions be held?
                                        </button>
                                    </h2>
                                    <div id="pregunta8" class="accordion-collapse collapse" aria-labelledby="flush-header8" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header9">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta9" aria-expanded="false" aria-controls="pregunta9">
                                            <img src="" class="me-2"> 9. What is the schedule of the program?
                                        </button>
                                    </h2>
                                    <div id="pregunta9" class="accordion-collapse collapse" aria-labelledby="flush-header9" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heder10">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta10" aria-expanded="false" aria-controls="pregunta10">
                                            <img src="" class="me-2"> 10. Is there a minimum age requirement?
                                        </button>
                                    </h2>
                                    <div id="pregunta10" class="accordion-collapse collapse" aria-labelledby="flush-heder10" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header11">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta11" aria-expanded="false" aria-controls="pregunta11">
                                            <img src="" class="me-2"> 11. I have experience with entrepreneurship, is this the right program for me?
                                        </button>
                                    </h2>
                                    <div id="pregunta11" class="accordion-collapse collapse" aria-labelledby="flush-header11" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header12">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta12" aria-expanded="false" aria-controls="pregunta12">
                                            <img src="" class="me-2"> 12. I don't have experience with entrepreneurship, is this the right program for me?
                                        </button>
                                    </h2>
                                    <div id="pregunta12" class="accordion-collapse collapse" aria-labelledby="flush-header12" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heder13">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta13" aria-expanded="false" aria-controls="pregunta13">
                                            <img src="" class="me-2"> 13. What exactly would I achieve if I enroll in the Experience Program?
                                        </button>
                                    </h2>
                                    <div id="pregunta13" class="accordion-collapse collapse" aria-labelledby="flush-heder13" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-header14">
                                        <button class="accordion-button accordion-button-faqs collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta14" aria-expanded="false" aria-controls="pregunta14">
                                            <img src="" class="me-2"> 14. Where can I read the Challenge Terms and Conditions?
                                        </button>
                                    </h2>
                                    <div id="pregunta14" class="accordion-collapse collapse" aria-labelledby="flush-header14" data-bs-parent="#acordeonPreguntas">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->