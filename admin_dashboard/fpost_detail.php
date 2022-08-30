<?php 

session_start();
require_once "core/functions.php"; 

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    redirect('index.php');
}

if(singleListPost($id)) {
    $category_id = singleListCategroy(singleListPost($id)['category_id']);
} else {
    die(alert("danger", "404 page not found"));
}

if(isset($_SESSION['user']['id'])) {
    $user_id = $_SESSION['user']['id'];
} else {
    $user_id = 0;
}

$post_id = singleListPost($id)['id'];
$device = $_SERVER['HTTP_USER_AGENT'];
addViewer($user_id, $post_id, $device);
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
                        <li class="breadcrumb-item"><?php echo $category_id['title']; ?></li>

                    </ol>
                </nav>
            </div>          
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                
                <div class="card mb-3 fcard shadow">
                    <div class="card-header">
                        <p>
                            <a href="fpost_detail.php?id=<?php echo $post_id; ?>" class="h3 d-inline-block"><?php echo singleListPost($id)['title']; ?></a>
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
                        <p class="text-black-50"><?php echo html_entity_decode(singleListPost($id)['description']); ?></p>
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