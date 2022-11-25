   <style> 
   ::-webkit-scrollbar {
    display: none;
}
   </style>
   
   <div class="secction-banner backgroundLineas" style="background-color: #FFF;">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 col-xs-12 my-auto wow zoomIn text-left pt-4">
                    <img class="trepChallenge-logo" src="<?= base_url('assets/img/winners/TrepChallenge.svg') ?>">
                </div>
                <div class="col-md-6 col-xs-12 pt-4">
                    <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                        <h1 style="color: #333333; font-weight: 700;">Meet our winners</h1>
                        <h4 style="color:#393939;font-family:'opensans-regular'">One video speaks more than a thousand words. Watch our participants reactions to our prize announcement.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="secction pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 text-center my-auto">
                    <div class="thumb wow fadeInUp" data-wow-delay="0.5s">
                        <video class="video-trailer" controls poster="<?= base_url('assets/img/video-experiece.png') ?>" style="cursor: pointer;width:100%">
                            <source src="<?= base_url('assets/videos/ADS_S4S.mp4') ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" style="background-color: #FFF;">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-12 text-center my-auto py-3">

                <div class="menu-h">
                <nav>
                    <ul>
                    <li><a class="active">Winners</a></li>
                    <li><a>All participants</a></li>
                    <li><a>Dynamics</a></li>
                    <li><a>Competition’s jury</a></li>
                    </ul>
                </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let nav = document.querySelectorAll('nav')

        if (nav) {
        let navLinks = document.querySelectorAll('nav a')
        let activeLink = document.querySelector('.active')
        activeLink.scrollIntoView({ behavior: "smooth", inline: "center" })
        
        navLinks.forEach( function(link) {
            link.addEventListener("click", (event) => {
            navLinks.forEach( function(link) {
                link.classList.remove('active')
            })
            link.classList.add('active')
            link.scrollIntoView({ behavior: "smooth", inline: "center" })
            })
        })
        }                
    </script>

    <div class="section pt-5 pb-5" style="background-color: #FFFFFF;">
        <div class="container">
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
  
    <div class="section pt-5 pb-5 backgroundAzul" style="background-color: #33A4FE;">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-lg-12 text-center">
                    <h2 style="color: #fff;">Join the TrepChallenge and become one of our winners!</h2>
                    <p class="pt-5"><a class="btn btn-lg btnAmarilloWinners" href="#"><b>Join Challenge</b></a></p>
                </div>
            </div>
        </div>
    </div>
