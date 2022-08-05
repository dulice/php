<?php
    require_once "core/auth.php";
    require_once "template/header.php"; 
    $id = $_GET['id'];
    $category_id = singleListCategroy(singleListPost($id)['category_id']);
?>  

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
                        <p class="text-black-50"><?php echo html_entity_decode((singleListPost($id)['description'])); ?></p>
                    </div>
                </div>
                <div class="row">
                    <?php foreach(sameCat($category_id['id'], $id) as $p) { ?>
                        <div class="col-12 col-md-6">                         
                            <div class="card mb-3 fcard shadow">
                                <div class="card-header">
                                    <p>
                                        <a href="post_detail.php?id=<?php echo $p['id']; ?>" class="h3 d-inline-block"><?php echo textLimit($p['title'], 70); ?></a>
                                    </p>
                                    <span>
                                        <i class="feather-user text-primary"></i>
                                        <span><?php echo (user($p['user_id'])['username']); ?></span>
    
                                        <i class="feather-layers text-danger"></i>
                                        <span><?php echo (singleListCategroy($p['category_id'])['title']); ?></span>
    
                                        <i class="feather-calendar text-info"></i>
                                        <span><?php echo showTime($p['created_at']); ?></span>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <p class="text-black-50"><?php echo textLimit($p['description'], 150); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="position-sticky">
                    <div >
                        <h4>Categories</h4>
                        <div class="list-group mt-3">
                            <div class="list-group-item active">All Categories</div>
                            <?php foreach(listCategory() as $c) { ?>
                                <div class="list-group-item"><?php echo $c['title']; ?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="my-3">
                        <h4>Advertisement</h4>
                        <p>Ads Here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "template/footer.php"; ?>