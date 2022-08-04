<?php
    require_once "core/auth.php";
    require_once "template/header.php";
    $id = $_GET['id'];
    $row = singleListPost($id);
    if(isset($_POST['updateBtn'])) {
        updatePost($id);
    }
?>

<div class="card mb-4">
    <div class="card-body">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="post_list.php">List Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
            </ol>
        </nav>
    </div>
</div>

<form method="post" class="">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="form-group mb-3">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>">
    </div>

    <div class="form-group mb-3">
        <label for="">Category</label>
        <select name="category_id" id="" class="form-select">
            <?php foreach(listCategory() as $list) { ?>
                <option value="<?php echo $list['id']; ?>" <?php echo $list['id'] === $row['category_id'] ? "selected" : "" ?>> <?php echo $list['title']; ?></option>

            <?php } ?>
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="">Description</label>
        <textarea name="description" id="" rows="10" class="form-control" ><?php echo $row['description'] ?></textarea>
    </div>
    <button class="btn btn-primary" name="updateBtn">Add</button>
</form>

<?php require_once "template/footer.php";