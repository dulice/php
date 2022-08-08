<?php
    require_once "core/auth.php";
    require_once "template/header.php";
    if(isset($_POST['addBtn'])) {
        createPayment();
    }

?>        
                <!-- breadcrumbs-container-->
                <div class="card mb-4">
                    <div class="card-body">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="payment_history.php">Transition History</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- add item form action -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="item-add-title d-flex align-items-center">
                                        <i class="feather-dollar-sign h4 m-0 text-primary"></i>
                                        <span class="h4 mb-0 ps-2">My Wallet</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary">
                                            You Have $ <?php echo user($_SESSION['user']['id'])['money'];?>
                                        </button>
                                        <button onclick="linkClick('payment_history.php')" class="btn btn-outline-primary">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="row" enctype="multipart/form-data" method="post">
                                    <div class="col-12">
                                        <div class="form-inline">
                                            <select name="to_id" id="" class="form-select mb-3">
                                                <option value="0" selected disabled>Select User</option>
                                                    <?php foreach(users() as $user) { 
                                                        if($user['id'] != $_SESSION['user']['id']) {
                                                    ?>
                                                        <option value="<?php echo $user['id']; ?>">
                                                            <?php echo $user['username'] ?>
                                                        </option>
                                                    <?php } ?>                                            
                                                <?php } ?>
                                            </select>

                                            <input required type="number" name="amount" placeholder="Amount" class="form-control mb-3" min="10" max="<?php echo user($_SESSION['user']['id'])['money'];?>">
                                            <input required type="text" name="description" placeholder="Description" class="form-control mb-3">
                                            <button class="btn btn-primary" name="addBtn">Transfer</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "template/footer.php";
