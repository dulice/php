<?php
    require_once "template/header.php";
    $id = $_GET['id'];
    $row = singleListCategroy($id);
    if(isset($_GET['updateBtn'])) {
        if(updateCategroy($id)) {
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
                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
            </ol>
        </nav>
    </div>
</div>

<form method="GET" class="">
    <div class="form-inline">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
        <input type="text" name="message" value="<?php echo $row['message'] ?>" class="form-control">
        <button name="updateBtn" class="btn btn-primary">Update</button>
    </div>
</form>

<?php require_once "template/footer.php";