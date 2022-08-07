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
                                <li class="breadcrumb-item">Ads List</li>
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
                            <span class="h4">Ads List</span>
                        </div>
                        <div class="">
                            <button class=" btn btn-outline-secondary">
                                <i class="full-screen-btn feather feather-maximize-2"></i>
                            </button>
                            <a href='ads_create.php' class="btn btn-outline-primary">
                                <i class="father feather-plus-circle"></i>
                            </a>
                        </div>
                    </div>

                    <!-- table -->
                    <div class="card-body">
                        <table id="list" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Owner Name</th>
                                    <th>Photo</th>
                                    <th>Link</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(adsList() as $row) { ?>
                                    
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td class="text-nowrap"><?php echo $row['owner_name'] ?></td>
                                        <td>
                                            <img src="<?php echo $row['photo'] ?>" alt="" style="width: 50px; height: 50px; object-fit: cover">
                                        </td>
                                        <td><?php echo $row['link'] ?></td>
                                        <td class="text-nowrap"><?php echo $row['start'] ?></td>
                                        <td class="text-nowrap"><?php echo $row['end'] ?></td>                                      
                                    </tr>
                                <?php } ?>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

<?php require_once "template/footer.php"; ?>
<script>
$('#list').DataTable({
    order: [[0, 'desc']],
});
</script>