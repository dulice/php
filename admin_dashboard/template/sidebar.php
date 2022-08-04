<div class="menu col-12 col-md-3 vh-100 sidebar overflow-scroll ">
    <div class="logo  bg-light d-flex justify-content-between align-items-center ">
        <div class="logo d-flex justify-content-start align-items-center m-4">
            <i class="fa fa-shopping-cart fa-lg text-primary me-2"></i>
            <h5 class="text-primary mb-0">My Shop</h5>
        </div>
        <i class="fa fa-xing m-4 d-block d-md-none"></i>
    </div>
    <div>
        <ul class="list-group">
            <li class="list-group-item "><a class=" nav-link "
                    href="dashboard.php">Dashboard</a></li>
            <li></li>
        </ul>
    </div>
    <div>
        <h5 class="text-black-50 text-uppercase">Item Management</h5>
        <ul class="list-group">
            <li class="list-group-item"><a class="nav-link " href="item_add.php">Create New Item</a></li>
            <li class="list-group-item"><a class=" nav-link" href="item_list.php">Item Lists</a></li>

            <li></li>
        </ul>
    </div>
    <div>
        <h5 class="text-black-50 text-uppercase">Category Management</h5>
        <ul class="list-group">
            <li class="list-group-item"><a class=" nav-link " href="category_create.php">Create Category</a></li>
            <li class="list-group-item"><a class=" nav-link" href="category_list.php">Category List</a></li>

            <li></li>
        </ul>
    </div>
    <div>
        <h5 class="text-black-50 text-uppercase">Post Management</h5>
        <ul class="list-group">
            <li class="list-group-item"><a class=" nav-link " href="post_create.php">Create Post</a></li>
            <li class="list-group-item"><a class=" nav-link" href="post_list.php">Post List</a></li>

            <li></li>
        </ul>
    </div>
    <?php if($_SESSION['user']['role'] === 0) { ?>
        <div>
            <h5 class="text-black-50 text-uppercase">Users</h5>
            <ul class="list-group">
                <li class="list-group-item"><a class=" nav-link " href="user_list.php">User List</a></li>
            </ul>
        </div>
    <?php } ?>
    <div>
        <h5 class="text-black-50 text-uppercase">Profile</h5>
        <ul class="list-group">
            <li class="list-group-item"><a class="nav-link" href="change_password.php">Change Password</a>
            </li>
            <li class="list-group-item"><a class=" nav-link" href="edit_profile.php">Edit Profile</a></li>

            <li></li>
        </ul>
    </div>
</div>