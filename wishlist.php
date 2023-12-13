

<?php require ("includes/header.php") ?>
<?php
    
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }

?>

<?php require ("includes/navbar.php") ?>
<?php require ("includes/mobHeader.php")?>

<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Your Wishlist
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                         $result=$orderModel->favirateitem();
                                         if($result->num_rows>0){
                                             while($rows = $result->fetch_assoc()){
                                                 $orderModel->id=$rows['Id'];
                                                 $orderModel->title=$rows['title'];
                                                 $orderModel->description=$rows['description'];
                                                 $orderModel->price=$rows['price'];
                                                 $orderModel->image=$rows['imageurl'];
                                                 
                                                 echo '<tr>
                                                 <td class="image product-thumbnail"><img src="assets/imgs/shop/'.$orderModel->image.'" alt="#"></td>
                                                 <td class="product-des product-name">
                                                     <h5 class="product-name">'.$orderModel->title.'</h5>
                                                     <p class="font-xs">'.$orderModel->description.'
                                                     </p>
                                                 </td>
                                                 
                                                 
                                                 <td class="text-right" data-title="Cart">
                                                     <span>RS. '.$orderModel->price.' </span>
                                                 </td>
                                                 <td class="action" data-title="Remove">
                                                 <span style="margin-right : 5px;"><a href="wishlist.php?del='.$rows['fav_id'].'" class="text-muted mr-3"><i class="fi-rs-trash"></i></a></span>
                                                 <span class="ml-2"><a aria-label="Add To Cart" class="action-btn hover-up ml-3" href="wishlist.php?cart='.$orderModel->id.'&fav_id='.$rows['fav_id'].'"><i class="fi-rs-shopping-bag-add"></i></a></span>
                                                 
                                                 </td>
                                                 
                                             </tr>
                                             ';
                                             }
                                             $orderModel->cart();
                                         }
                                         else{
                                            '<tr><td>No data!</td> </tr>';
                                         }
                                         $orderModel->deletefav();
                                    ?>
                                    <!-- <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-2.jpg" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="shop-product-right.html">J.Crew Mercantile Women's Short-Sleeve</a></h5>
                                            <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                            </p>
                                        </td>
                                        <td class="price" data-title="Price"><span>RS. 65.00 </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span>RS. 65.00 </span>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                    </tr> -->
                                    
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a href="wishlist.php?delall=true" class="text-muted"> <i class="fi-rs-cross-small"></i> Clear All</a>
                                        </td>
                                    </tr>
                                    <?php $orderModel->deleteallfav(); ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                       
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require ("includes/footer.php") ?>