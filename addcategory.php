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
                    <h2 class="content-title">Add New Category</h2>
                    
                </div>
             
                
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                    <?php 
                    $categorymodel->create();
                ?>
                        <form action=" " method="post">
                            
                            <span>
                            <?php 
                                if(isset($categorymodel->errors['generalerrormsg'])){
                                    echo $categorymodel->errors['generalerrormsg'];
                                }
                            ?>
                            </span>
                       
                            <div class="mb-4">
                                <label for="category_name" class="form-label">Category title</label>
                                <input type="text" placeholder="Type here" <?php
                                                    if(isset($categorymodel->errors['title'])){
                                                        echo "class = 'border-danger form-control'";
                                                    }
                                                    else{
                                                        echo 'class="form-control"';
                                                    }
                                                ?> id="category_name" name="title">
                                                <span class="text-danger">
                                            <?php 
                                                    if(isset($categorymodel->errors['title'])){
                                                        echo $categorymodel->errors['title'];
                                                    }
                                                    ?>
                                            </span>   
                            </div>
                            


                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" name="desc" rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                                    <label class="form-label">Choose Main Category</label>
                                    <select <?php
                                                    if(isset($categorymodel->errors['catMain'])){
                                                        echo "class = 'border-danger form-select'";
                                                    }
                                                    else{
                                                        echo 'class="form-select"';
                                                    }
                                                ?> name="maincat">
                                        <option selected disabled> Choose Main Category </option>
                                        <?php 
                                            $result=$categorymodel->readallCategory();
                                            if($result->num_rows>0){
                                                while($rows = $result->fetch_assoc()){
                                                    $categorymodel->id=$rows['Id'];
                                                    $categorymodel->Category=$rows['category'];
                                                    echo"<option value='$categorymodel->id'> $categorymodel->Category</option>";
                                                }
                                            }
                                        ?>
                                        
                                        
                                    </select>
                                    <span class="text-danger">
                                            <?php 
                                                    if(isset($categorymodel->errors['catMain'])){
                                                        echo $categorymodel->errors['catMain'];
                                                    }
                                                    ?>
                                            </span>   
                            </div>
                            
                        <button class="btn btn-md rounded font-sm hover-up" type="submit" name="cat_submit">Publish</button>
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