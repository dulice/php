<?php 
require_once "functions.php"; 
if(isset($_POST['submitBtn'])) {
    register();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="m-5 col-6">
        <div class="card">
            <div class="card-body">
                <form method="post">
                    <input type="text" class="form-control" placeholder="Name..." name="name" value="<?php oldData('name')?>" >
                    <small class="text-danger d-block mb-3 h6">
                        <?php
                            echo getError('name');                          
                        ?>
                    </small>
                    <button name="submitBtn" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>