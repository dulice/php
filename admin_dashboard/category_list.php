<?php
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
                            <i class="text-primary feather feather-list" style="font-size: 24px;"></i>
                            <span class="h4">Item List</span>
                        </div>
                        <div class="">
                            <button class=" btn btn-outline-secondary">
                                <i class="full-screen-btn feather feather-maximize-2"></i>
                            </button>
                            <button onclick="linkClick('category_create.php')" class="btn btn-outline-primary">
                                <i class="father feather-plus-circle"></i>
                            </button>
                        </div>
                    </div>

                    <!-- table -->
                    <div class="card-body">
                        <table id="list" class="display table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Created</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach(listCategory() as $row) {
                                        $time = date("h:i", strtotime($row['created_at']));
                                ?>
                                    
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['message'] ?></td>
                                        <td><?php echo $time ?></td>
                                        <td class='btn btn-sm  bg-primary me-3'>
                                            <a class='text-white text-decoration-none' href="category_update.php?id=<?php echo $row['id'] ?>">Update</a>
                                        </td>
                                        <td class='btn btn-sm bg-danger'>
                                            <a class='text-white text-decoration-none' href="category_delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                                        </td>
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