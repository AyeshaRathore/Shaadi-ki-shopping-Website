<?php 
      ob_start(); 
      include('includes/header.php');
?>

<?php
function send_mail()
{
    if (isset($_POST['register'])) {
        $to = 'syedaliabbas1177@gmail';
        $sender_email = $_POST['email'];
        $headers = array("From: $sender_email", "Reply-To: $sender_email", "X-Mailer: PHP/" . PHP_VERSION);
        $headers = implode("\r\n", $headers);
        $Name = $_POST['username'];
        $subject = "GhariCare Support Center";
        $mail_body = "From: $Name";
        $isSent = mail($to, $subject, $mail_body, $headers);
        if ($_POST['submit']) {
            if ($isSent) {
                echo "<br>Your bookinf request has been sent successfully. We will reach you soon.";
            } else {
                echo "<br>Message sending failed. Please try again. ";
            }
        }
    }
}
?>
  <body>
    <div class="container">
        <div class="m-5" >
            <div class="w-75 m-auto">
            <div class="w-25 m-auto"><img src="assets\imgs\logo.png" alt=""></div>
                <?php
                    include_once('includes/database.php');
                    
                    require ('Models/AccountModel.php');   
                    $db = new Database();
                   $conn=$db->getconnection(); 
                   $AccountModel = new AccountModel($conn);
                   $AccountModel->register();


                
                ?>
                <form action=" " method="post">
                    <h2>Sign Up</h2>
                    <?php send_mail(); ?>
                    <span class="text-danger"><?php if(isset($AccountModel->error['generalError'])){
                            echo $AccountModel->error['generalError'];
                        } ?></span>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control <?php if(isset($AccountModel->error['email'])){
                            echo "border-danger";
                        }  ?>" name="email" id="exampleFormControlInput1" placeholder="">
                        <span class="text-danger"><?php if(isset($AccountModel->error['email'])){
                            echo $AccountModel->error['email'];
                        } ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control <?php if(isset($AccountModel->error['username'])){
                            echo "border-danger";
                        }  ?>" name="username" id="exampleFormControlInput1" placeholder="">
                        <span class="text-danger"><?php if(isset($AccountModel->error['username'])){
                            echo $AccountModel->error['username'];
                        } ?></span>
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control <?php if(isset($AccountModel->error['password'])){
                            echo "border-danger";
                        }  ?>" name="password" id="exampleFormControlInput1" placeholder="">
                        <span class="text-danger"><?php if(isset($AccountModel->error['password'])){
                            echo $AccountModel->error['password'];
                        } ?></span>
                    </div>
                    <div class="mb-3">
                        Aleady have a account? 
                        <a href="login.php">login</a>
                    </div>
                    <div>
                        <input type="submit" name="register" value="singup" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>