<?php 

session_start();
require_once "core/functions.php"; 
$id = $_GET['id'];
$category_id = singleListCategroy(singleListPost($id)['category_id']);
?>
<?php require_once "front_panel/head.php"; ?>
<?php require_once "front_panel/side_head.php"; ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                
                <div class="card mb-3 fcard shadow">
                    <div class="card-header">
                        <p>
                            <a href="fpost_detail.php?id=<?php echo singleListPost($id)['id']; ?>" class="h3 d-inline-block"><?php echo singleListPost($id)['title']; ?></a>
                        </p>
                        <span>
                            <i class="feather-user text-primary"></i>
                            <span><?php echo (user(singleListPost($id)['user_id'])['username']); ?></span>

                            <i class="feather-layers text-danger"></i>
                            <span><?php echo $category_id['title']; ?></span>

                            <i class="feather-calendar text-info"></i>
                            <span><?php echo showTime(singleListPost($id)['created_at']); ?></span>
                        </span>
                    </div>
                    <div class="card-body">
                        <p class="text-black-50"><?php echo singleListPost($id)['description']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <?php foreach(sameCat($category_id['id'], $id, 2) as $p) { ?>
                        <div class="col-12 col-md-6">                         
                            <?php include "card_post.php" ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php require_once "front_panel/right_side.php" ?>
        </div>
    </div>
</div>
<?php require_once "front_panel/foot.php"; ?>