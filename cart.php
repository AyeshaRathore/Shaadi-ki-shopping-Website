

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
                    <span></span> Your Cart
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
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Remove</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $orderModel->updateCart();
                                         $result=$orderModel->Cartitem();
                                         $grandtotal = 0;
                                         if($result->num_rows>0){
                                             while($rows = $result->fetch_assoc()){
                                                 $orderModel->id=$rows['Id'];
                                                 $orderModel->title=$rows['title'];
                                                 $orderModel->description=$rows['description'];
                                                 $orderModel->price=$rows['price'];
                                                 $orderModel->qty=$rows['qty'];
                                                 $orderModel->image=$rows['imageurl'];
                                                 $totalitemprice = $orderModel->qty *$orderModel->price;
                                                 $grandtotal += $totalitemprice;
                                                 echo '
                                                 <tr>
                                                 <form action=" " method="get">
                                                 <td class="image product-thumbnail"><img src="assets/imgs/shop/'.$orderModel->image.'" alt="#"></td>
                                                 <td class="product-des product-name">
                                                     <h5 class="product-name">'.$orderModel->title.'</h5>
                                                     <p class="font-xs">'.$orderModel->description.'
                                                     </p>
                                                 </td>
                                                 <td class="price" data-title="Price"><span>RS. '.$orderModel->price.' </span></td>
                                                 <td class="text-center" data-title="Stock">
                                                     <div class="w-25 m-auto">
                                                         <input name="qty" type="number" value="'.$orderModel->qty.'" min="1">
                                                     </div>
                                                 </td>
                                                 <input name="id" type="hidden" value="'.$orderModel->id.'">
                                                 <td class="text-right" data-title="Cart">
                                                     <span>RS. '.$totalitemprice.' </span>
                                                 </td>
                                                 <td class="action" data-title="Remove"><a href="cart.php?del='.$orderModel->id.'" class="text-muted"><i class="fi-rs-trash"></i></a>
                                                 </td>
                                                 <td class="action" data-title="add">
                                                 <button class="btn" type="submit" name="cartupdate">
                                                 <i class="fi-rs-shuffle mr-10"></i> Update
                                                 </button>
                                                 </td>
                                                 </form>
                                             </tr>';
                                             }
                                             
                                         }
                                         else{
                                            '<tr><td>No data!</td> </tr>';
                                         }
                                         
                                         $orderModel->delete();
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
                                        <td colspan="10" class="text-end">
                                            <a href="cart.php?delall=true" class="text-muted"> <i class="fi-rs-cross-small"></i> Clear Cart</a>
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    <?php $orderModel->deleteall(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-action text-end">
                            <a class="btn" href="index.php"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>

                        <div class="col-lg-6 col-md-12 text-end">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">Cart Subtotal</td>
                                                    <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"><?= $grandtotal; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Shipping</td>
                                                    <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Total</td>
                                                    <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand"><?= $grandtotal; ?></span></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a <?php if($grandtotal==0){
                                        echo 'style="pointer-events: none"';
                                    } ?> href="checkout.php" class="btn " > <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require ("includes/footer.php") ?>