<?php
    session_start();
    if(!isset($_SESSION['adminname'])){
        header('location: ../login.php');
    }

?>
<?php include("includes/adminHeader.php") ?>
<?php include("includes/adminNavbar.php") ?>
<main class="main-wrap">
    <?php include("includes/adminTopbar.php") ?>
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Edit Sub-Category</h2>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <?php
                            $categorymodel->editSub();
                            // if()
                            $result=$categorymodel->subCat();
                                if($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $categorymodel->sId=$rows['Id'];
                                        $categorymodel->subcategory=$rows['subcategory'];
                                        $categorymodel->description=$rows['description'];
                                    }
                                }
                        ?>
                        <form action="" method="post" enctype = "multipart/form-data">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Sub Category</label>
                                <input type="text" placeholder="Type here" <?php
                                                    if(isset($categorymodel->errors['subcategory'])){
                                                        echo "class = 'border-danger form-control'";
                                                    }
                                                    else{
                                                        echo 'class="form-control"';
                                                    }
                                                ?> id="product_name" name="subcategory"  value ="<?php if(isset($categorymodel->subcategory)){
                                                    echo $categorymodel->subcategory;
                                                } ?>">
                                                 
                            </div>
                            

                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" placeholder="Type here" rows="4" name="description"><?php if(isset($categorymodel->description)){
                                                    echo $categorymodel->description;
                                                } ?></textarea>
                                                
                            </div>
                            
                            
                            <div>
                                <button class="btn btn-md rounded font-sm hover-up" type="submit" name="submit">Publish</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- card end// -->
                
            </div>
           
        </div>
    </section>
    <!-- content-main end// -->

</main>
<?php include("includes/adminFotter.php") ?>