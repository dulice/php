<?php 

session_start();
require_once "core/functions.php";

 ?>
<?php require_once "front_panel/head.php"; ?>
<?php require_once "front_panel/side_head.php"; ?>

<div class="container-fluid">
    <div class="container">
        <div class="card mb-4">
            <div class="card-body">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item">Search By Date: From <b><?php echo $_POST['start'] ?></b> To <b><?php echo $_POST['end'] ?></b></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <?php if(count(searchByDate($_POST['start'], $_POST['end'])) == 0) { 
                    echo alert("warning", "Result Not Found!");
                }
                ?>
                <?php foreach(searchByDate($_POST['start'], $_POST['end']) as $p) { ?>
                    <?php include "card_post.php" ?>
                <?php } ?>
            </div>
            <?php require_once "front_panel/right_side.php" ?>
        </div>
    </div>
</div>
<?php require_once "front_panel/foot.php"; ?>