<?php
   ob_start();
   session_start();
   $page_title = 'Login Page';
   include ('connect_to_sql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script defer src="https://friconix.com/cdn/friconix.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
body {
	color: #fff;
    background:pink;
}
.form-control {
	min-height: 41px;
	background: #fff;
	box-shadow: none !important;
	border-color: #e3e3e3;
}
.form-control:focus {
	border-color: #70c5c0;
}
.form-control, .btn {        
	border-radius: 2px;
}
.login-form {
	width: 350px;
	margin: 0 auto;
	padding: 100px 0 30px;		
}
.login-form form {
	color: #7a7a7a;
	border-radius: 2px;
	margin-bottom: 15px;
	font-size: 13px;
	background: #ececec;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;	
	position: relative;	
}
.login-form h2 {
	font-size: 22px;
	margin: 35px 0 25px;
}
.login-form .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -50px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #70c5c0;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
	width: 100%;
}	
.login-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.login-form .btn, .login-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background: #70c5c0 !important;
	border: none;
	margin-bottom: 20px;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #50b8b3 !important;
}    
.login-form a {
	color: #fff;
	text-decoration: underline;
}
.login-form a:hover {
	text-decoration: none;
}
.login-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.login-form form a:hover {
	text-decoration: underline;
}
.login-form .bottom-action {
	font-size: 14px;
}
</style>
</head>
<body>

<?php
            $msg = '';
            function function_alert($message) { 
                
                // Display the alert box  
               
                header('Location: login.php');
                // print "<script>
                // Swal.fire(
                //     'Good job!',
                //     '$message',
                //     'success'
                // );</script>";   
                // sleep(8);
            } 
           //logic to check if correct user id and password entered - Start()
            if (isset($_POST['login']) && !empty($_POST['email']) 
               && !empty($_POST['password'])&& !empty($_POST['fname'])&& !empty($_POST['address'])&& !empty($_POST['number'])&& !empty($_POST['dob'])&& !empty($_POST['gender'])) {
				
                $email=$_POST['email'];
                $password=$_POST['password'];
                $number=$_POST['number'];
                $address=$_POST['address'];
                $fname=$_POST['fname'];
                $dob=$_POST['dob'];
                $gender=$_POST['gender'];

                $sql = "INSERT INTO users (fname,address,email,mob,dob,gender,pass)
                   VALUES ('$fname','$address', '$email','$number','$dob','$gender','$password')";

                
// $sql = "SELECT user_id FROM users WHERE email='$email'";
// $result = mysqli_query($dbc, $sql);

if (mysqli_query($dbc, $sql)) { 

                            } else {
                     $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
                              }


$result = @mysqli_query($dbc, "select user_id from users where email='$email'");
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$noOfrecords=$row[0];

if ($noOfrecords>0) {
  $user_id=$row[0];
}else {
  $msg = 'Wrong email or password';
}


// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     $user_id=$row["user_id"];
    
//   }
// } else {
//   echo "0 results";
// }


$sql = "INSERT INTO account (user_id,ac_type,ac_status,balance,fname)
VALUES ('$user_id','savings','working',1000,'$fname')";
                  if (mysqli_query($dbc, $sql)) { 
                    $msg = "New record created successfully";
                        } else {
                 $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
                
                          }

                        //   $start = strtotime("25 September 2020");
 
                        //   //End point of our date range.
                        //   $end = strtotime("25 July 2026");
                           
                        //   //Custom range.
                        //   $timestamp = mt_rand($start, $end);

//                         $start_date=01;
//                         $end_date=29;

//                           $min = strtotime($start_date);
//     $max = strtotime($end_date);

//     // Generate random number using above bounds
//     $val = rand($min, $max);

//     // Convert back to desired date format
// $timestamp= date('Y-m-d H:i:s', $val);
           

$year=rand(2021,2026);
$mon=rand(1,12);
$da=rand(1,29);
$timestamp=$year."-".$mon."-".$da;

$sql = "INSERT INTO credit_card (user_id,card_bal,exp_date)
VALUES ('$user_id',5000,'$timestamp')";
if (mysqli_query($dbc, $sql)) { 
$msg = "New record created successfully";
} else {
 $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
}


$arr1 = array("Property", "Jewellers", "Money");
$i=rand(0,2);

$sql = "INSERT INTO locker (user_id,lk_type,lk_cap)
VALUES ('$user_id','$arr1[$i]','small')";
if (mysqli_query($dbc, $sql)) { 
$msg = "New record created successfully";
} else {
 $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
}

$otp=rand(1001,9999);

$sql = "INSERT INTO logins (user_id,pass,otp)
VALUES ('$user_id','$password','$otp')";
if (mysqli_query($dbc, $sql)) { 
$msg = "Your record has been created successfully";
// print "<script>
//       Swal.fire({
//   icon: 'error',
//   title: 'Oops...',
//   text: 'Something went wrong!',
//   footer: '<a href>Why do I have this issue?</a>'
// })</script>";  
function_alert($msg);
} else {
 $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
}


      }
          //logic to check if correct user id and password entered - End()
         ?>

<div class="login-form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<div class="avatar">
        <i class="fi-cnsuxl-user-tie-circle fi-5x"></i>
		</div>
        <h2 class="text-center">Member Registration</h2>   
        <div class="form-group">
        	<input type="fname" class="form-control" name="fname" placeholder="Full Name" max="20" min="3" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" max="30" min="3" required="required">
        </div>       
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" max="25" min="3" required="required">
        </div>   
        <div class="form-group">
            <input type="number" class="form-control" name="number" placeholder="Mobile Number" max="100000000000" min="9" required="required">
        </div>    
        <div class="form-group">
            <input type="date" class="form-control" name="dob" min="1989-01-01" max="2019-12-31"  placeholder="DOB" required="required">
        </div>       
        <div class="form-group">

        <label class="radio-inline"> <span style="font-size:20px;"> Gender  : &nbsp;&nbsp;&nbsp; </span>
      <input type="radio" name="gender" value="M" ><span style="font-size:20px;"> Male &nbsp;&nbsp;&nbsp;</span>
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="F" ><span style="font-size:20px;"> Female</span>
    </label>
        </div>   
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" max="25" min="3" required="required">
        </div>   
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Register</button>
        </div>
    </form>
</div>
</body>
</html>