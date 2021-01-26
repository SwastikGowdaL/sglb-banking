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

  <title>Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: white;
  background: linear-gradient(to right,#e5e9ee,#ffffff);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('illu3.svg');
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

</style>

<body>



<?php
      
           //logic to check if correct user id and password entered - Start()
            if (isset($_POST['submit']) && !empty($_POST['tamt']) 
               && !empty($_POST['tuser']) && !empty($_POST['ttype'])) {
				
                $tamt=$_POST['tamt'];
                $tuser=$_POST['tuser'];
                $ttype=$_POST['ttype'];
             if($ttype=="ac"){


                // echo "<script>alert('$ttype');</script>"; 


                    $result = @mysqli_query($dbc, "select balance from account where user_id='$user_id'");
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $noOfrecords=$row[0];
                    if ($noOfrecords>0) {
                     $useramt=$row[0];


if($useramt>=$tamt){
       
           $famt=$useramt-$tamt;
           
           $sql = "UPDATE account SET balance='$famt' WHERE user_id='$user_id'";

           if (mysqli_query($dbc, $sql)) {
            
            } else {
           echo "Error updating record: " . mysqli_error($dbc);
            }



            $result = @mysqli_query($dbc, "select balance from account where user_id='$tuser'");
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $noOfrecords=$row[0];
            if ($noOfrecords>0) {
             $useramt2=$row[0];
             $famt2=$useramt2+$tamt;
                  
             $sql = "UPDATE account SET balance='$famt2' WHERE user_id='$tuser'";

             if (mysqli_query($dbc, $sql)) {

                                         $sql = "INSERT INTO transaction (user_id,old_bal,new_bal,t_amt)
                                         VALUES ('$user_id','$useramt','$famt','$tamt')";
                                         if (mysqli_query($dbc, $sql)) { 
                                                                                    
                                         } else {
                                        $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
                                         }

                                                             $sql = "INSERT INTO transaction (user_id,old_bal,new_bal,t_amt)
                                                              VALUES ('$tuser','$useramt2','$famt2','$tamt')";
                                                             if (mysqli_query($dbc, $sql)) { 
                                          
                                                             echo "<script>Swal.fire(
                                                             'Nice job!',
                                                              'Transfer success!',
                                                              'success'
                                                                  )</script>";
                                                                 } else {
                                                                $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
                                                                 }



               
              } else {
             echo "Error updating record: " . mysqli_error($dbc);
              }


            } else{
                echo "<script>alert('Not done');</script>"; 
            }





}else{
    $t_id=rand(1,9000000);
    $sql = "INSERT INTO trans_error (t_id,user_id,reason,te_amt)
    VALUES ('$t_id','$user_id','Not enough money in account','$tamt')";
    if (mysqli_query($dbc, $sql)) { 
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Not enough Money in account'
          })</script>";                                    
    } else {
   $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
    }

            
}

      
         


                    }
                    else{
                        echo "<script>alert('Not able to get bal data from the user_id');</script>";  
                    }

//                     $result = @mysqli_query($dbc, "select balance from account where user_id='$user_id'");
//                     $row = mysqli_fetch_array($result, MYSQLI_NUM);
//                     $noOfrecords=$row[0];
//                     if ($noOfrecords>0) {
//                         $useramt=$row[0];
//                         if($useramt<=$tamt){
//                             $famt=$useramt-$tamt;
                           
// $sql = "UPDATE account SET balance='$famt' WHERE user_id='$user_id'";

// if (mysqli_query($dbc, $sql)) {
// } else {
//   echo "Error updating record: " . mysqli_error($dbc);
// }
// $result = @mysqli_query($dbc, "select balance from account where user_id='$tuser'");
// $row = mysqli_fetch_array($result, MYSQLI_NUM);
// $noOfrecords=$row[0];
// if ($noOfrecords>0) {
//     $tuseramt=$row[0];
//     $famt2=$tuseramt+$tamt;

//     $sql = "UPDATE account SET balance='$famt2' WHERE user_id='$tuser'";

//     if (mysqli_query($dbc, $sql)) {
//     } else {
//       echo "Error updating record: " . mysqli_error($dbc);
//     }

