<?php
    session_start();
    if(!isset($_SESSION['adminname'])){
        header('location: ../login.php');
    }

?>
<?php include("includes/adminHeader.php")?>
<?php include("includes/adminNavbar.php")?>
    <main class="main-wrap">
    <?php include("includes/adminTopbar.php")?>
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Dashboard</h2>
                    
                </div>
                <!-- <div>
                    <a href="#" class="btn btn-light rounded font-md">Export</a>
                    <a href="#" class="btn btn-light rounded  font-md">Import</a>
                    <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
                </div> -->
            </div>
            <!-- <div class="card mb-4"> -->
                
                <div class="container">
                <div class="row">
                <div class="col-lg-4">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Revenue</h6>
                                <span>PKR<?php 
                                    $result = $ordermodel->countrevenue();
                                    $revenue = 0;
                                    if($result->num_rows>0){
                                        while($rows = $result->fetch_assoc()){
                                            $revenue += $rows['total_price'];
                                        }}
                                        echo $revenue;
                                    ?></span>
                                <span class="text-sm">
                                    Shipping fees are not included
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Orders</h6> <span><?php 
                                    $result = $ordermodel->countorders();
                                    if($result->num_rows>0){
                                        while($rows = $result->fetch_assoc()){
                                            echo $rows['countorders'];
                                        }}
                                    ?></span>
                                <span class="text-sm">
                                    All orders
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Products</h6> <span>
                                    <?php 
                                    $result = $productModel->countproducts();
                                    if($result->num_rows>0){
                                        while($rows = $result->fetch_assoc()){
                                            echo $rows['countproduct'];
                                        }}
                                    ?>
                                </span>
                                <span class="text-sm">
                                    In <?php 
                                    $result = $categorymodel->countcat();
                                    if($result->num_rows>0){
                                        while($rows = $result->fetch_assoc()){
                                            echo $rows['countcat'];
                                        }}
                                    ?> Categories
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
                
            </div>
                </div>
                <!-- card-body end// -->
            <!-- </div> -->
            <!-- card end// -->
            
        </section>
        <!-- content-main end// -->
    
    </main>
<?php include("includes/adminFotter.php")?>