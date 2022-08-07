<?php 

session_start();
require_once "core/functions.php"; ?>
<?php require_once "front_panel/head.php"; ?>
<?php require_once "front_panel/side_head.php"; ?>

<div class="container-fluid">
    <div class="container">
        <div class="card mb-4">
            <div class="card-body">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                    </ol>
                </nav>
            </div>          
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="dropdown text-end mb-3" style="z-index: 2010;">
                    <button class="btn btn-primary bg-primary text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort News
                    </button>
                    <?php
                        if(isset($_GET['sort_type']) && isset($_GET['sort_by'])) {
                            $sort_type = $_GET['sort_type'];
                            $sort_by = strtoupper($_GET['sort_by']);
                            $posts = fPost($sort_type, $sort_by);
                        } else {
                            $posts = fPost();
                        }
                    ?>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?sort_type=created_at&sort_by=desc">Newest to Latest</a></li>
                        <li><a class="dropdown-item" href="?sort_type=created_at&sort_by=asc">Latest to Newest</a></li>
                        <li><a class="dropdown-item" href="index.php">Default</a></li>
                    </ul>
                </div>
                <?php foreach($posts as $p) { ?>
                    <?php include "card_post.php" ?>
                <?php } ?>
            </div>
            <?php require_once "front_panel/right_side.php" ?>
        </div>
    </div>
</div>
<?php require_once "front_panel/foot.php"; ?>