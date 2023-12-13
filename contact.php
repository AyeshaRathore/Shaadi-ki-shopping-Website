<?php require("includes/header.php") ?>
<?php

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

?>

<?php require("includes/navbar.php") ?>
<?php require("includes/mobHeader.php") ?>

<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <!-- <span></span> Pages -->
                    <span></span> Contact us
                </div>
            </div>
        </div>
        <section class="hero-2 bg-green">
            <div class="hero-content">
                <div class="container">
                    <div>
                        <h4 class="text-brand mb-20">About Us</h4>
                        <!-- <h1 class="mb-20 wow fadeIn animated font-xxl fw-900">
                            Let's Talk About <br>Your <span class="text-style-1">Idea</span>
                        </h1> -->
                        <p class="w-50 m-auto mb-50 wow fadeIn animated">-Shadi Ki Shopping is AJK’s one-stop fashion online store that is home to the country’s finest designer wear. The main aim behind this venture is to host various Pakistani designer, prêt, lifestyle and luxury brands under one roof where global customers can shop what they want to under the banner of SKS. <br> -A user-friendly platform that helps you browse through over a thousand products in a matter of minutes. Shadi ki shopping is ensuring that our international clientele can gather on one platform and enjoy the best shopping experience of all time. You can shop from the giants of the fashion industry under the one umbrella moreover, our customer service is available 24/7 to help you out.</p>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-border pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="mb-15 text-brand">Office</h4>
                        Center Plate, Near Lahore Holet<br> Muzaffarabad, 13100, AJK<br>
                        <abbr title="Phone">Phone:</abbr> +92 317 0555322<br>
                        <abbr title="Email">Email: </abbr><a  class="__cf_email__" data-cfemail="3a5955544e5b594e7a7f4c5b485b14595557">sardarattaullah777@gmail.com</a><br>
                        <a href="https://www.google.com/maps/place/Department+of+Software+Engineering+Uajk/@34.3851934,73.4658059,745m/data=!3m1!1e3!4m5!3m4!1s0x38e09e2ad889f093:0xa4bad6a4e55519c7!8m2!3d34.385189!4d73.4679946" class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-10"></i>View map</a>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="mb-15 text-brand">Studio</h4>
                        Chatter Domail,<br> Muzaffarabad, 13100, AJK<br>
                        <abbr title="Phone">Phone:</abbr> +92 316 1981750<br>
                        <abbr title="Email">Email: </abbr><a class="__cf_email__" data-cfemail="24474b4a504547506461524556450a474b49">abdulhameed166251@gmail.com</a><br>
                        <a href="https://www.google.com/maps/place/Department+of+Software+Engineering+Uajk/@34.3851934,73.4658059,745m/data=!3m1!1e3!4m5!3m4!1s0x38e09e2ad889f093:0xa4bad6a4e55519c7!8m2!3d34.385189!4d73.4679946" class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-10"></i>View map</a>
                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-15 text-brand">Shop</h4>
                        Khanzada Shadi Collectins, 2 Rupy Wali Ghali, Madina Market Muzaffarabad, AJK<br>
                        <abbr title="Phone">Phone:</abbr> +92 317 0555322<br>
                        <abbr title="Email">Email: </abbr><a class="__cf_email__" data-cfemail="25464a4b514446516560534457440b464a48">sardarosama063@gmail.com</a><br>
                        <a href="https://www.google.com/maps/place/Department+of+Software+Engineering+Uajk/@34.3851934,73.4658059,745m/data=!3m1!1e3!4m5!3m4!1s0x38e09e2ad889f093:0xa4bad6a4e55519c7!8m2!3d34.385189!4d73.4679946" class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"> <i class="fi-rs-marker mr-10"></i> View map</a>
                    </div>
                </div>
            </div>
        </section>
       
    </main>

<?php require("includes/footer.php") ?>