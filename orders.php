
<?php require ("includes/header.php") ?>
<?php
    
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }

?>

<?php require ("includes/navbar.php") ?>
<?php require ("includes/mobHeader.php")?>

<main class="main">
        <section class="content-main">
            
            <div class="container">
            <div class="content-header" style ="margin-top : 40px;">
                <div>
                    <h2 class="content-title card-title">Active Orders</h2>
       
                </div>
                
            </div>
                <div class="table-responsive">

                
            <table class="table shopping-summery text-center clean border" >
                <thead>
                    <tr class="main-heading border">
                        <!-- <th class='border'>Id</th> -->
                        <!-- <th class='border'>Username</th> -->
                        <!-- // <td class='border'>$orderModel->id</td>
                                            // <td class='border'>$orderModel->username</td> -->
                        <th class='border'>Products</th>
                        <th class='border'>Price</th>
                        <!-- <th class='border'>Phone</th>
                        <th class='border'>Email</th> -->
                        <!-- // <td class='border'>$orderModel->phone</td>
                                            // <td class='border'>$orderModel->email</td> -->
                        <th class='border'>Adress</th>
                        <th class='border'>Payment</th>
                        <th class='border'>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                                $result=$orderModel->userOrder();
                                $count = 0;
                                if($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        // if($rows['status'] == 1){
                                            $orderModel->id=$rows['Id'];
                                            $orderModel->products=$rows['products'];
                                            $orderModel->phone=$rows['phone'];
                                            $orderModel->address=$rows['address'];
                                            $orderModel->amount_paid=$rows['total_price'];
                                            $orderModel->status=$rows['status'];
                                            $orderModel->pmode=$rows['pay_mode'];
                                            $orderModel->username=$rows['username'];
                                            $orderModel->email=$rows['email'];
                                            if($orderModel->pmode == 0){
                                                $pay ="Cash On Delivery";
                                            }
                                            if($orderModel->pmode == 2){
                                                $pay ="Installment";
                                            }
                                            if($orderModel->status == 0){
                                                $status ="<span class='text-primary'>Pending</span>";
                                            }
                                            else{
                                                $status ="<span class='text-success'>Complete</span>";
                                            }
                                            echo "<tr class='border'>
                                            
                                            <td class='border'>$orderModel->products</td>
                                            <td class='border'>$orderModel->amount_paid</td>
                                            
                                            <td class='border'>$orderModel->address</td>
                                            <td class='border'>$pay</td>
                                            <td class='border'>
                                            $status
                                                </td>
                                                
                                        </tr>";
                                        
                                        // }
                                        
                                    }
                                    $count++;
                                }else{
                                    echo '<tr>
                                    <td colspan="10">No Order</td>
                                </tr>';
                                }
                                // $ordermodel->changeStatus();
                                
                            ?>
                    
                </tbody>
            </table>
            </div>
                <!-- card-header end// -->
                <div class="card-body">
                    <article class="itemlist">
                        <div class="row align-items-center">
                            
                           
                            
                        </div>
                        <!-- row .// -->
                    </article>
                
               
                </div>
                <!-- card-body end// -->
            </div>
           
        </section>
        <!-- content-main end// -->
    
    </main>
<?php include("includes/footer.php")?>