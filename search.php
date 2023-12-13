<main class="main">
    <section class="product-tabs section-padding position-relative wow fadeIn animated">
        <div class="bg-square"></div>
        <div class="container">
            <div class="tab-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                                Serach Item are
                            </li>
                    


                </ul>
                <a class="view-more d-none d-md-flex">Serach item</a>
            </div>
            <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
            <?php
            
                                    $result=$productModel->search();
                                    if($result->num_rows>0){
                                        while($rows = $result->fetch_assoc()){
                                            $productModel->id=$rows['Id'];
                                            $productModel->title=$rows['title'];
                                            $productModel->description=$rows['description'];
                                            $productModel->price=$rows['price'];
                                            $productModel->image=$rows['imageurl'];
                                            $productModel->categories=$rows['subcategory'];
                                            echo '<div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">';
                                            
                                                $results=$productModel->readimages($productModel->id);
                                                $imagecount=0;
                                                if($results->num_rows>0){
                                                    while($rows = $results->fetch_assoc()){
                                                        $productModel->image=$rows['imageurl'];
                                                        if($imagecount==0){
                                                            echo
                                                            '<img class="default-img" src="assets/imgs/shop/'.$productModel->image.'" alt="">';
                                                        }else{
                                                            echo'<img class="hover-img" src="assets/imgs/shop/'.$productModel->image.'" alt="">';
                                                        }
                                                        $imagecount++;
                                                    }
                                                }
                                                if(isset($_SESSION['username'])){
                                                    $cart = 'href="menCollections.php?cart='.$productModel->id.'';
                                                    $favirate = 'href="menCollections.php?fav='.$productModel->id.'';
                                                }else{
                                                    $favirate = 'href="login.php"';
                                                    $cart = 'href="login.php"';
                                               }
                                                           
                                                       echo '</a>
                                                    </div>
                                                    
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <a href="shop-grid-right.html">'.$productModel->categories.'</a>
                                                    </div>
                                                    <h2><a href="">'.$productModel->title.'</a></h2>
                                                    
                                                    <div class="product-price">
                                                        <span>PKR'.$productModel->price.' </span>
                                                       
                                                    </div>
                                                    <div class="product-action-1 show">
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" '.$favirate.'" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Add To Cart" class="action-btn hover-up" 
                                                        '.$cart .'
                                                        "><i class="fi-rs-shopping-bag-add"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }else{
                                        echo "<h5 class='m-auto'>Nothing Found!</h5>";
                                    }
                                    
                                
            

                                  $orderModel->cart();
                                  $orderModel->favirate();
                ?>
              
              </div>
                        <!--End product-grid-4-->
                      </div>
                  </div>
                           

            <!--End tab-content-->
        </div>
    </section>
</main>
