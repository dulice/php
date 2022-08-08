<?php
    // echo "<pre>";
    require_once "core/auth.php";
    require_once "template/header.php";
?>

                <!-- counter up -->
                <div class="row counter-card">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body" onclick="linkClick('post_list.php')">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="feather-pie-chart h1 text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter"><?php echo totalCount('viewers') ?></span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Total Vistiors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4" onclick="linkClick('post_list.php')">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="feather-list h1 text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter"><?php echo totalCount('posts') ?></span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Total Posts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4" onclick="linkClick('category_list.php')">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="feather-layers h1 text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter"><?php echo totalCount('categories') ?></span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Total Categories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4" onclick="linkClick('user_list.php')">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="feather-users h1 text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter-location"><?php echo totalCount('users') ?></span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Total Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between align-items-end">
                    <!-- lineChart -->
                    <div class="col-12 col-lg-7 mb-4">
                        <div class="shadow rounded overflow-hidden">
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h3>Visitors</h3>
                                    <div class="">
                                        <img class="avator user-img rounded-circle" src="<?php echo url() ?>/assets/image/user/avatar1.jpg" alt="avator">
                                        <img class="avator user-img rounded-circle" src="<?php echo url() ?>/assets/image/user/avatar2.jpg" alt="avator">
                                        <img class="avator user-img rounded-circle" src="<?php echo url() ?>/assets/image/user/avatar3.jpg" alt="avator">
                                        <img class="avator user-img rounded-circle" src="<?php echo url() ?>/assets/image/user/avatar4.jpg" alt="avator">
                                        <img class="avator rounded-circle" src="<?php echo url() ?>/assets/image/user/avatar5.jpg" alt="avator">

                                    </div>
                                </div>
                                <canvas id="lineChart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                        
                        <!-- dougnunt -->
                        <div class="col-12 col-md-6 col-lg-5 mb-4 shadow">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h4 class="mb-0">Category / Post</h4>
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <canvas id="orderPlace" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    
                    <!-- table -->
                   <div class="col-12 card mb-4 shadow">
                       <div class="card-head d-flex justify-content-between align-items-center mt-4">
                           <h4>Post List</h4>
                           <i class="fa fa-openid text-primary"></i>
                       </div>
                       <div class="card-body">
                        <table id="list" class="display table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <?php if($_SESSION['user']['role'] != 2) { ?>
                                        <th>User</th>
                                    <?php } ?>
                                    <th>View</th>
                                    <th>Control</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(listPost() as $row) { ?>
                                    
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td>
                                            <?php echo textLimit($row['title']); ?>
                                        </td>
                                        <td><?php echo strip_tags(html_entity_decode((textLimit($row['description'])))) ?></td>
                                        <td class="text-nowrap">
                                            <?php echo (singleListCategroy($row['category_id'])['title']) ?>                                      
                                        </td>

                                        <?php if($_SESSION['user']['role'] != 2) { ?>
                                            <td class="text-nowrap"><?php echo (user($row['user_id'])['username']) ?></td>
                                        <?php } ?>

                                        <td class="text-nowrap">
                                            <?php echo count(countByPost($row['id'])) ?>                                      
                                        </td>
                                        
                                        <td class='text-nowrap'>
                                            <a class='btn btn-sm btn-outline-warning me-1 text-decoration-none' href="post_detail.php?id=<?php echo $row['id']; ?>"> 
                                                <i class="feather-info"></i>
                                            </a>
                                            <a class='btn btn-sm btn-outline-primary me-1 text-decoration-none' href="post_update.php?id=<?php echo $row['id'] ?>"> 
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Are you sure, you want to delete it?')" class='btn btn-sm btn-outline-danger text-decoration-none' href="post_delete.php?id=<?php echo $row['id'] ?>">
                                                <i class="feather-trash"></i>
                                            </a>
                                        </td>
                                        <td class="text-nowrap"><?php echo showTime($row['created_at']) ?></td>
                                    </tr>
                                <?php } ?>
                                    
                            </tbody>
                        </table>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo url() ?>/assets/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/data_table/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/way_point/jquery.waypoints.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/counter_up/counter_up.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/chart_js/Chart.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/slick/slick.min.js"></script>
    <script src="<?php echo url() ?>/assets/js/app.js"></script>
    

    <?php 
        $categories = [];
        $totalPost = [];
        foreach( listCategory() as $c) {
            array_push($categories, $c['title']);

            $total = totalCountChart('posts', 'category_id', $c['id']);
            array_push($totalPost, $total);
        }  
        
        $visitDate=[];
        $visitors = [];
        for($i=10; $i>=0; $i--) {
            $today = date('Y-m-d');
            $date=date_create($today);
            date_sub($date,date_interval_create_from_date_string("$i days"));
            array_push($visitDate, date_format($date,"Y-m-d"));

            $total = viewPerDay(date_format($date,"Y-m-d"));
            array_push($visitors, $total);
        }  
        echo json_encode($visitors);

    ?>
 
    <script>

        $('#list').DataTable({
            order: [[0, 'desc']],
        });


        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

        $('.counter-location').counterUp({
            delay: 10,
            time: 1000
        });

        $('.slide').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false
        });

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })

        let dateArr = <?php echo json_encode($visitDate); ?>;
        // let orderCountArr = [7, 5, 6, 4, 6, 4,8,6,8,9,6];
        let viewerCountArr = <?php echo json_encode($visitors); ?>;
        const lineChart = document.getElementById('lineChart').getContext('2d');
        const myChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: dateArr,
                datasets: [
                {
                    label: 'Viewer Count',
                    data: viewerCountArr,
                    backgroundColor: [
                        '#19875430',
                
                    ],
                    borderColor: [
                        '#198754',
                    
                    ],
                    borderWidth: 1
                }
            ]
            },
            options: {
                legend: {
                    labels: {
                        usePointStyle: true
                    }
                },
                elements: {
                    line: {
                        tension: 0
                    }
                },
                scales: {
                    yAxes: [{
                        display: false,
                    }],
                    xAxes: [{
                        display: false,
                    }]
                }     
            }
        });



        let orderFromPlace = <?php echo json_encode($totalPost); ?>;
        let places = <?php echo json_encode($categories); ?>;

        const orderPlace = document.getElementById('orderPlace');
        const orderPlaceChart = new Chart(orderPlace, {
            type: 'doughnut',
            data: {
                labels: places,
                datasets: [{
                    label: 'Order Place',
                    data: orderFromPlace,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 10, 192, 0.5)',
                        'rgba(100, 99, 132, 0.5)',
                        'rgba(213, 162, 235, 0.5)',
                        'rgba(255, 213, 86, 0.5)',
                        'rgba(75, 93, 192, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 10, 192, 1)',
                        'rgba(100, 99, 132, 1)',
                        'rgba(213, 162, 235, 1)',
                        'rgba(255, 213, 86, 1)',
                        'rgba(75, 93, 192, 1)'
                    ],
                    borderWidth: 1
                }
            ]
            },
            options: {
                legend: {
                    position: "bottom",
                    labels: {
                        usePointStyle: true,
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                
            }
        });
    </script>

</body>

</html>