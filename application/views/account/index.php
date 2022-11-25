<section class="pt-5 pb-5" style="background-image: url('<?= base_url('assets/img/backAccount.png') ?>');">
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-12">
                <h1 style="color: #333333;font-weight: 700;font-size: 35px;line-height: 45px;">Account configuration</h1>
                <h5 style="color: #333333;font-weight: 700;font-size: 20px;line-height: 30px;">Personal information</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form id="formSignUp">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtName" placeholder="Name" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtLastName" placeholder="Last name" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtBirthday" placeholder="Birthdate" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                            <option selected>Select a option</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtCountryCode" placeholder="Country code" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtPhone" placeholder="Phone" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3 text-center">
                        <div class="d-grid gap-2">
                            <button type="submit" id="btnSignUp" class="btn btn-light" style="background-color: #D8D8D8;"><span style="color: #FFFFFF;font-weight: 700;">Create Account</span></button>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <div class="d-grid gap-2">
                            <a href="#"><span style="color: #474747;font-weight: 600;">Cancel Sign Up</span></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>