<?php
   session_start();
   include ('connect_to_sql.php');
   $admin_id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>admin page</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
.user-flex3 {
    display: flex;
    justify-content: center;
    flex-direction: column;
}

li {
    text-align: center;
    font-size: 20px;
}

.user-flex5 {
    display: flex;
    justify-content: center;
}

.user-flex6 {
    display: none;
    justify-content: column;
}

.form-control {
    width: 30%;
    margin: 20px;
}

.btn-block {
    margin: 20px;
    width: 30%;
}

.user_flex2 {
    display: flex;
    justify-content: center;
    flex-direction: row;
}

.user_flex10 {
    display: flex;
    justify-content: flex-start;
    flex-direction: row;
}

.user_flex11 {
    display: flex;
    justify-content: center;
    flex-direction: row;
}

li {
    text-align: center;
}

ul {
    list-style-type: none;
}
.user_flex10 > div{
  padding:10px 20px;
}


.admbtn {background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5  51%, #00d2ff  100%)}
         .admbtn {
          margin: 0px;
            padding: 8px 20px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .admbtn:hover {
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

    <!-- ======= Hero Section ======= -->


    <main id="main">



        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Admin Panel</h2>
                    <p>Here we have full control and access over the sglb banking database</p>
                </div>

               
           

                <div class="row no-gutters">



                    <div class="col-lg-4 box " data-aos="fade-up">
                        <h3>Total number of male users</h3>
                        <h4><img src="male.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select count(user_id) from users where gender='m'");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

					$tottrans=$row[0];
					echo '<li >'.$tottrans.'</li>';
				}else{
					echo "<script>alert('Not able to get count transaction data');</script>";  
				}

            ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 box featured " data-aos="fade-up">
                        <h3>Total number of users</h3>
                        <h4><img src="illu11.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select count(*) from users");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

					$totusers=$row[0];
					echo '<li >'.$totusers.'</li>';
				}else{
					echo "<script>alert('Not able to get count data');</script>";  
				}

            ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 box " data-aos="fade-up">
                        <h3>Total number of female users</h3>
                        <h4><img src="female.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select count(user_id) from users where gender='f'");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

					$toterror=$row[0];
					echo '<li >'.$toterror.'</li>';
				}else{
					echo "<script>alert('Not able to get error details data');</script>";  
				}

            ?>
                        </ul>
                    </div>


                </div>

            </div>
        </section><!-- End Pricing Section -->

        <canvas id="myChart" width="120" height="30"></canvas>
                <br>

  <script>

var jarr=<?php echo $tottrans; ?>;
var jarr2=<?php echo $toterror; ?>;

var arr=[];
arr.push(jarr);
arr.push(jarr2);


var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Male users","Female users"],
                datasets: [{
                    label: 'Users graph',
                    data: arr,
                    backgroundColor: ["rgb(47,46,65)","rgb(108,99,255)"],
                    borderColor: [
                        'white',
                        'white'
                    ],
                    borderWidth: 4
                }]
            },
            
        });

  </script>      


   <!-- ======= Pricing Section ======= -->
   <section id="pricing" class="pricing">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-4 box " data-aos="fade-up">
                        <h3>Total number of success transactions</h3>
                        <h4><img src="illu12.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select count(*) from transaction");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

          $tottrans=$row[0];
					echo '<li >'.$tottrans.'</li>';
				}else{
					echo "<script>alert('Not able to get count transaction data');</script>";  
				}

            ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 box featured " data-aos="fade-up">
                        <h3>Total number of Transactions</h3>
                        <h4><img src="transfer.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
     
            $result = @mysqli_query($dbc, "select count(*) from transaction");
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $noOfrecords=$row[0];         
            $phparr = array();
    if ($noOfrecords>0) {

      $tottrans1=$row[0];
      $phparr[]=$tottrans1;
    }else{
      echo "<script>alert('Not able to get count transaction data');</script>";  
    }


        $result = @mysqli_query($dbc, "select count(*) from trans_error");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $noOfrecords=$row[0];         

if ($noOfrecords>0) {

  $toterror1=$row[0];
  $phparr[]=$toterror1;
}else{
  echo "<script>alert('Not able to get error details data');</script>";  
}

