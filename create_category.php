<?php
    require_once "template/header.php";
    if(isset($_GET['addBtn'])) {
        $message = $_GET['message'];
        $sql = "INSERT INTO todo(message) VALUES ('$message')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>
            location.href = 'category_list.php'
            </script>";
        } else {
            die("create error");
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