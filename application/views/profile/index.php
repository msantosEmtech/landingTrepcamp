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
                    <h5 style="color:#333333">Name</h5>
                    <h5 style="color:#6A6A6A">Last Name</h5>
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
                                        <input type="text" class="form-control" id="name" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="last_name" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Birthdate</label>
                                        <input type="text" class="form-control" id="birthdate" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type="text" class="form-control" id="gender" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country_code" class="form-label">Country code</label>
                                        <input type="text" class="form-control" id="country_code" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" disabled>
                                    </div>                                                                                                                                                                                   
                                </form>                                                                                                                            
                            </div>
                        </div>
                    </div>               
                </div>   
                
                <!-- Historic card -->
                <div class="tab-pane fade show row py-2 p-3 pb-4  profileCard" id="historic" role="tabpanel" aria-labelledby="historic-tab">
                    <div class="card" style="padding:1rem 0rem">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5>First enrollment</h5>
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
                                    <p style="color:#333333">Chapter name</p>
                                </div>
                                <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                <div class="col-5 pt-3 my-auto">
                                    <p style="color:#6A6A6A">Date</p>
                                </div>
                                <div class="col-7 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333">December 05, 2022 to December 23, 2022</p>
                                </div> 
                                <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>                                                                                                                                       
                                <div class="col-7 pt-3 my-auto">
                                    <p style="color:#6A6A6A">Participation number</p>
                                </div>
                                <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333">8474</p>
                                </div> 
                                <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                <div class="col-5 pt-3 my-auto">
                                    <p style="color:#6A6A6A">TikTok account</p>
                                </div>
                                <div class="col-7 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333">Username</p>
                                </div> 
                                <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>     
                                <div class="col-5 pt-3 my-auto">
                                    <p style="color:#6A6A6A">TikTok link</p>
                                </div>
                                <div class="col-7 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333">www.link.com</p>
                                </div> 
                                <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                <div class="col-7 pt-3 my-auto">
                                    <p style="color:#6A6A6A">Assessment submission date</p>
                                </div>
                                <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333">MM/DD/YYYY</p>
                                </div> 
                                <div class="text-center"><hr style="margin:0rem 0;border:0.5px rgba(34, 35, 41, 0.1)"></div>
                                <div class="col-7 pt-3 my-auto">
                                    <p style="color:#6A6A6A">Video of intent</p>
                                </div>
                                <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333"><a href="">Download</a></p>
                                </div>                                                                                                                             
                            </div>
                            <div class="row pt-5">
                                <div class="col-12">
                                    <h6>Payments</h6>
                                </div>
                                <div class="col-7 pt-3 my-auto">
                                    <p style="color:#6A6A6A">Invoice</p>
                                </div>
                                <div class="col-5 pt-3 my-auto" style="text-align:right;padding-right:1rem">
                                    <p style="color:#333333"><a href="">Download</a></p>
                                </div>                            
                            </div>

                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div>







