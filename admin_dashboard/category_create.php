<?php
    require_once "core/auth.php";
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

<form method="post" class="">
    <div class="row">
        <input type="text" name="title" class="form-control w-75 col-11 col-sm-10" placeholder="Categories">
        <button name="addBtn" class="btn btn-primary col-1 col-sm-2">Add</button>
    </div>
</form>

<?php require_once "template/footer.php";