$ftrans=$toterror1+$tottrans1;

echo '<li >'.$ftrans.'</li>';


            ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 box " data-aos="fade-up">
                        <h3>Total number of failed transactions</h3>
                        <h4><img src="illu13.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select count(*) from trans_error");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

					$toterror=$row[0];
					echo '<li >'.$toterror.'</li>';
				}else{
					echo "<script>alert('Not able to get error details data');</script>";  
				}

            ?>
                        </ul>
                    </div>


                </div>

            </div>
        </section><!-- End Pricing Section -->


        <canvas id="myChart2" width="120" height="30"></canvas>
<br>


        <script>
    var jarr2 = <?php echo json_encode($phparr); ?>;
    





      
        var b = -330;
        var ctx = document.getElementById('myChart2');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Successful","Failed"],
                datasets: [{
                    label: 'Transaction graph',
                    data: jarr2,
                    backgroundColor:  ["rgb(47,46,65)","rgb(108,99,255)"],
                    borderColor: [
                        'white',
                        'white'

                    ],
                    borderWidth: 4
                }]
            },
            
        });
    </script>



   <!-- ======= Pricing Section ======= -->
   <section id="pricing" class="pricing">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-4 box " data-aos="fade-up">
                        <h3>Total amount of money in account</h3>
                        <h4><img src="acc.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select sum(balance) from account");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

          $totaamt=$row[0];
					echo '<li >'.$totaamt.'</li>';
				}else{
					echo "<script>alert('Not able to get balance amt data');</script>";  
				}

            ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 box featured " data-aos="fade-up">
                        <h3>Total amount of money</h3>
                        <h4><img src="totbal.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
     
            $result = @mysqli_query($dbc, "select sum(balance) from account");
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $noOfrecords=$row[0];         
            $phparr = array();
    if ($noOfrecords>0) {

      $totaamt2=$row[0];
    }else{
      echo "<script>alert('Not able to get count transaction data');</script>";  
    }


        $result = @mysqli_query($dbc, "select sum(card_bal) from credit_card");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $noOfrecords=$row[0];         

if ($noOfrecords>0) {

  $totcamt2=$row[0];
}else{
  echo "<script>alert('Not able to get credit card + account amt data');</script>";  
}

$ftotamt=$totcamt2+$totaamt2;

echo '<li >'.$ftotamt.'</li>';


            ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 box " data-aos="fade-up">
                        <h3>Total amount of money in credit card</h3>
                        <h4><img src="cred.svg" alt="locker" width="95px;" height="95px;"></h4>
                        <ul>
                            <?php
            
            
              
            $result = @mysqli_query($dbc, "select sum(card_bal) from credit_card");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];         

				if ($noOfrecords>0) {

					$totcamt=$row[0];
					echo '<li >'.$totcamt.'</li>';
				}else{
					echo "<script>alert('Not able to get error details data');</script>";  
				}

            ?>
                        </ul>
                    </div>


                </div>

            </div>
        </section><!-- End Pricing Section -->



        <canvas id="myfChart" width="90" height="20"></canvas>

<br>
<br>

        <script>
    var totjarr = <?php echo $totaamt2; ?>;
    var totjarr2 = <?php echo $totcamt2; ?>;

