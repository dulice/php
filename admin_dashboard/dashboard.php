<?php
    require_once "core/auth.php";
    require_once "template/header.php";
?>

                <!-- counter up -->
                <div class="row counter-card">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa fa-shopping-bag fa-2x text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter">123</span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Today Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa fa-users fa-2x text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter">455</span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Total Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa fa-dropbox fa-2x text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter">223</span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Total Items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa fa-location-arrow fa-2x text-primary"></i>
                                    <div class="title">
                                        <h3 class="mb-0">
                                            <span class="counter-location">14</span>
                                        </h3>
                                        <p class="text-black-50 mb-0">Support Location</p>
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
                                    <h3>Orders & Views</h3>
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

                        <!-- products slice-->
                        <div class="col-12 col-md-6 col-lg-5 card shadow mb-4 card-display ">
                            <div class="slide product-container">
                                <div class="">
                                    <div class="card-body ">
                                        <div class="row justify-content-between align-items-end flex-column-reverse">
                                            <div class="col col-md-12">
                                                <h4>Coffee</h4>
                                                <p class="text-black-50 mb-0">1500 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col col-md-12">
                                                <img class="item mx-auto" src="<?php echo url() ?>/assets/image/item/item1.png" alt="book">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-end flex-column-reverse">
                                            <div class="col col-md-12">
                                                <h4>Stick</h4>
                                                <p class="text-black-50 mb-0">18000MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col col-md-12">
                                                <img class="item mx-auto" src="<?php echo url() ?>/assets/image/item/item2.png" alt="book">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-end flex-column-reverse">
                                            <div class="col col-md-12">
                                                <h4>Book</h4>
                                                <p class="text-black-50 mb-0">5000 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col col-md-12">
                                                <img class="item mx-auto" src="<?php echo url() ?>/assets/image/item/item3.png" alt="book">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-end flex-column-reverse">
                                            <div class="col">
                                                <h4>Wallet</h4>
                                                <p class="text-black-50 mb-0">20000 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <img class="item mx-auto" src="<?php echo url() ?>/assets/image/item/item4.png" alt="book">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- dougnunt -->
                        <div class="col-12 col-md-6 col-lg-5 mb-4 shadow">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h4 class="mb-0">Orders Place</h4>
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <canvas id="orderPlace" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    
                    <!-- table -->
                   <div class="col-12 col-lg-7 card mb-4 shadow">
                       <div class="card-head d-flex justify-content-between align-items-center mt-4">
                           <h4>Subscriber List</h4>
                           <i class="fa fa-openid text-primary"></i>
                       </div>
                       <div class="card-body">
                            <div class="">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Contact</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Maria Anders</td>
                                            <td>Germany</td>
                                        </tr>
                                        <tr>
                                            <td>Centro comercial Moctezuma</td>
                                            <td>Francisco Chang</td>
                                            <td>Mexico</td>
                                        </tr>
                                        <tr>
                                            <td>Ernst Handel</td>
                                            <td>Roland Mendel</td>
                                            <td>Austria</td>
                                        </tr>
                                        <tr>
                                            <td>Island Trading</td>
                                            <td>Helen Bennett</td>
                                            <td>UK</td>
                                        </tr>
                                        <tr>
                                            <td>Laughing Bacchus Winecellars</td>
                                            <td>Yoshi Tannamuri</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr>
                                            <td>Magazzini Alimentari Riuniti</td>
                                            <td>Giovanni Rovelli</td>
                                            <td>Italy</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                       </div>
                   </div>


                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo url() ?>/assets/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/way_point/jquery.waypoints.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/counter_up/counter_up.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/chart_js/Chart.min.js"></script>
    <script src="<?php echo url() ?>/assets/vendor/slick/slick.min.js"></script>
    <script src="<?php echo url() ?>/assets/js/app.js"></script>
    <script src="<?php echo url() ?>/assets/js/counterup.js"></script>