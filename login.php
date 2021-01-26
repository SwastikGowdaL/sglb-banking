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
<title>Login</title>
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
	  
				
			echo "<script>
				Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Something went wrong! Password or Username is Incorrect!'
		      })</script>";
				
            } 
           //logic to check if correct user id and password entered - Start()
            if (isset($_POST['login']) && !empty($_POST['email']) 
               && !empty($_POST['password'])) {
				
                $email=$_POST['email'];
                $password=$_POST['password'];
                $result = @mysqli_query($dbc, "select count(1) from users where email='$email' and pass='$password'");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];
                
               if ($noOfrecords>0) {
				  $_SESSION['email'] = $email;
                  

				  $result = @mysqli_query($dbc, "select user_id from users where email='$email' and pass='$password'");
				  $row = mysqli_fetch_array($result, MYSQLI_NUM);
				  $noOfrecords=$row[0];
				  
				  if ($noOfrecords>0) {
					
					$user_id=$row[0];
					$_SESSION['user_id'] = $user_id;
					$otp=rand(1001,9999);
   
				  $sql = "INSERT INTO logins (user_id,pass,otp)
				  VALUES ('$user_id','$password','$otp')";
				  if (mysqli_query($dbc, $sql)) { 
				  $msg = "Your record has been created successfully";
				  header('Location: index2.php');  
				  } else {
				   $msg="Error: " . $sql . "<br>" . mysqli_error($dbc);
				   function_alert($msg);
				  }
				  }else {
					$msg = 'Wrong email or password';
					function_alert($msg);
				  }


				  $sql = "SELECT fname FROM users WHERE email='$email' and pass='$password'";
				  $result = mysqli_query($dbc, $sql);
				  
				  if (mysqli_num_rows($result) > 0) {


					while($row = mysqli_fetch_assoc($result)) {
						$unname=$row['fname'];
						$_SESSION['unname'] = $unname;
					}
				}


               }else {
                  $msg = 'Wrong email or password';
                  function_alert($msg); 
			   }
			   
			   
			   


            }
          //logic to check if correct user id and password entered - End()
         ?>

<div class="login-form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<div class="avatar">
        <i class="fi-cnsuxl-user-tie-circle fi-5x"></i>
		</div>
        <h2 class="text-center">Member Login</h2>   
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign in</button>
        </div>
		<div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
    </form>
    <p class="text-center small" style="color:black;">Don't have an account? <a href="register.php"style="color:black;">Sign up here!</a></p>
</div>
</body>
</html>