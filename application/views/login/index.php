<div class="section-head-sign-in pt-3 pb-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-7 my-auto">
                    <img src="<?= base_url('assets/img/trepChallengeIcon.svg')?> ">
                    <h1 style="padding-top: 2rem; color: #393939; font-weight: 700;">Welcome to TrepChallenge</h1>
                    <h4 class=" pt-3" style="color:#393939">Win an all-paid Experience Program and travel to New York City for 9 days and 8 nights.</h4>
                    <p style="color: #393939;">Dominate the 7 main entrepreneurial competencies and become an entrepreneur to make a positive impact in society.</p>
                </div>
                <div class="col-md-5 text-center my-auto">
                    
                </div>
            </div>
            
        </div>
    </div>
<div class="section pt-5 pb-5" style="background-color: #00A8FF;">
    <div class="container" style="margin-top: -6rem;position: relative;z-index: 2;">
        <div class="row equal-cols" style="display: flex;padding-bottom: 3rem;">
                <div class="col-lg-4 col-md-2 col-xs-6"></div>
                <div class="col-lg-4 col-md-2 col-xs-6"> 
                    <div class="card" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);border-radius:8px;border:none;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid" src="<?= base_url('assets/img/iconBook.png')?>" >
                                    </div>
                                    <div class="col">
                                        <h4 style="color: #00A8FF;font-weight: 700;font-weight: 700;font-size: 20px;line-height: 30px;">It’s your time to start your entrepreneurial journey!</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <span style="color: #474747;font-size: 14px;line-height: 26px;">
                                            <b>Sign up and receive for free our eBook “Dream Builders” by Fernando Sepulveda.</b> PD: it will increase your chances of winning our Challenge.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-xs-6"></div>
            </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);border-radius: 8px;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row pt-5 pb-5 text-center">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-light" type="button" style="border: 1px solid #f4f4f4;border-radius: 4px !important;background: #ffffff;"><img src="<?= base_url('assets/img/IconGoogle.png') ?>"><span style="font-weight: 700;font-size: 12px;"> Continue with Google</span></button>
                                    <button class="btn btn-dark" type="button" style="background: #333333;box-shadow: 0px 1px 2px rgb(31 41 55 / 8%);border-radius: 4px !important;"><img src="<?= base_url('assets/img/IconApple.png') ?>"><span style="font-weight: 700;font-size: 12px;color:#ffffff;"> Continue with Apple</span></button>
                                    <button class="btn btn-light" type="button" style="background: #ffffff;border: 1px solid #F4F4F4;border-radius: 4px !important;"><img src="<?= base_url('assets/img/IconFacebook.png') ?>"><span style="font-weight: 700;font-size: 12px;color:#3B5998;"> Continue with Facebook</span></button>
                                </div>
                            </div>
                            <div class="text-divider"><span style="color: #6A6A6A;">or use your email</span></div>
                            <div class="row pt-5 pb-3">
                                <div class="col-lg-12">
                                    <h5>Sign up to TrepChallenge</h5>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <form id="formSignUp">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="txtEmail" placeholder="Email" autocomplete="username" required>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <input type="password" id="txtPassword" name="current-password" autocomplete="current-password" spellcheck="false" autocorrect="off" autocapitalize="off" class="form-control" placeholder="Password" required>
                                        <button id="toggle-password" type="button" class="d-none"></button>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <input type="password" id="txtPassword2" name="current-password2" autocomplete="current-password2" spellcheck="false" autocorrect="off" autocapitalize="off" class="form-control" placeholder="Confirm password" required>
                                        <button id="toggle-password2" type="button" class="d-none"></button>
                                    </div>
                                    <div class="mb-5 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1" style="color: #6A6A6A;font-size: 14px;">Remember me</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2" style="color: #6A6A6A;font-size: 14px;">I agree to the terms and conditions</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                            <label class="form-check-label" for="exampleCheck3" style="color: #6A6A6A;font-size: 14px;">I want to receive email updates about my participation in the TrepChallenge</label>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <div class="d-grid gap-2">
                                            <button type="submit" id="btnSignUp" class="btn btn-light" style="background-color: #ffd041;"><span style="color: #FFFFFF;font-weight: 700;">Sign up</span></button>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <div class="d-grid gap-2">
                                            <a href="#"><span style="color: #474747;font-weight: 600;">Cancel Sign Up</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row pt-5 pb-5 text-center">
                                <div class="col-lg-6">
                                    <span style="color: #474747;font-weight: 400;font-size: 16px;">Already have an account?</span>
                                </div>
                                <div class="col-lg-6">
                                    <a href="<?= base_url('Login/signIn') ?>" style="color: #00A8FF;font-weight: 600;font-size: 16px;">Sign in to TrepChallenge</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
