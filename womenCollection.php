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
                    <h2 class="content-title card-title">Women's Collections</h2>
       
                </div>
                <div>
                    <a href="addWomen.php" class="btn btn-primary btn-sm rounded">Create new</a>
                </div>
            </div>
            <div class="card mb-4">
                
                <!-- card-header end// -->
                <div class="card-body">
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <?php
                                $result=$productModel->readallbycatid();
                                if($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $productModel->id=$rows['Id'];
                                        $productModel->title=$rows['title'];
                                        $productModel->description=$rows['description'];
                                        $productModel->price=$rows['price'];
                                        $productModel->image=$rows['imageurl'];
                                        $productModel->categories=$rows['subcategory'];
                                        echo '<div class="col-lg-4 col-sm-4 col-4 flex-grow-1 col-name">
                                        <a class="itemside" href="#">
                                            <div class="left">
                                                <img src="../assets/imgs/shop/'.$productModel->image.'" class="img-sm img-thumbnail" alt="Item">
                                            </div>
                                            <div class="info">
                                                <h6 class="mb-0">'.$productModel->title.'</h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-2 col-category"> <span>'.$productModel->categories.'</span> </div>
                                    <div class="col-lg-2 col-sm-2 col-2 col-price"> <span>PKR '.$productModel->price.'</span> </div>
                                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                        
                                        <a href="womenCollection.php?delete='.$productModel->id.'" class="btn btn-sm font-sm btn-light rounded">
                                            <i class="material-icons md-delete_forever"></i> 
                                        </a>
                                        <a href="editWomen.php?edit='.$productModel->id.'" class="btn btn-sm font-sm btn-light rounded">
                                            <i class="material-icons md-edit"></i> 
                                        </a>
                                    </div>';
                                    }
                                }
                                $productModel->womendelete();
                            ?>
                           
                            
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