<?php
   session_start();
   include ('connect_to_sql.php');
   $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User details</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>

.user-flex3{
display:flex;
justify-content:center;
flex-direction:column;
}
li{
    text-align:center;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Sglb Banking</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


  <main id="main">

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>User Details</h2>
          <p>All your details can be found here</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Account Info</h3>
            <h4><i class='bx bxs-id-card'></i></i></h4>
            <ul class="">
            
            <?php
            
            
              
            $sql = "SELECT ac_num,ac_type,ac_status,balance FROM account WHERE user_id='$user_id'";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               
               echo'
               <li> Number - '.$row['ac_num'].'</li>
               <li> Type - '.$row['ac_type'].'</li>
               <li> Status - '.$row['ac_status'].'</li>
               <li> Balance - '.$row['balance'].'</li>';
              }
            }else{
                echo "<script>alert('Not able to get data from the user_id');</script>";  
            }            


            ?> 

            </ul>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Personnel Info</h3>
            <h4><i class='bx bxs-user'></i></h4>
            <ul>
            <?php
            
            
              
            $sql = "SELECT fname,address,email,mob,dob,gender,pass FROM users WHERE user_id='$user_id'";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               
               echo'
               <li> Name - '.$row['fname'].'</li>
               <li> User Id - '.$user_id.'</li>
               <li> Address - '.$row['address'].'</li>
               <li> Email - '.$row['email'].'</li>
               <li> Mobile - '.$row['mob'].'</li>
               <li> DOB - '.$row['dob'].'</li>
               <li> Gender - '.$row['gender'].'</li>
               <li> Password - '.$row['pass'].'</li>';
              }
            }else{
                echo "<script>alert('Not able to get user data from the user_id users');</script>";  
            }            


            ?> 
            </ul>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Credit Card Info</h3>
            <h4><i class='bx bx-credit-card' ></i></h4>
            <ul>
            <?php
            
            
              
            $sql = "SELECT card_num,card_bal,exp_date FROM credit_card WHERE user_id='$user_id'";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               
               echo'
               <li> Card Number - '.$row['card_num'].'</li>
               <li>Card Balance - '.$row['card_bal'].'</li>
               <li> Expiry Date - '.$row['exp_date'].'</li>';
              }
            }else{
                echo "<script>alert('Not able to get data from the user_id from credit_card table');</script>";  
            }            


            ?> 
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    

  </main><!-- End #main -->

  <footer>
  <div class="container py-4">
      <div class="copyright">
      <a href="index2.php"><i class='bx bxs-left-arrow-square'></i> Back to home</a><br>
        &copy; Copyright <strong><span>Sglb Banking</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by swastik and sindhu
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>