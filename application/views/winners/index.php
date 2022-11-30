   <style>
::-webkit-scrollbar {
    display: none;
}
   </style>

   <div class="secction-banner backgroundLineas" style="background-color: #FFF;">
       <div class="container">
           <div class="row py-5">
               <div class="col-md-6 col-xs-12 my-auto wow zoomIn text-left pt-4">
                   <img class="trepChallenge-logo" src="<?=base_url('assets/img/winners/TrepChallenge.svg') ?>">
               </div>
               <div class="col-md-6 col-xs-12 pt-4">
                   <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                       <h1 style="color: #333333; font-weight: 700;">Meet our winners</h1>
                       <h4 style="color:#393939;font-family:'opensans-regular'">One video speaks more than a thousand
                           words. Watch our participants reactions to our prize announcement.</h4>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="secction pb-5">
       <div class="container">
           <div class="row text-center">
               <div class="col-lg-6 col-md-12 col-xs-12 text-center my-auto mx-auto">
                   <div class="thumb wow fadeInUp" data-wow-delay="0.5s">
                       <video class="video-trailer" controls poster="<?=base_url('assets/img/video-experiece.png') ?>"
                           style="cursor: pointer;width:100%">
                           <source src="<?=base_url('assets/videos/ADS_S4S.mp4') ?>" type="video/mp4">
                       </video>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="section" style="background-color: #FFF;">
       <div class="container">
           <div class="row">
               <div class="col-12 text-center">

               </div>
           </div>
       </div>
   </div>
   <div class="section" style="background-color: #FFF;">
       <div class="container">
           <div class="row py-3">
               <div class="col-12 text-center">
                   <h4>Chapter 0</h4>
               </div>
               <div class="col-lg-12 text-center my-auto py-3">
                   <div class="menu-h" id="menu-h" style="text-align:center;padding: 0rem 0rem 0.5rem">
                       <nav>
                           <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-size: 1rem;">
                               <li class="nav-item" role="presentation">
                                   <button class="nav-link active" style="padding-left:1px" id="winners-tab"
                                       data-bs-toggle="tab" data-bs-target="#winners" type="button" role="tab"
                                       aria-controls="winners" aria-selected="true">Winners</button>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="participants-tab" data-bs-toggle="tab"
                                       data-bs-target="#participants" type="button" role="tab"
                                       aria-controls="participants" aria-selected="false">All participants</button>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="dynamics-tab" data-bs-toggle="tab"
                                       data-bs-target="#dynamics" type="button" role="tab" aria-controls="dynamics"
                                       aria-selected="false">Dynamics</button>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="competitions-tab" data-bs-toggle="tab"
                                       data-bs-target="#competitions" type="button" role="tab"
                                       aria-controls="competitions" aria-selected="false">Competition’s jury</button>
                               </li>
                           </ul>
                       </nav>
                   </div>
               </div>
           </div>
           <div class="tab-content" id="myTabContent">
               <!-- Winners card -->
               <div class="tab-pane fade show active row py-2 p-3 pb-4 profileCard" id="winners" role="tabpanel"
                   aria-labelledby="winners-tab">
                   <div class="" style="padding:1rem 0rem">
                       <div class="row text-center">
                           <!-- Slider main container -->
                           <div class="swiper">
                               <div class="swiper-wrapper">
                                   <div class="swiper-slide">
                                       <img class="pb-3" src="<?=base_url('assets/img/winner1.png') ?>"
                                           style="width: 8rem !important">
                                       <h5>Alvaro Bautista Ramírez</h5>
                                       <p style="color:#999999">Profile description</p>
                                       <div class="px-5">
                                           <p style="font-size: 0.875rem;">

                                           </p>
                                       </div>
                                       <a href="https://www.instagram.com/reel/ClSlSnaDPlk/?igshid=NDk5N2NlZjQ%3D"
                                           target="_blank"><img class="mb-3"
                                               src="<?=base_url('assets/img/instagram.png') ?>"
                                               style="width: 32px;"></a>
                                   </div>
                               </div>
                               <!-- pagination -->
                               <div class="swiper-pagination"></div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- All participants card -->
               <div class="tab-pane fade show row py-2 p-3 pb-4 profileCard" id="participants" role="tabpanel"
                   aria-labelledby="participants-tab">
                   <div class="row text-center" style="--bs-gutter-x:0rem">
                       <style>
                       .owl-carousel .owl-dots.disabled,
                       .owl-carousel {
                           display: block;
                       }
                       </style>
                       <div class="row mb-5" style="--bs-gutter-x:0rem">
                           <div id="owl-tiktok" class="owl-carousel owl-theme">
                               <div class="item">
                                   <img src="<?=base_url('assets/img/fotoTikTok.png') ?>" style="width: 100%;">
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Username:</p>
                                   <p style="color:#333333">222</p>
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Views:</p>
                                   <p style="color:#333333">222</p>
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Link:</p>
                                   <p style="color:#333333">222</p>
                               </div>
                               <div class="item">
                                   <img src="<?=base_url('assets/img/fotoTikTok.png') ?>" style="width: 100%;">
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Username:</p>
                                   <p style="color:#333333">222</p>
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Views:</p>
                                   <p style="color:#333333">222</p>
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Link:</p>
                                   <p style="color:#333333">222</p>
                               </div>
                               <div class="item">
                                   <img src="<?=base_url('assets/img/fotoTikTok.png') ?>" style="width: 100%;">
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Username:</p>
                                   <p style="color:#333333">222</p>
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Views:</p>
                                   <p style="color:#333333">222</p>
                                   <p style="color:#6A6A6A;margin-bottom:0rem">Link:</p>
                                   <p style="color:#333333">222</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Dynamics card -->
               <div class="tab-pane fade show row py-2 p-3 pb-4 profileCard" id="dynamics" role="tabpanel"
                   aria-labelledby="dynamics-tab">
                   <div class="" style="padding:1rem 0rem">
                       <div class="">
                           <div class="row text-center">
                               <div class="col-12">
                                   <p style="color:#6A6A6A">Chapter edition:</p>
                                   <hr>
                                   <h6 style="font-family:'opensans-regular';">Chapter 0</h6>
                                   <p class="pt-3" style="color:#999999">Description:</p>
                                   <hr>
                                   <p class="pb-3">The program Experience is focused on those people who want to improve
                                       their skills and abilities before starting their entrepreneurial project. They
                                       seek to get out of their comfort zone, discover a new ecosystem and discover the
                                       best version of themselves.
                                       <br><br>
                                       During the experience, the participants will have an intranet in which they can
                                       unlock different levels and badges as they develop and complete each
                                       entrepreneurial competition.
                                       <br><br>
                                       This program on-site contains different dynamics that comprise the development of
                                       the seven entrepreneurial competencies:
                                       <br><br>
                                       <b class="text-bold">Activities</b> where participants will practice their
                                       creativity,
                                       communication,
                                       teamwork, etc. <br>
                                       <b class="text-bold">Challenges</b> where the main objective is that the
                                       participant
                                       can
                                       get out of their comfort zone to complete and execute the challenge successfully.
                                       <b class="text-bold">Speakers</b> will share their experiences and perspectives
                                       of experts in
                                       certain
                                       areas. <br>
                                       <b class="text-bold">Experiences</b> where participants will have the opportunity
                                       to meet,
                                       visit
                                       and/or tour different facilities in the city.
                                   </p>
                                   <hr>
                                   <p style="color:#6A6A6A;margin-bottom: 0.25rem;"><img
                                           src="<?=base_url('assets/img/winners/date.svg') ?>" alt=""> Date:</p>
                                   <p>Monday, November 14th, 2022 - Sunday, November 27th, 2022</p>
                                   <p style="color:#6A6A6A;margin-bottom: 0.25rem;"><img
                                           src="<?=base_url('assets/img/winners/participants.svg') ?>" alt=""> Total
                                       participants:</p>
                                   <p>1,500</p>
                                   <p style="color:#6A6A6A;margin-bottom: 0.25rem;"><img
                                           src="<?=base_url('assets/img/winners/winners.svg') ?>" alt=""> Total winners:
                                   </p>
                                   <p>1</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Competitions card -->
               <div class="tab-pane fade show row py-2 p-3 pb-4 profileCard" id="competitions" role="tabpanel"
                   aria-labelledby="competitions-tab">
                   <div class="" style="padding:1rem 0rem">
                       <div class="row text-center">

                           <!-- Slider main container -->
                           <div class="swiper">
                               <div class="swiper-wrapper">
                                   <div class="swiper-slide">
                                       <img class="pb-3" src="<?=base_url('assets/img/winners/Cynthia-Hellen.png') ?>"
                                           style="width: 120px;">
                                       <h5>Cynthia Hellen</h5>
                                       <p style="color:#999999">Profile description</p>
                                       <div class="px-5">
                                           <p style="font-size: 0.875rem;">
                                               Cynthia Hellen is a Peruvian-American social entrepreneur who is a
                                               globally recognized writer-producer-director and design technologist,
                                               creating innovative solutions for worldwide problems.<br>
                                               She is the founder and CEO of New York based design lab RYLEN, which
                                               creates sustainable products, services and experiences for both people
                                               and our planet,
                                               by improving life and building communities while also protecting the
                                               environment.
                                           </p>
                                       </div>
                                       <a href="" target="_blank"><img class="mb-3"
                                               src="<?=base_url('assets/img/linkedin.svg') ?>" style="width: 32px;"></a>
                                   </div>
                                   <div class="swiper-slide">
                                       <img class="pb-3"
                                           src="<?=base_url('assets/img/winners/Fernando-Rodriguez.png') ?>"
                                           style="width: 120px;">
                                       <h5>Fernando Rodriguez</h5>
                                       <p style="color:#999999">Profile description</p>
                                       <div class="px-4">
                                           <p style="font-size: 0.875rem;">
                                               Moonshot thinker, entrepreneur, technologist, and serial investor.
                                               <br><br>
                                               Expert in innovation and cultural and digital transformation, creating
                                               and developing technology-based business solutions.
                                               Co-founder of MetaVenture ai builder, a company with four artificial
                                               intelligence-based SaaS.
                                               <br><br>
                                               Founder of 15K Angels | Smart Seed Capital for startups.
                                               <br><br>
                                               Mentor and trainer of startups at IE Business School, TrepCamp Mexico,
                                               Santander X 100, Santander Tomorrow challenge, Citizen Bootcamp, Conecta
                                               Iberoamerica, and AticcoLab.
                                           </p>
                                       </div>
                                       <a href="" target="_blank"><img class="mb-4"
                                               src="<?=base_url('assets/img/linkedin.svg') ?>" style="width: 32px;"></a>
                                   </div>
                                   <div class="swiper-slide">
                                       <img class="pb-3" src="<?=base_url('assets/img/winners/Justine-Guenver.png') ?>"
                                           style="width: 120px;">
                                       <h5>Justine Guenver</h5>
                                       <p style="color:#999999">Profile description</p>
                                       <div class="px-5">
                                           <p style="font-size: 0.875rem;">
                                               Justine was part of the TrepCamp's early days. She was the coordinator of
                                               California's programs, then became the Global Coordinator for two
                                               years.<br>
                                               She has worked for more than five years in innovation and
                                               entrepreneurship, leading Impulsa Global consulting and financing team
                                               and European development.<br>
                                               She is launching her startup in France in the wellness tourism sector.
                                           </p>
                                       </div>
                                       <a href="" target="_blank"><img class="mb-3"
                                               src="<?=base_url('assets/img/linkedin.svg') ?>" style="width: 32px;"></a>
                                   </div>
                               </div>
                               <!-- pagination -->
                               <div class="swiper-pagination"></div>
                           </div>
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
                   <h2 style="color: #fff;">Join the TrepChallenge and become one of our winners!</h2>
                   <p class="pt-5"><a class="btn btn-lg btnAmarilloWinners" href="<?=base_url('login') ?>"><b>Join
                               Challenge</b></a></p>
               </div>
           </div>
       </div>
   </div>



   <style>
.owl-item>div {
    cursor: pointer;
    margin: 6% 8%;
    transition: margin 0.4s ease;
}

.owl-item.center>div {
    cursor: auto;
    margin: 0;
}

.owl-item:not(.center)>div:hover {
    opacity: .75;
}
   </style>