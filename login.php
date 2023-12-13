<?php include 'includes/header.php'; ?>
    <div class="container">
        <div class='m-5'>
            <div class="w-75 m-auto">
                <div class="w-25 m-auto"><img src="assets\imgs\logo.png" alt=""></div>
                <?php
                    include_once('includes/database.php');
                    require ('Models/AccountModel.php');   
                    $db = new Database();
                    $conn=$db->getconnection(); 
                    $AccountModel = new AccountModel($conn);
                    $AccountModel->login();
                ?>
                <h3>Login</h3>
                <form action="" method="post">
                    <span class="text-danger"><?php if(isset($AccountModel->error['generalerrormsg'])){
                            echo $AccountModel->error['generalerrormsg'];
                        } ?></span>
                    <div class></div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control <?php if(isset($AccountModel->error['email'])){
                            echo "border-danger";
                        }  ?> " id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                        <span class="text-danger">
                            <?php if(isset($AccountModel->error['email'])){
                            echo $AccountModel->error['email'];
                        } ?>
                        
                        </span>
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control <?php if(isset($AccountModel->error['password'])){
                            echo "border-danger";
                        }  ?>" id="exampleFormControlInput1" placeholder="" name="password">
                        <span class="text-danger"><?php if(isset($AccountModel->error['password'])){
                            echo $AccountModel->error['password'];
                        } ?></span>
                    </div>
                    <div class="mb-3">
                    <select class="form-select <?php if(isset($AccountModel->error['role'])){
                            echo "border-danger";
                        }  ?>" aria-label="Default select example" name="role">
                        
                        <option value="" disabled Selected>Select the Role</option>
                        <option value="1">User</option>
                        <option value="2">Admin</option>

                        <span class="text-danger"><?php if(isset($AccountModel->error['role'])){
                            echo $AccountModel->error['role'];
                        } ?></span>
                    </select>
                    
                    </div>
                    <div class="mb-3">Don't Have any Account? 
                        <a href="signup.php">Create Account</a>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login" name="login" class="btn btn-primary">
                    </div>
                </form>
                    
            </div>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>