
<!-- <head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head> -->
<?php include('includes/header.php');
ob_start();
//   session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 include('includes/navbar.php'); 
	// require 'includes/database.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];
    $id=$_SESSION['id'];
	$sql = "SELECT CONCAT(p.title, '(',qty,')') AS ItemQty, p.price,c.qty FROM cart c join products p on p.id=c.product_id where c.user_id = $id";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
        $price = $row['qty'] * $row['price'];
	    $grand_total += $price;
	    $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<div class= "mt-5">
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead mb-3"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead mb-3"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <?php
            // require("includes/database.php");
            // require("models/OrderModel.php");
            // $db  = new Database();
            // $conn = $db->getConnection();
            // $OrderModel = new OrderModel($conn);
            $orderModel->send();
        ?>
        <?php if(!isset($data)) : ?>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea required name="address" class="form-control" rows="5" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="codbtn" value="0" onchange='NodisplayPay(this);' checked>
            <label class="form-check-label" for="codbtn">
              Cash On delivery
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="paybutton" value="1" onchange='handleChange(this);'>
            <label class="form-check-label" for="paybutton">
              Bank
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" value="2" id="instbutton" onchange='handleinstall(this);'>
            <label class="form-check-label" for="instbutton">
              Installment
            </label>
          </div>
          <div  class="mb-3 d-none" style="" id="display">
              <div class="card-js" id="my-card" data-stripe="true">

              </div>
              <button class="btn mt-3">Pay</button>
          </div>
            
          <div class="m-4 mt-1 d-none" id="d-install">
            <div class="form-check ml-4">
              <input class="form-check-input" type="radio" name="installment" id="onemonth" value="1" checked>
              <label class="form-check-label" for="onemonth">
                One Month (5%)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="installment" id="sixmonth" value="6">
              <label class="form-check-label" for="sixmonth">
              Six Month (10%)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="installment" value="12" id="oneyear">
              <label class="form-check-label" for="oneyear">
              One year (15%)
              </label>
            </div>
          </div>
          
            
          <div class="form-group">
            <input type="submit" name="order" value="Place Order" id="disable" class="btn btn-danger "<?php if($grand_total==0){
                                        echo 'disabled';
                                    } ?>>
          </div>
        </form>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

  
<?php include('includes/footer.php'); ?>