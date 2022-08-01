<?php
    require_once "template/header.php"
?>         
                <!-- breadcrumbs-container-->
                <div class="card mb-4">
                    <div class="card-body">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="item_list.php">List Item</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- add item form action -->
                <div class="row mb-4">
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="item-add-title d-flex align-items-center">
                                        <i class="fa fa-plus-circle fa-lg text-primary"></i>
                                        <span class="h4 mb-0 ps-2">Add Item</span>
                                    </div>
                                    <button onclick="linkClick('item_list.php')" class="btn btn-outline-primary">
                                        <i class="fa fa-list"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Photo Upload                                          
                                            </label>
                                            <span type="button" id="popover" class="" data-bs-container="body" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-content="Support only png and jpg">
                                                <i class="fa fa-exclamation-circle text-primary"></i>
                                            </span>
                                            
                                            <input class="form-control" type="file" id="formFile" accept="image/png, image/jpg">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="item-name" class="mb-2">Item Name</label>
                                            <input type="text" class="form-control" id="item-name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="item-name" class="mb-2">Item Name</label>
                                            <select name="item-type" class="form-select" id="item-type">
                                                <option value="0">Dry Products</option>
                                                <option value="1">Grossory Products</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="item-name" class="mb-2">Category</label>
                                            <select name="item-type" class="form-select" id="item-type">
                                                <option value="" selected disabled>Select Category</option>
                                                <option value="0">Dry Products</option>
                                                <option value="1">Grossory Products</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="item-name" class="mb-2">Sub Category</label>
                                            <select name="item-type" class="form-select" id="item-type">
                                                <option value="0">Dry Products</option>
                                                <option value="1">Grossory Products</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="item-quantity" class="mb-2">Item Quantity</label>
                                                <input type="text" class="form-control" id="item-quantity">
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label for="unit" class="mb-2">Unit</label>
                                                <select name="unit" id="unit" class="form-select">
                                                    <option value="0">Dry Products</option>
                                                    <option value="1">Grossory Products</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="price" >Price</label>
                                            <input type="number" id="price" class="form-control">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="description" class="mb-2">Description</label>
                                            <textarea id="description" class="form-control" rows="9"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary float-right" type="button">Add Item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "template/footer.php";
