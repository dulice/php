<?php
    require_once "template/header.php"
?>

                <!-- form -->               
                <div class="password-container row">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <div class="row d-flex justify-content-end">
                                <div class="col-8 mb-4">
                                    <h4>Change Password</h4>
                                    <div class="form-group mb-4">
                                        <label for="current-password" class="text-black-50 ms-2">Current Password</label>
                                        <div class="border p-2 ">
                                                <input type="password" class="personal-info w-75" id="current-password" required>
                                                <i class="eye-icon feather-eye-off"></i>
                                            <div class="invalid-feedback">
                                                Please Enter A Password
                                            </div>
                                        </div>
                                
                                    </div>                                                                                                                                   
                                </div>
                                <div class="col-8 mb-4">
                                    <label for="new-password" class="text-black-50 ms-2">New Password</label>
                                    <div class="border p-2 ">
                                        <input type="password" class="personal-info w-75" id="new-password" required>
                                        <i class="eye-icon feather-eye-off"></i>
                                        <div class="invalid-feedback">
                                            Please Enter A New Password
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="col-8 mb-4">
                                    <label for="comfirm-password" class="text-black-50 ms-2">Comfirm Password</label>
                                    <div class="border p-2 ">
                                        <input type="password" class="personal-info w-75" id="comfirm-password" required>
                                        <i class="eye-icon feather-eye-off"></i>
                                        <div class="invalid-feedback">
                                            Please Comfirm A Password
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-6 my-auto">
                            <h6 class="ms-2">Password Must Contain</h6>
                            <ul>
                                <li class="text-black-50">Uppercase and lowercase letters (A - Z)</li>
                                <li class="text-black-50">Numberical Character (0 - 9)</li>
                                <li class="text-black-50">Special Characters (@, #, *, %, etc)</li>
                            </ul>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button onclick="handleSubmit('index.html')" class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once "template/footer.php";