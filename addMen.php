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
                    <h2 class="content-title">Add Men's collection Products</h2>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <?php
                            $productModel->create();
                        ?>
                        <form action="" method="post" enctype = "multipart/form-data">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here" <?php
                                                    if(isset($productModel->errors['title'])){
                                                        echo "class = 'border-danger form-control'";
                                                    }
                                                    else{
                                                        echo 'class="form-control"';
                                                    }
                                                ?> id="product_name" name="title">
                                                <span class="text-danger">
                                            <?php 
                                                    if(isset($productModel->errors['title'])){
                                                        echo $productModel->errors['title'];
                                                    }
                                                    ?>
                                            </span>   
                            </div>
                            <div class="mb-4">
                                
                                <label for="product_name" class="form-label">Product Images</label>
                                   
                                    <input class="form-control" type="file" name="images[]" multiple require>
                                
                            </div>


                            <div class="mb-4">
                                <label class="form-label">Full description</label>
                                <textarea placeholder="Type here" <?php
                                                    if(isset($productModel->errors['desc'])){
                                                        echo "class = 'border-danger form-control'";
                                                    }
                                                    else{
                                                        echo 'class="form-control"';
                                                    }
                                                ?> rows="4" name="description"></textarea>
                                                <span class="text-danger">
                                            <?php 
                                                    if(isset($productModel->errors['desc'])){
                                                        echo $productModel->errors['desc'];
                                                    }
                                                    ?>
                                            </span>   
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product Price</label>
                                <input type="number" placeholder="Type here" <?php
                                                    if(isset($productModel->errors['price'])){
                                                        echo "class = 'border-danger form-control'";
                                                    }
                                                    else{
                                                        echo 'class="form-control"';
                                                    }
                                                ?> id="product_name" name="price">
                                                <span class="text-danger">
                                            <?php 
                                                    if(isset($productModel->errors['price'])){
                                                        echo $productModel->errors['price'];
                                                    }
                                                    ?>
                                            </span>   
                            </div>

                            <div class="mb-4">
                                    <label class="form-label">Choose Main Category</label>
                                    <select <?php
                                                    if(isset($productModel->errors['category'])){
                                                        echo "class = 'border-danger form-control'";
                                                    }
                                                    else{
                                                        echo 'class="form-control"';
                                                    }
                                                ?> name="Subcat">
                                        <option selected disabled> Choose Main Category </option>
                                        <?php 
                                            $result=$categorymodel->readmenCategory();
                                            if($result->num_rows>0){
                                                while($rows = $result->fetch_assoc()){
                                                    $categorymodel->id=$rows['Id'];
                                                    $categorymodel->Category=$rows['subcategory'];
                                                    echo"<option value='$categorymodel->id'> $categorymodel->Category</option>";
                                                }
                                            }
                                        ?>
                                        
                                        
                                    </select>
                                    <span class="text-danger">
                                            <?php 
                                                    if(isset($productModel->errors['category'])){
                                                        echo $productModel->errors['category'];
                                                    }
                                                    ?>
                                            </span>   
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