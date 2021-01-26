<?php
//Initialize Session
session_start();

if (isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];
    $email = $_SESSION['email'];
    $unname = $_SESSION['unname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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

.btn-grad {background-image: linear-gradient(to right, #614385 0%, #516395  51%, #614385  100%)}
         .btn-grad {
            margin: 10px;
            margin-left:0px;
            padding: 7px 15px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
button:focus{
outline: none;
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


  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features" style="padding-top:40px;">
      <div class="container">

        <div class="section-title">
          <h2>Banking Features</h2>
          <p>Our goal is to provide the customers with the best UI/UX along with the abundent and sophisticated online payment features</p>
          <p style="font-size:30px;">Welcome User - <?php  echo $unname; ?>, &nbsp;&nbsp;<a href="logout.php"><span style="color:red;">Logout</span></a></p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class='bx bx-paper-plane'></i>
                  <h4>Transfer amount</h4>
                  <p>transfer done with latest encryption technology <a href="transfer.php"><button class="btn-grad">Transfer</button></a></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class='bx bxs-bar-chart-alt-2'></i>
                  <h4>Passbook</h4>
                  <p>track all your recent transaction here with the statistics <a href="passbook.php"><button class="btn-grad">Passbook</button></a></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class='bx bxs-user-detail'></i>
                  <h4>Details</h4>
                  <p>Find your details here <a href="details.php"><button class="btn-grad">Details</button></a></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class='bx bx-question-mark'></i>
                  <h4>Balance Enquiry</h4>
                  <p>Check your account and credit card balance<a href="BalanceEnq.php"><button class="btn-grad">Balance</button></a></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class='bx bxs-lock' ></i>
                  <h4>Locker</h4>
                  <p>Your locker details can be found here<a href="lockerdetails.php"><button class="btn-grad">Locker</button></a></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class='bx bx-cog'></i>
                  <h4>Account settings</h4>
                  <p>Change your account details here<a href="accountsettings.php"><button class="btn-grad">settings</button></a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="illu.svg" class="img-fluid" alt="sglb bank">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

  </main><!-- End #main -->

  <footer>
  <div class="container py-4">
      <div class="copyright">
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

<?php

} else {
    header("location:login.php ");
}
?>