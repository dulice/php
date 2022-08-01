<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            margin: 10px;
        }
        .image-container {
            border: 1px solid lightsalmon;
            display: inline-block;
            margin: 10px;
            padding: 10px;
        }
        img {
            height: 150px;
            display: block;
        }
    </style>
</head>
<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple>
        <button>Upload</button>
    </form>
    <?php
    
    require "data.php";
     foreach(showImage() as $photo ) {
    ?>
        <div class="image-container">
            <img src="<?php echo $photo['image'] ?>" alt="">
            <a href="clear.php?id=<?php echo $photo['id'] ?>">Delete</a>
        </div>
    <?php } ?>
</body>
</html>