
<div class="section-head-sign-in pt-5 pb-5" style="background-color: #00A8FF;">
    <div class="container" style="position: relative;">
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
                                    <h5>Sign in to TrepChallenge</h5>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <form id="formSignIn">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="txtEmailSignIn" placeholder="Email" autocomplete="username" required>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <input type="password" id="txtPasswordSignIn" name="current-password" autocomplete="current-password" spellcheck="false" autocorrect="off" autocapitalize="off" class="form-control" placeholder="Password" required>
                                        <button id="toggle-password" type="button" class="d-none"></button>
                                    </div>
                                    <div class="mb-1 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1" style="color: #6A6A6A;font-size: 14px;">Remember me</label>
                                    </div>
                                    <div class="mb-5">
                                        <div class="col-md-12">
                                            <a href="#" style="text-decoration-line: underline;"><span style="color: #474747;font-weight: 600;font-size: 16px;">Forgot your password?</span></a>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 text-center">
                                        <div class="d-grid gap-2">
                                            <button type="submit" id="btnSignIn" class="btn btn-light" style="background-color: #ffd041;"><span style="color: #FFFFFF;font-weight: 700;">Sign in</span></button>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <div class="d-grid gap-2">
                                            <a href="#"><span style="color: #474747;font-weight: 600;">Cancel Sign in</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row pt-5 pb-5 text-center">
                                <div class="col-lg-6">
                                    <span style="color: #474747;font-weight: 400;font-size: 16px;">Don’t have an account?</span>
                                </div>
                                <div class="col-lg-6">
                                    <a href="<?= base_url('Login') ?>" style="color: #00A8FF;font-weight: 600;font-size: 16px;">Sign up to TrepChallenge</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>