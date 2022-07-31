<?php
    require_once "template/header.php";
    if(isset($_GET['addBtn'])) {
        if(createCategory()) {
            echo "<script> location.href = 'category_list.php' </script>";
        }
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

<form method="GET" class="">
    <div class="form-inline">
        <input type="text" name="message" class="form-control">
        <button name="addBtn" class="btn btn-primary">Add</button>
    </div>
</form>

<?php require_once "template/footer.php";