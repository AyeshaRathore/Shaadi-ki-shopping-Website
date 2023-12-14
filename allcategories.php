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
                    <h2 class="content-title card-title">Sub-Category Listings</h2>
       
                </div>
                <!-- <div>
                    <a href="addMen.php" class="btn btn-primary btn-sm rounded">Create new</a>
                </div> -->
            </div>
            <div class="card mb-4">
                
                <!-- card-header end// -->
                <div class="card-body">
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <?php
                                $result=$categorymodel->subCat();
                                if($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $categorymodel->sId=$rows['Id'];
                                        $categorymodel->subcategory=$rows['subcategory'];
                                        $categorymodel->description=$rows['description'];
                                        echo '
                                  
                                    <div class="col-lg-4 col-sm-4 col-4 col-price"> <span>'.$categorymodel->subcategory.'</span> </div>
                                    <div class="col-lg-4 col-sm-4 col-4 col-price"> <span>'.$categorymodel->description.'</span> </div>
                                    <div class="col-lg-4 col-sm-4 col-4 col-action text-end">
                                        
                                        <a href="allcategories.php?delete='.$categorymodel->sId.'" class="btn btn-sm font-sm btn-light rounded">
                                            <i class="material-icons md-delete_forever"></i> 
                                        </a>
                                        <a href="editSub.php?edit='.$categorymodel->sId.'" class="btn btn-sm font-sm btn-light rounded">
                                            <i class="material-icons md-edit"></i> 
                                        </a>
                                    </div>';
                                    }
                                }
                                $categorymodel->delSubcat();
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