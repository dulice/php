<?php
    require_once "core/auth.php";
    require_once "template/header.php"; 
?>  
                <!-- breadcrumbs-container-->
                <div class="card mb-4">
                    <div class="card-body">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item">List Post</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- data table -->
                <div class="card">

                    <!-- heading -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="item-list">
                            <i class="text-primary feather feather-list" style="font-size: 24px;"></i>
                            <span class="h4">Post List</span>
                        </div>
                        <div class="">
                            <button class=" btn btn-outline-secondary">
                                <i class="full-screen-btn feather feather-maximize-2"></i>
                            </button>
                            <a href='post_create.php' class="btn btn-outline-primary">
                                <i class="father feather-plus-circle"></i>
                            </a>
                        </div>
                    </div>

                    <!-- table -->
                    <div class="card-body">
                        <table id="list" class="display table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <?php if($_SESSION['user']['role'] != 2) { ?>
                                        <th>User</th>
                                    <?php } ?>
                                    <th>Control</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(listPost() as $row) { ?>
                                    
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo textLimit($row['title']); ?></td>
                                        <td><?php echo textLimit($row['description']) ?></td>
                                        <td class="text-nowrap"><?php echo (singleListCategroy($row['category_id'])['title']) ?></td>

                                        <?php if($_SESSION['user']['role'] != 2) { ?>
                                            <td class="text-nowrap"><?php echo (user($row['user_id'])['username']) ?></td>
                                        <?php } ?>
                                        
                                        <td class='text-nowrap'>
                                            <a class='btn btn-sm bg-primary me-1 text-white text-decoration-none' href="post_update.php?id=<?php echo $row['id'] ?>"> 
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Are you sure, you want to delete it?')" class='btn btn-sm bg-danger text-white text-decoration-none' href="post_delete.php?id=<?php echo $row['id'] ?>">
                                                <i class="feather-trash"></i>
                                            </a>
                                        </td>
                                        <td class="text-nowrap"><?php echo showTime($row['created_at']) ?></td>
                                    </tr>
                                <?php } ?>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>                          
            </div>
        </div>
    </section>

<?php require_once "template/footer.php";