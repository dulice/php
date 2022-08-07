<?php
require "core/base.php";
require "core/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/feather-icons-web/feather.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/slick/slick.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/vendor/slick/slick-theme.css">
        <link rel="stylesheet" href="<?php echo url() ?>/assets/style/custom.css">

    </head>

    <body class="text-dark">
        <section class="container-fluid">
            <div class="row">
                <!-- menu sidebar  -->
                
                <?php require_once "sidebar.php" ?>

                <div class="col-12 col-md-9 vh-100 overflow-scroll">
                <!-- nav bar -->
                <div class="row justify-content-between align-items-center py-2 bg-primary mb-4 position-sticky ">
                    <!-- input -->                   
                    <div class="col-4 col-md-3">
                        <i class="open fa fa-bars fa-lg me-3 text-light d-block d-md-none"></i>
                        <div class="d-flex align-items-center d-none d-md-block">
                            <form action="<?php echo url() ?>search_post.php" class="input-group">
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
                            <button class="btn btn-light bg-light sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="<?php echo url() ?>/assets/image/<?php echo $_SESSION['user']['photo']?>" alt="profile image" class="rounded-circle avator">
                                <span><?php echo $_SESSION['user']['username'] ?></span>
                            </button>
                            <ul class="dropdown-menu" style="z-index: 2002">
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