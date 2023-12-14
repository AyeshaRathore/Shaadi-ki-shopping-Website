<?php include("includes/adminHeader.php")?>
<?php include("includes/adminNavbar.php")?>
    <main class="main-wrap">
    <?php include("includes/adminTopbar.php")?>
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Men's Collections - Groom</h2>
       
                </div>
                <div>
                    <a href="addMen.php" class="btn btn-primary btn-sm rounded">Create new</a>
                </div>
            </div>
            <div class="card mb-4">
                
                <!-- card-header end// -->
                <div class="card-body">
                    <article class="itemlist">
                        <div class="row align-items-center">
                           
                            <div class="col-lg-4 col-sm-4 col-4 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/1.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">T-shirt for men medium size</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 col-price"> <span>PKR 34.50</span> </div>
                            <!-- <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div> -->
                            
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <!-- <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a> -->
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> 
                                </a>
                            </div>
                        </div>
                        <!-- row .// -->
                    </article>
                
               
                </div>
                <!-- card-body end// -->
            </div>
           
        </section>
        <!-- content-main end// -->
    
    </main>
<?php include("includes/adminFotter.php")?>