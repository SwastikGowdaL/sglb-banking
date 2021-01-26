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

  <title>Locker details</title>
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
.user-flex5{ 
    display:flex;
justify-content:center;
}
.user-flex6{
    display:none;
justify-content:column; 
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
          <h2>Locker Details</h2>
          <p>All your Locker details can be found here</p>
        </div>
    <div class="row no-gutters user-flex5">

          <div class="col-lg-4 box featured " data-aos="fade-up">
          <h3>Locker Info</h3>
            <h4><img src="illu8.svg" alt="locker" width="115px;" height="115px;"></h4>
            <ul>
            <?php
            
            
              
            $sql = "SELECT lk_id,lk_type,lk_cap FROM locker WHERE user_id='$user_id'";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               
               echo'
               <li> Locker Id - '.$row['lk_id'].'</li>
               <li> Locker Type - '.$row['lk_type'].'</li>
               <li> Locker Capacity - '.$row['lk_cap'].'</li>';
              }
            }else{
                echo "<script>alert('Not able to get user data from the user_id locker');</script>";  
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