<section class="pt-5 pb-5" style="background-image: url('<?= base_url('assets/img/backAccount.png') ?>');">
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-12">
                <h1 style="color: #333333;font-weight: 700;font-size: 35px;line-height: 45px;">Account configuration</h1>
                <h5 style="color: #333333;font-weight: 700;font-size: 20px;line-height: 30px;">Personal information</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-auto">
                <form id="formSignUp">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtName" placeholder="Name" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtLastName" placeholder="Last name" style="border-radius: 50px;" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtBirthday" placeholder="Birthdate" style="border-radius: 50px;" readonly required>
                    </div>
                    <div class="mb-3">
                        <select id="selectGender" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                            <option value="" hidden>Gender</option>
                            <?php foreach ($genders as $gender) { ?>
                                <option value="<?= $gender['gender_id'] ?>"><?= $gender['gender_description'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <style>
                        .iti--separate-dial-code .iti__selected-flag {
                            background-color: rgba(0,0,0,0) !important;
                        }
                    </style>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="txtPhone" style="border-radius: 50px;" placeholder="Phone" maxlength="15">
                    </div>
                    <div class="mb-3 text-center">
                        <div class="d-grid gap-2">
                            <button type="submit" id="btnCreateAccount" class="btn btn-light" style="background-color: #D8D8D8;"><span style="color: #FFFFFF;font-weight: 700;">Create Account</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>