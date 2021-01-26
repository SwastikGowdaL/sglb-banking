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

  <title>Balance Enquiry</title>
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

 

  <main id="main">

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Balance</h2>
          <p>Here you can check your account and credit card balance and calculate the total amount of money at your disposal.</p>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
              <i class='bx bxs-user-circle'></i>
                <h4>Account Balance</h4>

<?php

$aamt=0;
$camt=0;
$sql = "SELECT balance FROM account WHERE user_id='$user_id'";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               $aamt=$row['balance'];
               echo'<p>'.$row['balance'].' Rs </p>';
              }
            }else{
                echo "<script>alert('Not able to get data from the user_id from account table');</script>";  
            }           


?>

              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
              <i class='bx bxs-credit-card-alt'></i>
                <h4>Credit Card Balance</h4>
                <?php

$sql = "SELECT card_bal FROM credit_card WHERE user_id='$user_id'";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               $camt=$row['card_bal'];
               echo'<p>'.$row['card_bal'].' Rs </p>';
              }
            }else{
                echo "<script>alert('Not able to get data from the user_id from credit card table');</script>";  
            }           


?>
              </div>
              <div class="col-lg-12 info" data-aos="fade-up" data-aos-delay="200">
              <i class='bx bxs-calculator' ></i>
                <h4>Total</h4>
               <?php 
               $totamt=$camt+$aamt;
               echo '<p>'.$totamt.' Rs</p>';
               ?>
              </div>
            </div>
          </div>

       

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
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