<div class="menu col-12 col-md-3 vh-100 sidebar overflow-scroll ">
    <div class="logo  bg-light d-flex justify-content-between align-items-center ">
        <div class="logo d-flex justify-content-start align-items-center m-4">
            <i class="fa fa-shopping-cart fa-lg text-primary me-2"></i>
            <h5 class="text-primary mb-0">
                <a href="index.php" class="nav-link">My Shop</a>
            </h5>
        </div>
        <i class="fa fa-xing m-4 d-block d-md-none"></i>
    </div>
    <div>
        <ul class="list-group mb-3">
            <li class="list-group-item"><a class="nav-link " href="dashboard.php"><i class="feather-activity"></i> Dashboard</a></li>
            <li class="list-group-item"><a class="nav-link " href="index.php"><i class="feather-anchor"></i> Go To News</a></li>
            <li class="list-group-item"><a class="nav-link " href="payment_create.php"><i class="feather-dollar-sign"></i> My Wallet</a></li>
        </ul>
    </div>
    
    <?php if($_SESSION['user']['role'] <= 1) { ?>
        <div>
            <h5 class="text-black-50 text-uppercase">Ads Management</h5>
            <ul class="list-group">
                <li class="list-group-item"><a class="nav-link " href="ads_create.php"><i class="feather-plus-circle"></i> Create New Ads</a></li>
                <li class="list-group-item"><a class=" nav-link" href="ads_list.php"><i class="feather-layout"></i> Ads Lists</a></li>
    
                <li></li>
            </ul>
        </div>
        <div>
            <h5 class="text-black-50 text-uppercase">Category Management</h5>
            <ul class="list-group">
                <li class="list-group-item"><a class=" nav-link " href="category_create.php"><i class="feather-plus-circle"></i> Create Category</a></li>
                <li class="list-group-item"><a class=" nav-link" href="category_list.php"><i class="feather-layers"></i> Category List</a></li>

                <li></li>
            </ul>
        </div>
    <?php } ?>

    <div>
        <h5 class="text-black-50 text-uppercase">Post Management</h5>
        <ul class="list-group">
            <li class="list-group-item"><a class=" nav-link " href="post_create.php"><i class="feather-plus-circle"></i> Create Post</a></li>
            <li class="list-group-item"><a class=" nav-link" href="post_list.php"><i class="feather-list"></i> Post List</a></li>

            <li></li>
        </ul>
    </div>
    <?php if($_SESSION['user']['role'] == 0) { ?>
        <div>
            <h5 class="text-black-50 text-uppercase">Users</h5>
            <ul class="list-group">
                <li class="list-group-item"><a class=" nav-link " href="user_list.php"><i class="feather-users"></i> User List</a></li>
            </ul>
        </div>
    <?php } ?>
    <div>
        <h5 class="text-black-50 text-uppercase">Profile</h5>
        <ul class="list-group">
            <li class="list-group-item"><a class="nav-link" href="change_password.php"><i class="feather-unlock"></i> Change Password</a>
            </li>
            <li class="list-group-item"><a class=" nav-link" href="edit_profile.php"><i class="feather-aperture"></i> Edit Profile</a></li>

            <li></li>
        </ul>
    </div>
    <a href="logout.php" class="btn btn-secondary w-100">Log out <i class="feather-log-out"></i></a>
</div>