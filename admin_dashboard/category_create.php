<?php
    require_once "core/auth.php";
    require_once "core/isAdmin&isEditor.php";
    require_once "template/header.php";
    if(isset($_POST['addBtn'])) {
        createCategory();
    }

?>
    <div class="card mb-4">
        <div class="card-body">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category_list.php">List Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="item-add-title d-flex align-items-center">
                            <i class="feather-plus-circle h4 m-0 text-primary"></i>
                            <span class="h4 mb-0 ps-2">Add Category</span>
                        </div>
                        <button onclick="linkClick('category_list.php')" class="btn btn-outline-primary">
                            <i class="feather-layers h4"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                <form method="post" class="">
                    <div class="row m-auto">
                        <input type="text" name="title" class="form-control w-75 col-11 col-sm-10" placeholder="Categories">
                        <button name="addBtn" class="btn btn-primary col-1 col-sm-2">Add</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once "template/footer.php";