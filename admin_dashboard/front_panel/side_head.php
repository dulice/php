<div class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark my-3 rounded-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">My Post</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </ul>
                <form class="d-flex" role="search" action="search_post.php" method="post">
                    <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div>
            <?php foreach(showAds() as $ad) { ?>
                <a href="<?php echo $ad['link'] ?>" target="_blank">
                    <img src="<?php echo $ad['photo'] ?>" alt="" class="w-100 mb-4 rounded">
                </a>
            <?php } ?>
        </div>
    </div>
</div>