<?php 
require_once "core.php";
require_once "functions.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">

                    <?php 
                        if(isset($_POST['submitBtn'])) {
                            register();
                        }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form my-3">
                            <label for="name" class="h5">Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="<?php echo oldData('name'); ?>">
                            <small class="text-danger h6"><?php echo showError('name'); ?></small>
                        </div>
                        <div class="form my-3">
                            <label for="email" class="h5">Email</label>
                            <input class="form-control" type="text" id="email" name="email" value="<?php echo oldData('email'); ?>">
                            <small class="text-danger h6"><?php echo showError('email'); ?></small>
                        </div>
                        <div class="form my-3">
                            <label for="phone" class="h5">Phone Number</label>
                            <input class="form-control" type="text" id="phone" name="phone" value="<?php echo oldData('phone'); ?>">
                            <small class="text-danger h6"><?php echo showError('phone'); ?></small>
                        </div>
                        <div class="form my-3">
                            <label for="address" class="h5">Address</label>
                            <textarea class="form-control" type="text" id="address" name="address"><?php echo oldData('address'); ?></textarea>
                            <small class="text-danger h6"><?php echo showError('address'); ?></small>
                        </div>
                        <div class="form my-3">
                                <?php foreach($genders as $g) { ?>
                                    <div class="form-check-inline">
                                        <input 
                                            class="form-check-input" 
                                            type="radio" 
                                            id="<?php echo $g ?>_id" 
                                            value="<?php echo $g ?>" 
                                            name="gender"
                                            <?php echo ($g == oldData('gender') ? 'checked' : '') ?>
                                        />
                                        <label for="<?php echo $g ?>_id" class="form-check-label text-capitalize"><?php echo $g ?></label>
                                    </div>
                                    <?php }?>
                                    <small class="text-danger h6 d-block"><?php echo showError('gender'); ?></small>
                        </div>

                        <div class="form my-3">
                                <?php foreach($skills as $s) { ?>
                                    <div class="form-check-inline">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            id="<?php echo $s ?>_id" 
                                            value="<?php echo $s ?>" 
                                            name="skill[]"
                                            <?php if(oldData("skill")) { 
                                                foreach(oldData("skill") as $skillCheck) { 
                                                    echo ($skillCheck == $s ? 'checked' : '');
                                                }
                                            } ?>
                                        />
                                        <label for="<?php echo $s ?>_id" class="form-check-label text-capitalize"><?php echo $s ?></label>
                                    </div>
                                <?php }?>
                                <small class="text-danger h6 d-block"><?php echo showError('skill'); ?></small>
                        </div>

                        <div class="form my-3">
                            <label for="photo" class="h5">Photo</label>
                            <input class="form-control" type="file" id="photo" name="photo" value="<?php echo oldData('photo'); ?>"/>
                            <small class="text-danger h6"><?php echo showError('photo'); ?></small>
                        </div>
                        <button class="btn btn-primary" name="submitBtn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>