   <style> 
   ::-webkit-scrollbar {
    display: none;
    }
   </style>
  
   

    <div class="section pt-5" style="background-color: #FFF;">
        <div class="container pxDesk">
            <div class="row py-3 my-auto">                
            </div>
            <div class="row py-3">
                <div class="col-lg-12 my-auto py-2">
                    <div class="menu-h-payments" id="menu-h-payments" style="text-align:left">
                        <nav>
                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-size: 1rem;">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" style="padding-left:1px" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">1. Billing information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="historic-tab" data-bs-toggle="tab" data-bs-target="#historic" type="button" role="tab" aria-controls="historic" aria-selected="false">2. Payment information</button>
                                </li>
                            </ul> 
                        </nav>                   
                    </div>                    
                </div>
            </div>
            <div class="tab-content" id="myTabContent">    
            <!-- Billing information card -->
                <div class="tab-pane fade show active row py-2 p-3 pb-4 profileCard" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="" style="padding:1rem 0rem">
                        <div class="">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Billing information</h5>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <form class="profileForm">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_name" class="form-control" placeholder="Full Name" aria-label="Full Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_street" class="form-control" placeholder="Street" aria-label="Street">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="pay_number" class="form-control" placeholder="Number" aria-label="Number">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_city" class="form-control" placeholder="City" aria-label="City">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_state" class="form-control" placeholder="State" aria-label="State">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="pay_zipCode" class="form-control" placeholder=Zip Code" aria-label="Zip Code">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_country" class="form-control" placeholder="Country" aria-label="Country">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_email" class="form-control" placeholder="Confirm email" aria-label="Confirm email">
                                        </div>
                                    </div>                                                                                                                                                                                                                                                                                                                                  
                                </form>                                                                                                                            
                            </div>
                        </div>
                    </div>               
                </div>   
                
                <!-- Payment information card -->
                <div class="tab-pane fade show row py-2 p-3 pb-4  profileCard" id="historic" role="tabpanel" aria-labelledby="historic-tab">
                    <div class="" style="padding:1rem 0rem">
                        <div class="">
                            <div class="row">
                                <div class="col">
                                    <h5>Payment information</h5>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <form class="profileForm">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_cardName" class="form-control" placeholder="Full Name" aria-label="Full Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="number" name="pay_cardNumber" class="form-control" placeholder="Card number" aria-label="Card number">
                                        </div>
                                    </div>                                    
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="pay_expiration" class="form-control" placeholder="Expiration date" aria-label="Expiration date">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="pay_cvv" class="form-control" placeholder="CVV" aria-label="CVV">
                                        </div>
                                    </div>                                                                                                                                                                                                                                                                                                                                 
                                </form>                                                                                                                            
                            </div>                            


                        </div>
                    </div>               
                </div>
            </div>           
        </div>
    </div>

    <div class="section pt-1 p-3 mb-5" style="background-color: #FFF;">
        <div class="container pxDesk" style="padding:1rem 0rem">
            <div class="row">
                <div class="col">
                    <h4>Order summary</h4>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-3">
                    <img src="<?= base_url('assets/img/order_summary.png') ?>">
                </div>
                <div class="col-6">
                    <p><b>Participation fee</b></p>
                    <p>TrepChallenge ‘Business Sense’ Chapter</p>
                </div>
                <div class="col-3" style="text-align: right;color: #33A4FE;">
                    <p>50 USD</p>
                </div>
                <div class="col-12"><hr></div>                                                  
            </div>
            <div class="row">
                <div class="col-12" style="padding-right: 3rem;">
                    <h5>Includes</h5>
                    <p class="pt-1">Opportunity to participate in the TrepChallenge</p>
                    <p>Win an all-paid Experience Program for 9 days and 8 nights at New York City valued in $5,000 USD</p>
                    <p>Reward to start your entrepreneurial journey</p>
                    <p>Entrepreneurial Competencies Toolkit valued in $150 USD:</p>
                    <ul>
                        <li><p style="margin-bottom:0.3rem">Entrepreneurial Competencies Program</p></li>
                        <li><p>Entrepreneurial Methodologies Certificate</p></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><hr></div>
                <form class="profileForm">
                    <div class="row">
                        <div class="col-8">
                            <input type="text" name="cupon" class="form-control" placeholder="Discount code" aria-label="Discount code">
                        </div>
                        <div class="col-4" style="text-align: right;">
                            <button type="submit" class="btn btn-secondary btnSend" style="background: #FFD041;border-radius: 25px;"><b>Apply</b></button>
                        </div>                         
                    </div>
                </form>               
                <div class="col-12"><hr></div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <h5>Total</h5>
                </div>
                <div class="col">
                    <h5 style="color:#00A8FF;text-align: right;"><span class="text-bold" id="totalPayment">50</span> USD</h5>
                </div>                
            </div>           
        </div>
    </div>