var fjarr=[];
fjarr.push(totjarr);
fjarr.push(totjarr2);

        var ctx = document.getElementById('myfChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["account","credit card"],
                datasets: [{
                    label: 'Balance graph',
                    data: fjarr,
                    backgroundColor: ["rgb(47,46,65)","rgb(108,99,255)"],
                    borderColor: [
                        'white',
                        'white'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>




        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <center>
                <p style="margin:20px;">Get the required data by selecting appropriate options -</p>
                <div class="form-label-group">
                    <select style="padding:4px 5px;" class="form-control" id="sel1" name="table" width="50px;" required>
                        <option value="" disabled selected>Select Table</option>
                        <option value="users">Users</option>
                        <option value="account">Account</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="locker">Locker</option>
                        <option value="transaction">Transaction</option>
                        <option value="trans_error">Transaction Error</option>
                        <option value="logins">Logins</option>
                    </select>

                    <select style="padding:0px 0px;" class="form-control" id="sel2" name="field" required>
                        <option value="" disabled selected>Select Field</option>
                        <option value="*">All</option>
                        <option value="user_id">User id</option>
                        <option value="fname">Name</option>
                        <option value="address">Address</option>
                        <option value="email">Email</option>
                        <option value="mob">Mobile Number</option>
                        <option value="dob">Dob</option>
                        <option value="gender">Gender</option>
                        <option value="pass">Password</option>
                        <option value="ac_num">Account Number</option>
                        <option value="ac_type">Account Type</option>
                        <option value="ac_status">Account Status</option>
                        <option value="balance">Balance</option>
                        <option value="card_num">Card Number</option>
                        <option value="card_bal">Card Balance</option>
                        <option value="exp_date">Expiry</option>
                        <option value="lk_id">Locker Id</option>
                        <option value="lk_type">Locker Type</option>
                        <option value="lk_cap">Locker capacity</option>
                        <option value="log_id">Login Id</option>
                        <option value="log_time">Login Time</option>
                        <option value="otp">otp</option>
                        <option value="t_id">Transaction Id</option>
                        <option value="old_bal">Old Balance</option>
                        <option value="new_bal">New Balance</option>
                        <option value="t_time">Transaction Time</option>
                        <option value="t_amt">Transaction Amount</option>
                        <option value="te_id">Transaction Error ID</option>
                        <option value="reason">Reason for Error</option>
                        <option value="te_amt">Transaction Error amount</option>
                        <option value="te_time">Transaction Error time</option>

                    </select>

                    <select style="padding:0px 0px;" class="form-control" id="sel3" name="key" required>
                        <option value="" disabled selected>Select Key</option>
                        <option value="none">None</option>
                        <option value="user_id">User id</option>
                        <option value="fname">Name</option>
                        <option value="address">Address</option>
                        <option value="email">Email</option>
                        <option value="mob">Mobile Number</option>
                        <option value="dob">Dob</option>
                        <option value="gender">Gender</option>
                        <option value="pass">Password</option>
                        <option value="ac_num">Account Number</option>
                        <option value="ac_type">Account Type</option>
                        <option value="ac_status">Account Status</option>
                        <option value="balance">Balance</option>
                        <option value="card_num">Card Number</option>
                        <option value="card_bal">Card Balance</option>
                        <option value="exp_date">Expiry</option>
                        <option value="lk_id">Locker Id</option>
                        <option value="lk_type">Locker Type</option>
                        <option value="lk_cap">Locker capacity</option>
                        <option value="log_id">Login Id</option>
                        <option value="log_time">Login Time</option>
                        <option value="otp">otp</option>
                        <option value="t_id">Transaction Id</option>
                        <option value="old_bal">Old Balance</option>
                        <option value="new_bal">New Balance</option>
                        <option value="t_time">Transaction Time</option>
                        <option value="t_amt">Transaction Amount</option>
                        <option value="te_id">Transaction Error ID</option>
                        <option value="reason">Reason for Error</option>
                        <option value="te_amt">Transaction Error amount</option>
                        <option value="te_time">Transaction Error time</option>
                    </select>


                    <select style="padding:0px 0px;" class="form-control" id="op" name="operation" required>
                        <option value="" disabled selected>Select operation</option>
                        <option value="none">None</option>
                        <option value="=">=</option>
                        <option value="<"><</option>
                        <option value=">">></option>
                        <option value="<="><=</option>
                        <option value=">=">>=</option>
                        <option value="ASC">order by ASC</option>
                        <option value="DESC">order by DESC</option>
                        <option value="limit">LIMIT</option>
                        <option value="max">MAX</option>
                        <option value="min">MIN</option>
                        <option value="count">COUNT</option>
                        <option value="avg">AVG</option>
                        <option value="sum">SUM</option>
                        <option value="like">LIKE</option>
                        <option value="join">JOIN</option>
                    </select>


                    <label class="radio-inline"> <span style="font-size:20px;"> &nbsp;&nbsp;&nbsp; </span>
                        <input type="radio" name="input_type" value="txt" checked><span style="font-size:20px; "> Text
                            &nbsp;&nbsp;&nbsp;</span>
                    </label>
                    <label class="radio-inline" style="margin-bottom:15px;">
                        <input type="radio" name="input_type" value="num"><span style="font-size:20px;"> Number</span>
                    </label>
                </div>



                <input type="text" list="browsers" class="form-control" id="somethingelse" name="input_value"
                    placeholder="Enter Value">
                <datalist id="browsers">
                    <option value="none">
                </datalist>

                </div>


                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
                    name="login" type="submit">Confirm</button>
                <div class="text-center">
        </form>

        <br>
        <div class="accordion-list">
            <ul>

                <?php

if (isset($_POST['login']) && !empty($_POST['table']) 
&& !empty($_POST['field']) && !empty($_POST['key']) && !empty($_POST['input_type']) && !empty($_POST['input_value'])) {
 
 $table=$_POST['table'];
 $key=$_POST['key'];
 $field=$_POST['field'];
 $input_value=$_POST['input_value'];
 $input_type=$_POST['input_type'];
$operation=$_POST['operation'];


    if($input_type=="num"){
		$input_value2=(int)$input_value;
   
	}else{
		$input_value2=$input_value;
	}
			
  // $sql = "SELECT `{$field}` FROM `{$table}` WHERE user_id='31'";
  // $result = mysqli_query($dbc, $sql);
            
  //           if (mysqli_num_rows($result) > 0) {
  //             // output data of each row
            
  //             while($row = mysqli_fetch_assoc($result)) {
               
  //              echo $row[$field];
  //             }
  //           }else{
  //               echo "<script>alert('Not able to get user data from the variable table');</script>";  
  //           }            



  if($input_value!=="none" && $key=="none" && $field!=="*" && $operation=="limit"){
 
              
    $sql = "SELECT `{$field}` FROM `{$table}` LIMIT $input_value2";
    $result = mysqli_query($dbc, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
    
      while($row = mysqli_fetch_assoc($result)) {
       
        echo' <hr><li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
    <div class="user_flex2">
<div>'.$row[$field].'</div>
</div>
</a>
</li>';

      }
    }else{
        echo "<script>alert('Not able to get user data from limit function ');</script>";  
    }      

}




if($input_value=="none" && $key=="none" && $field!=="*" && $operation=="none"){
 
              
            $sql = "SELECT `{$field}` FROM `{$table}`";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               
                echo'<hr><li data-aos="fade-up">
       <a class="collapsed" href="#accordion-list-1">
            <div class="user_flex2">
        <div>'.$row[$field].'</div>
        </div>
        </a>
      </li>';

              }
            }else{
                echo "<script>alert('Not able to get user data from literals value');</script>";  
            }      

}

if($input_value=="none" && $key=="none" && $field=="*" && $operation=="count"){
 
       
  $result = @mysqli_query($dbc, "select count(*) from `{$table}`");
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  $noOfrecords=$row[0];         

if ($noOfrecords>0) {

$totusers=$row[0];
echo '<hr><li >'.$totusers.'</li>';
}else{
echo "<script>alert('Not able to get count data from literals');</script>";  
}

}



if($input_value=="none" && $key!=="none" && ($operation=="ASC" || $operation=="DESC")){


switch($operation){
  case "ASC":
    $sql = "SELECT `{$field}` FROM `{$table}` ORDER BY `{$key}`";
    $result = mysqli_query($dbc, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
    
      while($row = mysqli_fetch_assoc($result)) {
       
        echo'<hr> <li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
    <div class="user_flex2">
<div>'.$row[$field].'</div>
</div>
</a>
</li>';

      }
    }else{
        echo "<script>alert('Not able to get user data from literals value');</script>";  
    }      
break;



case "DESC":
  $sql = "SELECT `{$field}` FROM `{$table}` ORDER BY `{$key}` DESC";
  $result = mysqli_query($dbc, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
  
    while($row = mysqli_fetch_assoc($result)) {
     
      echo' <hr><li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
  <div class="user_flex2">
<div>'.$row[$field].'</div>
</div>
</a>
</li>';

    }
  }else{
      echo "<script>alert('Not able to get user data from literals value');</script>";  
  }    
break;

default:echo "<script>alert('Not able to get data from switch 3');</script>";  



}


}





if($input_value=="none" && $key=="none" && $field!=="*" && $operation!=="count" && $operation!=="none" && $operation!=="like" && $operation!=="limit" && $operation!=="ASC" && $operation!=="DESC" && $operation!=="<"&& $operation!==">" && $operation!=="<=" && $operation!==">=" && $operation!=="=" && $operation!=="join" ){
 
    
  
switch($operation){


  case "sum":
    $result = @mysqli_query($dbc, "select sum(`{$field}`) from `{$table}`");
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    $noOfrecords=$row[0];         
  
  if ($noOfrecords>0) {
  
  $totusers=$row[0];
  echo '<hr><li >'.$totusers.'</li>';
  }else{
  echo "<script>alert('Not able to get count data from literals');</script>";  
  }
break;

case "max":
  $result = @mysqli_query($dbc, "select max(`{$field}`) from `{$table}`");
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  $noOfrecords=$row[0];         

if ($noOfrecords>0) {

$totusers=$row[0];
echo '<hr><li >'.$totusers.'</li>';
}else{
echo "<script>alert('Not able to get count data from literals');</script>";  
}
break;



case "min":
  $result = @mysqli_query($dbc, "select min(`{$field}`) from `{$table}`");
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  $noOfrecords=$row[0];         

if ($noOfrecords>0) {

$totusers=$row[0];
echo '<hr><li >'.$totusers.'</li>';
}else{
echo "<script>alert('Not able to get count data from literals');</script>";  
}
break;


case "avg":
  $result = @mysqli_query($dbc, "select avg(`{$field}`) from `{$table}`");
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  $noOfrecords=$row[0];         

if ($noOfrecords>0) {

$totusers=$row[0];
echo '<hr><li >'.$totusers.'</li>';
}else{
echo "<script>alert('Not able to get count data from literals');</script>";  
}
break;

  default:echo "<script>alert('Not able to get data from inside switch');</script>";  
  

}





}







if($input_value=="none" && $key=="none" && $field=="*"  && $operation=="none"){
 
   if($table=="users"){           
  $sql = "SELECT * FROM `{$table}`";
  $result = mysqli_query($dbc, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
  
    while($row = mysqli_fetch_assoc($result)) {
     
      echo' <hr><li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
  <div class="user_flex10">
<div>'.$row['user_id'].'</div>
<div>'.$row['fname'].'</div>
<div>'.$row['address'].'</div>
<div>'.$row['email'].'</div>
<div>'.$row['mob'].'</div>
<div>'.$row['dob'].'</div>
<div>'.$row['gender'].'</div>
<div>'.$row['pass'].'</div>
</div>
</a>
</li>';

    }
  }else{
      echo "<script>alert('Not able to get user data from literals value of users table');</script>";  
  }      }




  if($table=="account"){           
    $sql = "SELECT * FROM `{$table}`";
    $result = mysqli_query($dbc, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
    
      while($row = mysqli_fetch_assoc($result)) {
       
        echo' <hr><li data-aos="fade-up">
  <a class="collapsed" href="#accordion-list-1">
    <div class="user_flex10">
  <div>'.$row['user_id'].'</div>
  <div>'.$row['ac_num'].'</div>
  <div>'.$row['ac_type'].'</div>
  <div>'.$row['ac_status'].'</div>
  <div>'.$row['balance'].'</div>
  <div>'.$row['fname'].'</div>
  </div>
  </a>
  </li>';
  
      }
    }else{
        echo "<script>alert('Not able to get user data from account table literals value');</script>";  
    }      }



    if($table=="credit_card"){           
      $sql = "SELECT * FROM `{$table}`";
      $result = mysqli_query($dbc, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
      
        while($row = mysqli_fetch_assoc($result)) {
         
          echo'<hr> <li data-aos="fade-up">
    <a class="collapsed" href="#accordion-list-1">
      <div class="user_flex10">
    <div>'.$row['user_id'].'</div>
    <div>'.$row['card_num'].'</div>
    <div>'.$row['card_bal'].'</div>
    <div>'.$row['exp_date'].'</div>
    </div>
    </a>
    </li>';
    
        }
      }else{
          echo "<script>alert('Not able to get user data from literals value');</script>";  
      }      }



      if($table=="locker"){           
        $sql = "SELECT * FROM `{$table}`";
        $result = mysqli_query($dbc, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
        
          while($row = mysqli_fetch_assoc($result)) {
           
            echo'<hr> <li data-aos="fade-up">
      <a class="collapsed" href="#accordion-list-1">
        <div class="user_flex10">
      <div>'.$row['user_id'].'</div>
      <div>'.$row['lk_id'].'</div>
      <div>'.$row['lk_type'].'</div>
      <div>'.$row['lk_cap'].'</div>
      </div>
      </a>
      </li>';
      
          }
        }else{
            echo "<script>alert('Not able to get user data from literals value');</script>";  
        }      }




        if($table=="logins"){           
          $sql = "SELECT * FROM `{$table}`";
          $result = mysqli_query($dbc, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
          
            while($row = mysqli_fetch_assoc($result)) {
             
              echo'<hr> <li data-aos="fade-up">
        <a class="collapsed" href="#accordion-list-1">
          <div class="user_flex10">
        <div>'.$row['user_id'].'</div>
        <div>'.$row['log_id'].'</div>
        <div>'.$row['log_time'].'</div>
        <div>'.$row['pass'].'</div>
        <div>'.$row['otp'].'</div>
        </div>
        </a>
        </li>';
        
            }
          }else{
              echo "<script>alert('Not able to get user data from logins table literals value');</script>";  
          }      }




          if($table=="transaction"){           
            $sql = "SELECT * FROM `{$table}`";
            $result = mysqli_query($dbc, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
              while($row = mysqli_fetch_assoc($result)) {
               
                echo' <hr><li data-aos="fade-up">
          <a class="collapsed" href="#accordion-list-1">
            <div class="user_flex10">
          <div>'.$row['user_id'].'</div>
          <div>'.$row['t_id'].'</div>
          <div>'.$row['old_bal'].'</div>
          <div>'.$row['new_bal'].'</div>
          <div>'.$row['t_time'].'</div>
          <div>'.$row['t_amt'].'</div>
          </div>
          </a>
          </li>';
          
              }
            }else{
                echo "<script>alert('Not able to get user data from literals value');</script>";  
            }      }


            if($table=="trans_error"){           
              $sql = "SELECT * FROM `{$table}`";
              $result = mysqli_query($dbc, $sql);
              
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
              
                while($row = mysqli_fetch_assoc($result)) {
                 
                  echo'<hr> <li data-aos="fade-up">
            <a class="collapsed" href="#accordion-list-1">
              <div class="user_flex10">
            <div>'.$row['user_id'].'</div>
            <div>'.$row['te_id'].'</div>
            <div>'.$row['t_id'].'</div>
            <div>'.$row['reason'].'</div>
            <div>'.$row['te_time'].'</div>
            <div>'.$row['te_amt'].'</div>
            </div>
            </a>
            </li>';
            
                }
              }else{
                  echo "<script>alert('Not able to get user data from literals value');</script>";  
              }      }





}

                                    if($key!=="none" && $input_value!=="none"  && $operation!=="none" && ( $operation=="like" || $operation=="<" || $operation==">" || $operation=="<=" || $operation==">=" || $operation=="=" ) ){
                                               
                                      

                             switch($operation){
                                   
                              case "=" :
                                       $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}`='$input_value2'";
                                            $result = mysqli_query($dbc, $sql);
            
                              if (mysqli_num_rows($result) > 0) {
              // output data of each row
            
                            while($row = mysqli_fetch_assoc($result)) {
               
                              echo'<hr> <li data-aos="fade-up">
                              <a class="collapsed" href="#accordion-list-1">
                                <div class="user_flex11">
                              <div>'.$row[$field].'</div>                         
                              </div>
                              </a>
                              </li>';
                           }
                         }else{
                                  echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
                               }  
                              break;

                              case "<" :
                                $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}`<'$input_value2'";
                                     $result = mysqli_query($dbc, $sql);
     
                       if (mysqli_num_rows($result) > 0) {
       // output data of each row
     
                     while($row = mysqli_fetch_assoc($result)) {
        
                       echo' <hr><li data-aos="fade-up">
                       <a class="collapsed" href="#accordion-list-1">
                         <div class="user_flex11">
                       <div>'.$row[$field].'</div>                         
                       </div>
                       </a>
                       </li>';
                    }
                  }else{
                           echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
                        }  
                       break;

                       case ">" :
                        $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}`>'$input_value2'";
                             $result = mysqli_query($dbc, $sql);

               if (mysqli_num_rows($result) > 0) {
// output data of each row

             while($row = mysqli_fetch_assoc($result)) {

               echo'<hr> <li data-aos="fade-up">
               <a class="collapsed" href="#accordion-list-1">
                 <div class="user_flex11">
               <div>'.$row[$field].'</div>                         
               </div>
               </a>
               </li>';
            }
          }else{
                   echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
                }  
               break;

               case "=" :
                $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}`='$input_value2'";
                     $result = mysqli_query($dbc, $sql);

       if (mysqli_num_rows($result) > 0) {
// output data of each row

     while($row = mysqli_fetch_assoc($result)) {

       echo'<hr> <li data-aos="fade-up">
       <a class="collapsed" href="#accordion-list-1">
         <div class="user_flex11">
       <div>'.$row[$field].'</div>                         
       </div>
       </a>
       </li>';
    }
  }else{
           echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
        }  
       break;

       case "<=" :
        $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}` <= '$input_value2'";
             $result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row

while($row = mysqli_fetch_assoc($result)) {

echo'<hr> <li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
 <div class="user_flex11">
<div>'.$row[$field].'</div>                         
</div>
</a>
</li>';
}
}else{
   echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
}  
break;


case ">=" :
  $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}` >= '$input_value2'";
       $result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row

while($row = mysqli_fetch_assoc($result)) {

echo' <hr><li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
<div class="user_flex11">
<div>'.$row[$field].'</div>                         
</div>
</a>
</li>';
}
}else{
echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
}  
break;

