   <style> 
   ::-webkit-scrollbar {
    display: none;
    }
   </style>
  
   

    <div class="section pt-5 backgroundLineasProfile" style="background-color: #f2fbff;">
        <div class="container pxDesk">
            <div class="row py-3 my-auto">
                <div class="col-3 my-auto imgDesk">
                    <img src="<?= base_url('assets/img/profile/defaultProfile.png') ?>" style="width:80px;height:80px">
                </div>
                <div class="col-9 my-auto profileName">
                    <h5 style="color:#333333"><?= $info_profile['user_name'] ?></h5>
                    <h5 style="color:#6A6A6A"><?= $info_profile['user_last_name'] ?></h5>
                </div>                
            </div>
            <div class="row py-3">
                <div class="col-lg-12 my-auto py-2">
                    <div style="text-align:left">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="historic-tab" data-bs-toggle="tab" data-bs-target="#historic" type="button" role="tab" aria-controls="historic" aria-selected="false">Historic</button>
                            </li>
                        </ul>                    
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <!-- Profile card -->
                <div class="tab-pane fade show active row py-2 p-3 pb-4 profileCard" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card" style="padding:1rem 0rem">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Profile information</h5>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <form class="profileForm">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" value="<?= $info_profile['user_name'] ?>" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="last_name" value="<?= $info_profile['user_last_name'] ?>" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Birthdate</label>
                                        <input type="text" class="form-control" id="birthdate" value="<?= $info_profile['user_birthday'] ?>" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type="text" class="form-control" id="gender" value="<?= $info_profile['user_gender_description'] ?>" disabled>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="country_code" class="form-label">Country code</label>
                                        <input type="text" class="form-control" id="country_code" disabled>
                                    </div> -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="<?= $info_profile['user_phone'] ?>" disabled>
                                    </div>                                                                                                                                                                                   
                                </form>                                                                                                                            
                            </div>
                        </div>
                    </div>               
                </div>   
                
                <!-- Historic card -->
                <div class="tab-pane fade show row py-2 p-3 pb-4  profileCard" id="historic" role="tabpanel" aria-labelledby="historic-tab">
                    <?php foreach ($historicChapter as $historic) { 
                            $filtro = $historic['user_chapter_id'];
                            $var = array_filter($historicDetail, function($e) use($filtro){
                                // return $e['user_challenge_detail_id_user_chapter'] == 1;
                                return $e['user_challenge_detail_id_user_chapter'] == $filtro;
                            });
                        ?>

                        <div class="card" style="padding:1rem 0rem">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7">
                                        <?php if($historic['row_number_id'] == 1){ ?>
                                        <h5>First enrollment</h5>
                                        <?php }elseif ($historic['row_number_id'] == 2) { ?>
                                            <h5>Second enrollment</h5>
                                        <?php }elseif ($historic['row_number_id'] == 3) { ?>
                                            <h5>Third enrollment</h5>
                                        <?php }elseif ($historic['row_number_id'] == 4) { ?>
                                            <h5>Fourth enrollment</h5>
                                        <?php }elseif ($historic['row_number_id'] == 5) { ?>
                                            <h5>Fifth enrollment</h5>
                                        <?php }elseif ($historic['row_number_id'] == 6) { ?>
                                            <h5>Sixth enrollment</h5>
                                        <?php }elseif ($historic['row_number_id'] == 7) { ?>
                                            <h5>Seventh enrollment</h5>
                                        <?php } ?>
                                    </div>
                                    <div class="col-5 text-center">
                                        <p style="border: 1px solid #FFD041;border-radius: 12px;padding:0.1rem">Participating</p>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-7">
                                        <p style="color:#6A6A6A">Chapter</p>
                                    </div>
                                    <div class="col-5 text-center">
                                        <p style="color:#333333"><?= $historic['chapter_description'] ?></p>
                                    </div>
                                    <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                    <div class="col-5 pt-3 my-auto">
                                        <p style="color:#6A6A6A">Date</p>
                                    </div>
                                    <div class="col-7 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                        <p style="color:#333333"><?= $historic['chapter_dates_description'] ?></p>
                                    </div> 
                                    <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>                                                                                                                                       
                                    <div class="col-7 pt-3 my-auto">
                                        <p style="color:#6A6A6A">Participation number</p>
                                    </div>
                                    <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                        <p style="color:#333333"><?= $historic['user_chapter_id'] ?></p>
                                    </div>
                                    <?php foreach ($var as $detail) { ?>
                                        <?php if($detail['user_challenge_detail_id_type_challenge'] == 1) { ?>
                                            <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                            <div class="col-5 pt-3 my-auto">
                                                <p style="color:#6A6A6A">TikTok account</p>
                                            </div>
                                            <div class="col-7 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                                <p style="color:#333333"><?= $detail['user_challenge_detail_user_name_tiktok'] ?></p>
                                            </div> 
                                            <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>     
                                            <div class="col-5 pt-3 my-auto">
                                                <p style="color:#6A6A6A">TikTok link</p>
                                            </div>
                                            <div class="col-7 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                                <p style="color:#333333"><?= $detail['user_challenge_detail_url_tiktok'] ?></p>
                                            </div>
                                        <?php }elseif ($detail['user_challenge_detail_id_type_challenge'] == 2) { ?>
                                            <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                            <div class="col-7 pt-3 my-auto">
                                                <p style="color:#6A6A6A">Assessment submission date</p>
                                            </div>
                                            <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                                <p style="color:#333333"><?= date("d-m-Y", strtotime($detail['user_challenge_detail_assesment_submission_date'])) ?></p>
                                            </div> 
                                            <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                            <div class="col-7 pt-3 my-auto">
                                                <p style="color:#6A6A6A">Video of intent</p>
                                            </div>
                                            <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                                <p style="color:#333333"><a href="<?= base_url('Profile/downloadVideo?urlVideo='.$detail['user_challenge_detail_path_video'])  ?>">Download</a></p>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                    
                                                                                                                                                                
                                </div>
                                <div class="row pt-5">
                                    <div class="col-12">
                                        <h6>Payments</h6>
                                    </div>
                                    <div class="col-7 pt-3 my-auto">
                                        <p style="color:#6A6A6A">Invoice</p>
                                    </div>
                                    <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                        <p style="color:#333333"><a href="<?= base_url('Profile/downloadPaymentComprobant?urlPayment='.$historic['payment_confirmation_number'])  ?>">Download</a></p>
                                    </div>                            
                                </div>

                            </div>
                        </div>
                        <br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>








