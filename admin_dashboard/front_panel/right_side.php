<div class="col-12 col-md-4">
    <div class="position-sticky">
        <div class="card">
            <?php if(isset($_SESSION['user']['username'])) { ?>
                <div class="card-body">
                    <p>Hello <?php echo $_SESSION['user']['username']; ?></p>
                    <a href="dashboard.php" class="btn btn-primary">Go To Dashboard</a>
                </div>
            <?php } else { ?>
                <div class="card-body">
                    <p>Hello Guess</p>
                    <a href="register.php" class="btn btn-primary">Register Here</a>
                </div>
            <?php } ?>
        </div>
        <div >
            <h4>Categories</h4>
            <div class="list-group mt-3">
                <div class="list-group-item <?php echo isset($_GET['category_id']) ? '' : 'active' ?>">
                    <a href="index.php" class="text-decoration-none" style="color: inherit;">All Categories</a>
                </div>
                <?php foreach(listCategory() as $c) { ?>
                    <div class="list-group-item <?php echo isset($_GET['category_id']) ? ($_GET['category_id'] == $c['id'] ? "active": "") : "" ?>">

                        <?php if($c['ordering'] == 1) {  ?>
                            <i class="feather-paperclip"></i>
                        <?php } ?>
                        
                        <a class="text-decoration-none" href="listbycategory.php?category_id=<?php echo $c['id'] ?>" style="color: inherit;"><?php echo $c['title']; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="my-3">
            <h4>Advertisement</h4>
            <p>Ads Here</p>
        </div>
        <div>
            <h4>Search By Date</h4>
            <form action="search_by_date.php" method="post">
                <div class="form-group mb-2">
                    <label for="">Start Date:</label>
                    <input type="date" name="start" id="" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="">End Date:</label>
                    <input type="date" name="end" id="" class="form-control">
                </div>
                <button class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>