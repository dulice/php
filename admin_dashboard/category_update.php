<?php
    require_once "core/auth.php";
    require_once "template/header.php";
    $id = $_GET['id'];
    $row = singleListCategroy($id);
    if(isset($_GET['updateBtn'])) {
        updateCategroy($id);
    }
?>

<div class="card mb-4">
    <div class="card-body">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="category_list.php">List Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
            </ol>
        </nav>
    </div>
</div>

<form method="GET" class="">
    <div class="row">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
        <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control w-75 col-11 col-sm-10">
        <button name="updateBtn" class="btn btn-primary col-1 col-sm-2">Update</button>
    </div>
</form>

<?php require_once "template/footer.php";