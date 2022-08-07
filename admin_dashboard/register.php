<?php 

require "core/user.php";
?>  

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/feather-icons-web/feather.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/style/custom.css">

    </head>

    <body class="bg-light">
        <div class="container">
            <div class="col-12 col-sm-8 m-auto">
                <div class="card p-3 mt-5">   
                    <h4 class="mb-3 text-center">Register Account</h4>
                    <?php register() ?>
                    <form method="post">
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">
                                <i class="feather-user"></i>
                                <span>Username:</span>
                            </label>
                            <div class="col-sm-9">
                                <input required type="text" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="" class="col-sm-3 col-form-label">
                                <i class="feather-mail"></i>
                                Email:
                            </label>
                            <div class="col-sm-9">
                                <input required class="form-control" type="text" name="email">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="" class="col-sm-3 col-form-label">
                                <i class="feather-lock"></i>
                                Password:
                            </label>
                            <div class="col-sm-9">
                                <input required class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="" class="col-sm-3 col-form-label">
                                <i class="feather-lock"></i>
                                Comfirm Password:
                            </label>
                            <div class="col-sm-9">
                                <input required class="form-control" type="password" name="cpassword">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary me-3" name="registerBtn">Register</button>
                            <a href="login.php" class="btn btn-outline-primary">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>