<?php
    require_once "core/auth.php";
    require "core/base.php";
    require "core/functions.php";
    $id = $_GET['id'];
    $row = singleListPost($id);
    if(isset($_POST['updateBtn'])) {
        updatePost($id);
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/feather-icons-web/feather.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/style/style.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/style/custom.css">

    </head>

    <body>
        <section class="container-fluid">
            <div class="row">
                <!-- menu sidebar  -->
                
                <?php require_once "template/sidebar.php" ?>

                <div class="col-12 col-md-9 vh-100 overflow-scroll">
                <!-- nav bar -->
                <div class="row justify-content-between align-items-center py-2 bg-primary mb-4 position-sticky ">
                    <!-- input -->                   
                    <div class="col-4 col-md-3">
                        <i class="open fa fa-bars fa-lg me-3 text-light d-block d-md-none"></i>
                        <div class="d-flex align-items-center d-none d-md-block">
                            <form action="#" class="input-group">
                                <input type="text" class="form-control " placeholder="Search">
                                <button class="btn btn-light input-group-text">
                                    <i class="fa fa-search "></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- profile -->
                    <div class="profile col-6 col-md-3 text-end">
                        <div class="btn-group">
                            <button class="btn btn-light sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="<?php echo url() ?>/assets/image/<?php echo $_SESSION['user']['photo']?>" alt="profile image" class="rounded-circle avator">
                                <span><?php echo $_SESSION['user']['username'] ?></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

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
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="item-add-title d-flex align-items-center">
                        <i class="feather-fa-plus-circle text-primary"></i>
                        <span class="h4 mb-0 ps-2">Create New Post</span>
                    </div>
                    <button onclick="linkClick('item_list.php')" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form method="post" class="">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>">
                            </div>
                            <div class="form-group mb-3 ">
                                <label for="">Description</label>
                                <textarea name="description" id="post-description" rows="10" class="form-control" ><?php echo $row['description'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group mb-3">
                                <h4>
                                    <i class="feather-layers"></i>
                                    <span>Categories</span>
                                </h4>
                                    <?php foreach(listCategory() as $list) { ?>
            
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="category_id" id="radio<?php echo $list['id']; ?>" value="<?php echo $list['id']; ?>" <?php echo $list['id'] === $row['category_id'] ? "checked" : "" ?>>
                                            <label class="form-check-label" for="radio<?php echo $list['id']; ?>">
                                                <?php echo $list['title']; ?>
                                            </label>
                                        </div>
            
                                    <?php } ?>
                            </div>
                            <button class="btn btn-primary" name="updateBtn">Update</button>
                        </div>
                    </div>             
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <script>
            $("#post-description").summernote({
                placeholder: "Add Description...",
                tabsize: 2,
                height: 500
            });
        </script>
    </body>
</html>