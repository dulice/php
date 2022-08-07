<?php
    require_once "core/auth.php";
    require_once "template/header.php"; 
    $id = $_GET['id'];
    $category_id = singleListCategroy(singleListPost($id)['category_id']);
?>  

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                
                <div class="card mb-3 fcard shadow">
                    <div class="card-header">
                        <h3>
                            <?php echo singleListPost($id)['title']; ?>
                        </h3>
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
            </div>
            <div class="col-12 col-md-6">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Device</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(countByPost($_GET['id']) as $p) {?>
                            <tr>
                                <td class="text-nowrap"><?php echo ($p['user_id'] == 0 ? "Guess" : user($p['user_id'])['username'])?></td>
                                <td><?php echo $p['device'] ?></td>
                                <td class="text-nowrap"><?php echo showTime($p['created_at']) ?></td>
                            </tr>
                        <?php } ?>
                        <?php ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once "template/footer.php"; ?>