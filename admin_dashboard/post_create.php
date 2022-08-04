<?php
    require_once "core/auth.php";
    require_once "template/header.php";
    if(isset($_POST['addBtn'])) {
        createPost();
    }

?>
    <div class="card mb-4">
        <div class="card-body">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="post_list.php">List Post</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                </ol>
            </nav>
        </div>
    </div>

<form method="post" class="">
    <div class="form-group mb-3">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group mb-3">
        <label for="">Category</label>
        <select name="category_id" id="" class="form-select">
            <?php foreach(listCategory() as $list) { ?>

                <option value="<?php echo $list['id']; ?>"> <?php echo $list['title']; ?></option>

            <?php } ?>
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="">Description</label>
        <textarea name="description" id="" rows="10" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary" name="addBtn">Add</button>
</form>

<?php require_once "template/footer.php";