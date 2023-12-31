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
                    <h2 class="content-title card-title">Active Orders</h2>
       
                </div>
                
            </div>
            <div class="container">
                <div class="table-responsive">

                
            <table class="table shopping-summery text-center clean border" >
                <thead>
                    <tr class="main-heading border">
                        <th class='border'>Id</th>
                        <th class='border'>Username</th>
                        <th class='border'>Products</th>
                        <th class='border'>Price</th>
                        <th class='border'>Phone</th>
                        <th class='border'>Email</th>
                        <th class='border'>Adress</th>
                        <th class='border'>Payment</th>
                        <th class='border'>Monthly Installment</th>
                        <th class='border'>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                                $result=$ordermodel->readallOrder();
                                $count = 0;
                                if($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        if($rows['status'] == 0){
                                            $ordermodel->id=$rows['Id'];
                                            $ordermodel->products=$rows['products'];
                                            $ordermodel->phone=$rows['phone'];
                                            $ordermodel->address=$rows['address'];
                                            $ordermodel->amount_paid=$rows['total_price'];
                                            $ordermodel->status=$rows['status'];
                                            $ordermodel->pmode=$rows['pay_mode'];
                                            $ordermodel->username=$rows['username'];
                                            $ordermodel->email=$rows['email'];
                                            $no_of_installment=$rows['no_of_installment'];
                                            $monthInstallmentRate = 0;
                                            if($ordermodel->pmode == 0){
                                                $pay ="Cash On Delivery";
                                                
                                            }
                                            if($ordermodel->pmode == 1){
                                                $pay ="Paid";
                                                
                                            }
                                            if($ordermodel->pmode == 2){
                                                $pay ="Installtion";
                                                $monthInstallmentRate = $ordermodel->amount_paid /$no_of_installment;
                                            }
                                            echo "<tr class='border'>
                                            <td class='border'>$ordermodel->id</td>
                                            <td class='border'>$ordermodel->username</td>
                                            <td class='border'>$ordermodel->products</td>
                                            <td class='border'>$ordermodel->amount_paid</td>
                                            <td class='border'>$ordermodel->phone</td>
                                            <td class='border'>$ordermodel->email</td>
                                            <td class='border'>$ordermodel->address</td>
                                            <td class='border'>$pay</td>
                                            <td class='border'>$monthInstallmentRate</td>
                                            <td class='border'>
                                                <a href='orders.php?com_id=$ordermodel->id&status=1' class='btn btn-success'>Complete</a>

                                                </td>
                                                <td class='border'>
                                                <a href='orders.php?deleteO=$ordermodel->id' class='btn btn-success'><i class='material-icons md-delete_forever'></i></a>
                                                
                                                </td>
                                            
                                                
                                        </tr>";
                                        
                                        }
                                        $count++;
                                    }
                                    
                                }
                                if($result->num_rows == 0 || $count = 0){
                                    echo '<tr>
                                    <td colspan="10">No Active Order</td>
                                </tr>';
                                }
                                $ordermodel->changeStatus();
                                $ordermodel->delOrder();
                                
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
<?php include("includes/adminFotter.php")?>