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
                                <li class="breadcrumb-item">Payment History</li>
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
                            <span class="h4">Payment History</span>
                        </div>
                        <div class="">
                            <button class=" btn btn-outline-secondary">
                                <i class="full-screen-btn feather feather-maximize-2"></i>
                            </button>
                            <a href='payment_create.php' class="btn btn-outline-primary">
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
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Amount</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(paymentList() as $row) { ?>
                                    
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td class="text-nowrap"><?php echo user($row['from_id'])['username']; ?></td>
                                        <td><?php echo user($row['to_id'])['username']; ?></td>
                                        <td class="text-nowrap">$ <?php echo $row['amount'] ?></td>
                                        <td class="text-nowrap"><?php echo $row['created_at'] ?></td>                                      
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