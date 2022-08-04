<?php
    require_once "core/auth.php";
    require_once "./template/header.php";
?>
                <div class="card">
                    <div class="p-3 card-body ">
                        <div class="d-flex justify-content-between align-items-center text-primary">
                            <a href="dashboard.php">
                                <i class=" fa fa-arrow-circle-o-left fa-lg"></i>
                            </a>
                            <h5 class="mb-0">Save</h5>
                        </div>
                    </div>
                </div>
                <h4>Edit Profile</h4>
                <div class="card mx-md-5">
                    <div class="card-body mx-md-5">
                        <div class="row justify-content-between align-items-center">

                            <!-- change profile -->
                            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center ">
                                <div class="profile-pic position-relative">
                                    <label class="-label" for="file">
                                        <span class="text-white-50 feather-camera"></span>
                                    </label>
                                    <input id="file" type="file" onchange="loadFile(event)" type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="upload" />
                                    <img src="assets/image/<?php echo $_SESSION['user']['photo'] ?>" id="output" class="rounded-circle edit-profile-img" />
                                </div>
                                <h6 class="mt-3">Profile Photo</h6>
                            </div>

                            <!-- change personal info about -->
                            <div class="col-12 col-md-6">
                                <div class="">
                                    <div class="form-group mb-4">
                                        <label for="username" class="text-black-50 ms-2">Name</label>
                                        <div class="border-bottom border-secondary p-2 d-flex justify-content-between align-items-center ">
                                            <input type="text" id="username" class="personal-info w-75" value="<?php echo $_SESSION['user']['username'] ?>" />
                                            <i class="feather-x"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group mb-4">
                                        <label for="dob" class="text-black-50 ms-2">Date Of Birth</label>
                                        <div class="border-bottom border-secondary p-2 d-flex justify-content-between align-items-center ">
                                            <input type="text" class="personal-info w-75" id="dob" value="14 Jul 2001">
                                            <i class="feather-x"></i>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group mb-4">
                                        <label for="item-name" class="text-black-50 ms-2">Email</label>
                                        <div class="border-bottom border-secondary p-2 d-flex justify-content-between align-items-center ">
                                            <input type="text" class="personal-info w-75" id="item-name" value="<?php echo $_SESSION['user']['email'] ?>">
                                            <i class="feather-x"></i>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group mb-4">
                                        <label for="item-name" class="text-black-50 ms-2">Phone Number</label>
                                        <div class="border-bottom border-secondary p-2 d-flex justify-content-between align-items-center ">
                                            <input type="text" class="personal-info w-75" id="item-name" value="09767331403">
                                            <i class="feather-x"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php require_once "template/footer.php";