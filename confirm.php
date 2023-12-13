



<?php
// 	require 'includes/config.php';

// 	$grand_total = 0;
// 	$allItems = '';
// 	$items = [];
//   $id=$_SESSION['id'];
// 	$sql = "SELECT CONCAT(p.product_name, '(',qty,')') AS ItemQty, total_price FROM cart c join products p on p.id=c.product_id where c.user_id = $id";
// 	$stmt = $conn->prepare($sql);
// 	$stmt->execute();
// 	$result = $stmt->get_result();
// 	while ($row = $result->fetch_assoc()) {
// 	  $grand_total += $row['total_price'];
// 	  $items[] = $row['ItemQty'];
// 	}
// 	$allItems = implode(', ', $items);
// ?>
<!DOCTYPE html>
<html lang="en">

<!-- <head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head> -->
<?php include('includes/header.php'); ?>
<?php
ob_start();

  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<?php include('includes/navbar.php'); ?>


<div class= "mt-5">
<div class="container mt-5 pt-5">
    <div class="row justify-content-center align-item-center">
      <div class="col-lg-6 px-4 pb-4" id="order" style="height : 45vh">
       
        <div class="text-center">
                <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
                <h2 class="text-success">Your Order Placed Successfully!</h2>
                
                
            </div>
      </div>
    </div>
  </div>
</div>

  

<?php include('includes/footer.php'); ?>