// }
//                         }
//                         else{
//                             echo "<script>
//                             Swal.fire({
//                         icon: 'error',
//                         title: 'Oops...',
//                         text: 'Something went wrong! Not enough amount in account!'
//                           })</script>";
//                         }
//                     }
      
      
              }

                else if($ttype=="cc"){

                    $result = @mysqli_query($dbc, "select card_bal from credit_card where user_id='$user_id'");
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $noOfrecords=$row[0];
                    if ($noOfrecords>0) {
                     $useramt=$row[0];
                         
if($useramt>=$tamt){
       
           $famt=$useramt-$tamt;
           
           $sql = "UPDATE credit_card SET card_bal='$famt' WHERE user_id='$user_id'";

           if (mysqli_query($dbc, $sql)) {
            
            } else {
           echo "Error updating record: " . mysqli_error($dbc);
            }



            $result = @mysqli_query($dbc, "select balance from account where user_id='$tuser'");
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $noOfrecords=$row[0];
            if ($noOfrecords>0) {
             $useramt2=$row[0];
             $famt2=$useramt2+$tamt;
                  
             $sql = "UPDATE account SET balance='$famt2' WHERE user_id='$tuser'";

             if (mysqli_query($dbc, $sql)) {

                                         $sql = "INSERT INTO transaction (user_id,old_bal,new_bal,t_amt)
                                         VALUES ('$user_id','$useramt','$famt','$tamt')";
                                         if (mysqli_query($dbc, $sql)) { 
                                                                                    
                                         } else {
                                        $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
                                         }

                                                             $sql = "INSERT INTO transaction (user_id,old_bal,new_bal,t_amt)
                                                              VALUES ('$tuser','$useramt2','$famt2','$tamt')";
                                                             if (mysqli_query($dbc, $sql)) { 
                                          
                                                             echo "<script>Swal.fire(
                                                             'Nice job!',
                                                              'Transfer success!',
                                                              'success'
                                                                  )</script>";
                                                                 } else {
                                                                $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
                                                                 }



               
              } else {
             echo "Error updating record: " . mysqli_error($dbc);
              }


            } else{
                echo "<script>alert('Not done');</script>"; 
            }





}else{
    $t_id=rand(1,9000000);
    $sql = "INSERT INTO trans_error (t_id,user_id,reason,te_amt)
    VALUES ('$t_id','$user_id','Not enough money in credit card','$tamt')";
    if (mysqli_query($dbc, $sql)) { 
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Not enough Money in Credit card'
          })</script>";                                    
    } else {
   $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
    }

            
}

      
         


                    }
                    else{
                        echo "<script>alert('Not able to get bal data from the user_id');</script>";  
                    }

                }
                  


            }
          //logic to check if correct user id and password entered - End()
         ?>

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
   
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Transfer</h5>
            <p>account balance - <?php 
            
            function function_alert($message) { 
	  
				
                echo "<script>
                    Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong! Password or Username is Incorrect!'
                  })</script>";
                    
                } 
            

               $result = @mysqli_query($dbc, "select balance from account where user_id='$user_id'");
               $row = mysqli_fetch_array($result, MYSQLI_NUM);
               $noOfrecords=$row[0];
               
               if ($noOfrecords>0) {
                $amt=$row[0];
               echo $amt;
               }else {
                 $msg = 'Wrong email or password';
                 function_alert($msg);
               }

            
            ?> </p> 
            <p>cc balance - <?php 
            
            function function_alert1($message) { 
	  
				
                echo "<script>
                    Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong! Password or Username is Incorrect!'
                  })</script>";
                    
                } 
            

               $result = @mysqli_query($dbc, "select card_bal from credit_card where user_id='$user_id'");
               $row = mysqli_fetch_array($result, MYSQLI_NUM);
               $noOfrecords=$row[0];
               
               if ($noOfrecords>0) {
                $camt=$row[0];
               echo $camt;
               }else {
                 $msg = 'Wrong email or password';
                 function_alert1($msg);
               }

            
            ?></p>

            <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
              <div class="form-label-group">
                <input type="number" name="tamt" id="inputUserame" class="form-control" placeholder="Transfer amount" required autofocus>
                <label for="inputUserame">Transfer amount</label>
              </div>

              <div class="form-label-group">
                <input type="number" name="tuser" id="inputEmail" class="form-control" placeholder="User Id" required>
                <label for="inputEmail">User Id</label>
              </div>

              <hr>

              <label class="radio-inline"> <span style="font-size:20px;"> Debit from  : &nbsp;&nbsp;&nbsp; </span>
      <input type="radio" name="ttype" value="ac" checked><span style="font-size:20px; "> Account &nbsp;&nbsp;&nbsp;</span>
    </label>
    <label class="radio-inline" style="margin-bottom:15px;">
      <input type="radio" name="ttype" value="cc" ><span style="font-size:20px;"> CC</span>
    </label>
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Send</button>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>

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