case "like" :
  $sql = "SELECT `{$field}` FROM `{$table}` WHERE `{$key}` LIKE '$input_value2'";
       $result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row

while($row = mysqli_fetch_assoc($result)) {

echo'<hr> <li data-aos="fade-up">
<a class="collapsed" href="#accordion-list-1">
<div class="user_flex11">
<div>'.$row[$field].'</div>                         
</div>
</a>
</li>';
}
}else{
echo "<script>alert('Not able to get user data from the key,input_value2 table');</script>";  
}  
break;

default:echo "<script>alert('Not able to get data from switch 2 table');</script>";  



                              }

                                                    }



                                                    if($input_value!=="none" && $key!=="none" && $operation=="join"){
 
              
                                                      $sql = "SELECT `{$table}`.`{$field}` FROM `{$table}` INNER JOIN `{$input_value2}` ON `{$input_value2}`.`{$key}`=`{$table}`.`{$key}`";
                                                      $result = mysqli_query($dbc, $sql);
                                                      
                                                      if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                      
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                         
                                                          echo' <hr><li data-aos="fade-up">
                                                 <a class="collapsed" href="#accordion-list-1">
                                                      <div class="user_flex2">
                                                  <div>'.$row[$field].'</div>
                                                  </div>
                                                  </a>
                                                </li>';
                                          
                                                        }
                                                      }else{
                                                          echo "<script>alert('Not able to get from join function');</script>";  
                                                      }      
                                          
                                          }        
                                          
                                          
                                     




}
else{


}
?>


            </ul>
        </div>
        </center>
    </main><!-- End #main -->





    <footer>
        <div class="container py-4">
            <div class="copyright">
          <a href="https://www.jdoodle.com/online-mysql-terminal/" target="_blank"><button class="admbtn">Admin ++</button></a>
                &copy; Copyright <strong><span>Sglb Banking</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by swastik and sindhu
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
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