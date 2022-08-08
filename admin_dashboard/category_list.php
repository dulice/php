<?php
    require_once "core/auth.php";
    require_once "core/isAdmin&isEditor.php";
    require_once "template/header.php"; 
?>  
                <!-- breadcrumbs-container-->
                <div class="card mb-4">
                    <div class="card-body">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item">List Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- data table -->
                <div class="card">

                    <!-- heading -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="item-list">
                            <i class="text-primary feather-layers" style="font-size: 24px;"></i>
                            <span class="h4"> Category List</span>
                        </div>
                        <div class="">
                            <button class=" btn btn-outline-secondary">
                                <i class="full-screen-btn feather feather-maximize-2"></i>
                            </button>
                            <a href='category_create.php' class="btn btn-outline-primary">
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
                                    <th>Category</th>
                                    <th>User</th>
                                    <th>Control</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(listCategory() as $row) { ?>
                                    
                                    <tr class="<?php echo ($row['ordering'] == 1) ? 'table-info' : '' ?>">
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><?php echo (user($row['user_id'])['username']) ?></td>
                                        
                                        <td class=''>
                                            <a class='btn btn-sm  btn-outline-primary text-decoration-none' href="category_update.php?id=<?php echo $row['id'] ?>"><i class="feather-edit"></i></a>
                                            <a onclick="return confirm('Are you sure, you want to delete it?')" class='btn btn-sm btn-outline-danger text-decoration-none' href="category_delete.php?id=<?php echo $row['id'] ?>"><i class="feather-trash"></i></a>
                                            
                                            <?php if($row['ordering'] != 1) { ?>
                                                <a class='btn btn-sm  btn-outline-warning me-3 text-decoration-none' href="pin_category.php?id=<?php echo $row['id'] ?>"><i class="feather-upload"></i></a>
                                            <?php } else { ?>
                                                <a class='btn btn-sm  btn-outline-warning me-3 text-decoration-none' href="unpin_category.php?id=<?php echo $row['id'] ?>"><i class="feather-arrow-down"></i></a>
                                            <?php }  ?>
                                        </td>
                                        <td><?php echo showTime($row['created_at']) ?></td>
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