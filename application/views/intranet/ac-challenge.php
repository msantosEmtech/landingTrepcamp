<section class="secction pt-5 seccion1-sumary">
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-6 mb-3">
                <h3 class="mb-3">You can win in two possible waya:</h3>
                <p>You can choose, take just one or both Challenges. Given that there's at least one prize per
                    challenge, participating in both increases your chances of winning.
                </p>
            </div>
            <?php if ($estado_user >= 3 && $all_challenges == 0) { ?>
                <!-- estado 4 sin retos completados -->
                <div class="col-md-6">
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/folder_special.png') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Competencies Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your capacities around 7 entrepreneurial competencies by taking our Assessment.
                                The most voted candidates from our Entrepreneurial Jury will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="<?= base_url('Intranet/assessment') ?>" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/tiktok2.png') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Tiktok Viral Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your communication capacities by creating, uploading and sharing a TikTok,
                                following the theme guidelines. The most viral TikToks will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="#" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($estado_user == 5 && $tiktok_challenge == 1 && $ac_challenge == 0) { ?>
                <!-- estado 5 y tiktok completado -->
                <div class="col-md-6">
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/folder_special.png') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Competencies Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your capacities around 7 entrepreneurial competencies by taking our Assessment.
                                The most voted candidates from our Entrepreneurial Jury will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="<?= base_url('Intranet/assessment') ?>" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/tiktok2.png') ?>" alt=""> <img src="<?= base_url('assets/img/green-check.svg') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Tiktok Viral Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your communication capacities by creating, uploading and sharing a TikTok,
                                following the theme guidelines. The most viral TikToks will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="#" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($estado_user == 5 && $tiktok_challenge == 0 && $ac_challenge == 1) { ?>
                <!-- estado 5 y ac completado -->
                <div class="col-md-6">
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/folder_special.png') ?>" alt=""><img src="<?= base_url('assets/img/green-check.svg') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Competencies Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your capacities around 7 entrepreneurial competencies by taking our Assessment.
                                The most voted candidates from our Entrepreneurial Jury will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="<?= base_url('Intranet/sumary') ?>" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/tiktok2.png') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Tiktok Viral Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your communication capacities by creating, uploading and sharing a TikTok,
                                following the theme guidelines. The most viral TikToks will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="#" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($estado_user == 6 && $all_challenges == 1) { ?>
                <!-- estado 6 y retos completado -->
                <div class="col-md-6">
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/folder_special.png') ?>" alt=""><img src="<?= base_url('assets/img/green-check.svg') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Competencies Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your capacities around 7 entrepreneurial competencies by taking our Assessment.
                                The most voted candidates from our Entrepreneurial Jury will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="<?= base_url('Intranet/sumary') ?>" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="row px-3 mb-5" style="background-color: #00A8FF;border-radius: 8px;">
                            <p class="mt-4 d-flex justify-content-between"><img src="<?= base_url('assets/img/tiktok2.png') ?>" alt=""><img src="<?= base_url('assets/img/green-check.svg') ?>" alt=""></p>
                            <h4 style="color:#FFF;" class="mb-4">Tiktok Viral Challenge</h4>
                            <p style="color:#FFF; font-size:14px;" class="mb-4">Prove your communication capacities by creating, uploading and sharing a TikTok,
                                following the theme guidelines. The most viral TikToks will receive the prize.
                            </p>
                            <div class="d-flex justify-content-start mb-4">
                                <a href="#" class="btn btn-primary btnAmarilloJoin">Participate</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>