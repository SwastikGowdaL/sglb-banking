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

  <title>Account setings</title>
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
  --input-padding-y: 0.75rem;
}

.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('illu5.svg');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
  border-radius: 2rem;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
  border-radius: 2rem;
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
  cursor: text;
  /* Match the input under the label */
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

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>

<body>



<?php
         
           //logic to check if correct user id and password entered - Start()
            if (isset($_POST['login']) && !empty($_POST['chopt']) 
               && !empty($_POST['newinp'])) {
                
                $chopt=$_POST['chopt'];
                $newinp=$_POST['newinp'];

                switch ($chopt) {
                    case "fname":
                      

                        $sql = "UPDATE account SET fname='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {                       
                         } else {
                        
                            echo "<script>alert('Not able to update name  of account table');</script>"; 

                         }

                         $sql = "UPDATE users SET fname='$newinp' WHERE user_id='$user_id'";
             
                         if (mysqli_query($dbc, $sql)) {    
                            echo "<script>Swal.fire(
                                'Nice job!',
                                 'Change successful',
                                 'success'
                                     )</script>";                   
                          } else {
                         
                             echo "<script>alert('Not able to update name  of users table');</script>"; 
 
                          }

                               
                      break;
                    case "add":
                        $sql = "UPDATE users SET address='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update address  of users table');</script>"; 

                         }

                      break;
                    case "email":
                        $sql = "UPDATE users SET email='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update email of users table');</script>"; 

                         }
                      break;
                       
                      case "dob":
                        $sql = "UPDATE users SET dob='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update dob of users table');</script>"; 

                         }
                      break;
                      case "mob":
                        $sql = "UPDATE users SET mob='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update mob of users table');</script>"; 

                         }
                      break;
                      case "gender":
                        $sql = "UPDATE users SET gender='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update gender of users table');</script>"; 

                         }
                      break;

                      case "pass":
                        $sql = "UPDATE users SET pass='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update pass  of users table');</script>"; 

                         }
                      break;

                      case "ac_type":
                        $sql = "UPDATE account SET ac_type='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update ac_type in table');</script>"; 

                         }
                      break;
  
                      case "lk_type":
                        $sql = "UPDATE locker SET lk_type='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update lk_type table');</script>"; 

                         }
                      break;

                      case "lk_cap":
                        $sql = "UPDATE locker SET lk_cap='$newinp' WHERE user_id='$user_id'";
             
                        if (mysqli_query($dbc, $sql)) {    
                           echo "<script>Swal.fire(
                               'Nice job!',
                                'Change successful',
                                'success'
                                    )</script>";                   
                         } else {
                        
                            echo "<script>alert('Not able to update lk_cap in  table');</script>"; 

                         }
                      break;

                    default:
                      echo "<script>alert('Not able to match switch');</script>"; 
                  }

            
            //     $result = @mysqli_query($dbc, "select count(1) from users where email='$email' and pass='$password'");
            //     $row = mysqli_fetch_array($result, MYSQLI_NUM);
            //     $noOfrecords=$row[0];
                
            //    if ($noOfrecords>0) {
			// 	  $_SESSION['email'] = $email;


			// 	  $result = @mysqli_query($dbc, "select user_id from users where email='$email' and pass='$password'");
			// 	  $row = mysqli_fetch_array($result, MYSQLI_NUM);
			// 	  $noOfrecords=$row[0];
				  
			// 	  if ($noOfrecords>0) {
					
			// 		$user_id=$row[0];
			// 		$_SESSION['user_id'] = $user_id;
			// 		$otp=rand(1001,9999);
   
			// 	  $sql = "INSERT INTO logins (user_id,pass,otp)
			// 	  VALUES ('$user_id','$password','$otp')";
			// 	  if (mysqli_query($dbc, $sql)) { 
			// 	  $msg = "Your record has been created successfully";
			// 	  header('Location: index2.php');  
			// 	  } else {
			// 	   $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
			// 	   function_alert($msg);
			// 	  }
			// 	  }else {
			// 		$msg = 'Wrong email or password';
			// 		function_alert($msg);
			// 	  }


            //    }else {
            //       $msg = 'Wrong email or password';
            //       function_alert($msg); 
			//    }
			   
			   
			   


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

  <div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
            <h3 class="login-heading mb-4">Account Settings</h3>
            <p style="margin-bottom:30px"> Here you can change your Details</p>

              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" >
                  <p>Select any option you wish to change -</p>
                <div class="form-label-group">
      <select style="padding:4px 5px;" class="form-control" id="sel1" name="chopt" required>
        <option value="add">Address</option>
        <option value="email">Email</option>
        <option value="dob">DOB</option>
        <option value="gender">Gender</option>
        <option value="pass">Password</option>
        <option value="ac_type">Account Type</option>
        <option value="lk_type">Locker Type</option>
        <option value="lk_cap">Locker Capacity</option>
      </select>
                </div>
                <p>Provide the new input -</p>
                <div class="form-label-group">
                  <input style="border-radius:0px;padding-left:8px;" type="text" id="inputPassword" class="form-control" name="newinp" placeholder="New Input" required>
                  <label for="inputPassword" style="padding-left:8px;">New Input</label>
                </div>

               
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="login" type="submit">Confirm</button>
                <div class="text-center">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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