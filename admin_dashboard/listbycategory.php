<?php 

session_start();
require_once "core/functions.php";
$category_id = $_GET['category_id'];
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
                        <li class="breadcrumb-item"><?php echo (singleListCategroy($_GET['category_id'])['title']) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <?php foreach(sameCat($category_id) as $p) { ?>
                    <?php include "card_post.php" ?>
                <?php } ?>
            </div>
            <?php require_once "front_panel/right_side.php" ?>
        </div>
    </div>
</div>
<?php require_once "front_panel/foot.php"; ?>