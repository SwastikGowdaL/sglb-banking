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

  <title>Passbook</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>


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
    
    .btn-grad {background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA  51%, #77A1D3  100%)}
         .btn-grad {
            margin: 2px;
            padding: 10px 25px;
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
         
         
          .btn-grad1 {background-image: linear-gradient(to right, #D31027 0%, #EA384D  51%, #D31027  100%)}
         .btn-grad1 {
            margin: 2px;
            padding: 10px 25px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
         .user-flex{
             display:flex;
             justify-content:center;
             
         }
         .user_flex2{
             display:flex;
             justify-content:space-between;
             flex-direction:row;
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

   

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">

          <h2>Passbook</h2>
          <p>Here you can track all your Successful transactions</p>
          <br>
          <div class="user-flex" checked="checked"><button class="btn-grad">Success</button>
         <a href="passbook-failed.php"><button class="btn-grad1" >Failed</button></div></a>
         <br>
          <p style="color:green;font-size:20px;">Successful transaction</p>
         
        </div>

        <div class="accordion-list">
          <ul>
            
            <?php 
            
              
$sql = "SELECT t_amt,old_bal,new_bal,t_time FROM transaction WHERE user_id='$user_id'";
$result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $phparr = array();
  $phparr2 = array();
  echo' <li data-aos="fade-up">
 <a class="collapsed" href="#accordion-list-1" style="padding-left:0px;">
      <div class="user_flex2">
  <div>Amount</div>
  <div>Old Balance</div>
  <div>New Balance</div>
  <div>Transaction Time</div>
  </div>
  </a>
</li>';


  while($row = mysqli_fetch_assoc($result)) {
   
    $old=$row['old_bal'];
    $new=$row['new_bal'];
  $fbal=$new-$old;
   $phparr[]=$fbal;
   $phparr2[]=$row['t_time'];



    if($old>$new){
        echo' <li data-aos="fade-up">
        <i class="bx bx-minus icon-help" style="color:red;"></i> <a class="collapsed" href="#accordion-list-1">
            <div class="user_flex2">
        <div>'.$row['t_amt'].'</div>
        <div>'.$row['old_bal'].'</div>
        <div>'.$row['new_bal'].'</div>
        <div>'.$row['t_time'].'</div>
        </div>
        </a>
      </li>';

    }  
    else{
        echo' <li data-aos="fade-up">
        <i class="bx bx-plus icon-help" style="color:green;"></i> <a class="collapsed" href="#accordion-list-1">
            <div class="user_flex2">
        <div>'.$row['t_amt'].'</div>
        <div>'.$row['old_bal'].'</div>
        <div>'.$row['new_bal'].'</div>
        <div>'.$row['t_time'].'</div>
        </div>
        </a>
      </li>';
    } 

  }

//   echo "<script>alert('$arr[0]');</script>";  
//   echo "<script>var js=[];
//   js.push($arr[0]);
//   js.push($arr[1]);
//   js.push($arr[2]);
//   js.push($arr[3]);</script>";  
 
// echo '<br><canvas id="myChart" width="90" height="40"></canvas>
// <script>
// var jarr=[10,-10,35,23,15];
// var jcol=["red","green"];
// var a = "\'green\'";
// console.log(a);
// var b = -330;
// var ctx = document.getElementById("myChart");
// var myChart = new Chart(ctx, {
//     type: "bar",
//     data: {
//         labels: ["", "", "", ""],
//         datasets: [{
//             label: "Transaction graph",
//             data: js,
//             backgroundColor:jcol,
//             borderColor: "black",
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });
// </script>';


//   <script>
//   var a = "\'green\'";
//   console.log(a);
//   var b = -330;
//   var ctx = document.getElementById('myChart');
//   var myChart = new Chart(ctx, {
//       type: 'bar',
//       data: {
//           labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//           datasets: [{
//               label: 'Transaction graph',
//               data: [b, 190, 483, 495, -412, 333],
//               backgroundColor: [
//                   'rgba(255, 99, 132, 0.2)',
//                   'rgba(54, 162, 235, 0.2)',
//                   a
//               ],
//               borderColor: [
//                   'rgba(255, 99, 132, 1)',
//                   'rgba(54, 162, 235, 1)',
//                   a

//               ],
//               borderWidth: 1
//           }]
//       },
//       options: {
//           scales: {
//               yAxes: [{
//                   ticks: {
//                       beginAtZero: true
//                   }
//               }]
//           }
//       }
//   });
// </script>


} else {
    echo "No Successful transactions";
}
             
// echo' <li data-aos="fade-up" data-aos-delay="100">
// <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?'.$row["t_amt"]." ".$row["old_bal"]." ".$row['new_bal']." ".$row['t_time'].'<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a></li>';         

            ?>
           

          </ul>
         
        </div>
        
      </div>
<br>
      <canvas id="myChart" width="90" height="20"></canvas>

      


    </section><!-- End Frequently Asked Questions Section -->



    
  </main><!-- End #main -->


  <script>
    jarr=[34,-13,34,54];
    var jarr2 = <?php echo json_encode($phparr); ?>;
    var jstime = <?php echo json_encode($phparr2); ?>;
        var a = "\'green\'";
        jcol=[];


jarr2.forEach((val)=>{

if(val>0){
  jcol.push("rgb(107, 239, 178)");
}
else{
  jcol.push("rgb(255, 96, 96)"); 
}

})


      
        console.log(a);
        var b = -330;
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: jstime,
                datasets: [{
                    label: 'Transaction graph',
                    data: jarr2,
                    backgroundColor: jcol,
                    borderColor: [
                        'grey'

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