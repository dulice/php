<?php
    require_once "template/header.php";
    $id = $_GET['id'];
    $fetchDetail = "SELECT * FROM todo WHERE id=$id";
    $fetchMessage = mysqli_query($conn, $fetchDetail);
    $row = mysqli_fetch_assoc($fetchMessage);
    if(isset($_GET['updateBtn'])) {
        $message = $_GET['message'];
        $sql = "UPDATE todo SET message='$message' WHERE id=$id";
        if(mysqli_query($conn, $sql)) {
            echo "<script>
            location.href = 'category_list.php'
            </script>";
        } else {
            die("update error");
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