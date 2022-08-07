<?php
    require_once "core/auth.php";
    require_once "core/isAdmin&isEditor.php";
    require_once "template/header.php";
    if(isset($_POST['addBtn'])) {
        createAds();
    }

?>        
                <!-- breadcrumbs-container-->
                <div class="card mb-4">
                    <div class="card-body">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="item_list.php">Ads List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add new ads</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- add item form action -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="item-add-title d-flex align-items-center">
                                        <i class="fa fa-plus-circle fa-lg text-primary"></i>
                                        <span class="h4 mb-0 ps-2">Add Item</span>
                                    </div>
                                    <button onclick="linkClick('ads_list.php')" class="btn btn-outline-primary">
                                        <i class="fa fa-list"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="row" enctype="multipart/form-data" method="post">
                                    <div class="col-12">
                                        <div class="form-inline mb-3">
                                            <label for="">Owner Name: </label>
                                            <input type="text" class="form-control" name="owner_name">
                                        </div>
                                        <div class="form-inline mb-3">
                                            <label for="">Photo: </label>
                                            <input type="file" class="form-control" name="photo" accept="image/*">
                                        </div>
                                        <div class="form-inline mb-3">
                                            <label for="">Link: </label>
                                            <input type="text" class="form-control" name="link">
                                        </div>
                                        <div class="form-inline mb-3">
                                            <label for="">Start Date: </label>
                                            <input type="date" class="form-control" name="start">
                                        </div>
                                        <div class="form-inline mb-3">
                                            <label for="">End Date: </label>
                                            <input type="date" class="form-control" name="end">
                                        </div>
                                        <button class="btn btn-primary" name="addBtn">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "template/footer.php";
