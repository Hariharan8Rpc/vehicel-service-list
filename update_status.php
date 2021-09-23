<?php 
session_start();
if(!isset($_SESSION['user'])){
   header('location:login1.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>vehicle management</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo1.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="admin.php">Home</a> </li>
                                       <!-- <li> <a href="customer.html">customer</a> </li> -->
                                       <li><a href="vehiclehtml.php">vehicle</a></li> 
                                       <li><a href="servicing.php">Servicing</a></li> 
                                       <li><a href="update_status.php">update_status</a></li> 
                                       <li><a href="servicelist.php">Service list</a></li> 
                                       <li><a href="logout.php">logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+91)9876543109</li>
                                <li><img src="icon/email.png" />carscare@gmail.com</li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <!--script for validation -->
 
 <script>
          function validaterform(){        
          var service_id=document.statusForm.service_id.value;
          var vehicle_no=document.statusForm.vehicle_no.value;
          var vehicle_status=document.statusForm.vehicle_status.value;      
            
          if(vehicle_no== ""){
            alert("Vehicle Number Cannot be empty");
            return false;
       } else {
        var regex = /^[A-Za-z]{2,3}(-\d{2}(-[A-Za-z]{1,2})?)?-\d{3,4}$/;                
        if(regex.test(vehicle_no) === false) {
        alert("Please enter a valid vehicle no EX:DL-01-X-1234");
        return false;
        } else {
          true;
        }
       }
              if(service_id == ""){
            alert("Service id Cannot be blank");
              return false;
            } else {
                var regex =/[1-9][0-9]/;               
                if(regex.test(cost) === false) {
                alert("please enter  positive values");
                return false;
                } else {
                true;
            }
           }
    if(vehicle_status == ""){
        alert("Vehicle status Cannot be empty");
        return false;
      } else {
          var regex = /^[a-zA-Z\s]+$/;                
          if(regex.test(vehicle_status) === false) {
          alert("Please enter a valid status ");
          return false;
          } else {
            true;
          }
      }

  }
    //function close
</script>


    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Enter Vehicle Service Status </h2>
                    </div>
                        
                    <form class="main_form" method="post" name="statusForm" onsubmit= "return validaterform()" action="">
                        <div class="row"> 
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Service_id</label>	
                                <input class="form-control" placeholder=" Enter service_id" type="text" name="service_id">
                            </div>
                           
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <label>Enter vehicle status</label>
                                    <input class="form-control" placeholder="enter vehicle status" type="textarea" name="vehicle_status">
                                </div>
                          

                              <div class=" col-md-12">
                                <input class="send" name="submit" type ="submit">
                             </div>

                            <div class=" col-md-12">
                                <input type="reset"name="cancel" class="send">
                            </div>
                        </form>
                        </div>
                  
                 </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <?php
if(isset($_POST['submit']))
{
$link = mysqli_connect("localhost", "root", "", "vehicle");
 
// Check connection
if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
   } 
$service_id=mysqli_real_escape_string($link, $_REQUEST['service_id']);
//$vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$vehicle_status=mysqli_real_escape_string($link, $_REQUEST['vehicle_status']);

//$query = ("SELECT * FROM status WHERE service_id = '$service_id' AND vehicle_no ='$vehicle_no'"); when using status table
$query = ("SELECT * FROM service WHERE 	service_id ='$service_id'");
   $result=mysqli_query($link,$query);
   $num=mysqli_num_rows($result);
    if($num == 1)
    {
        $sql="UPDATE service SET status ='$vehicle_status' where service_id ='$service_id'";
      if(mysqli_query($link, $sql))
        {
           // header('location:admin.html');
            $_SESSION['status']="status updated";
            $_SESSION['status_code']="success";
          
        }  
        }
    else
    {
        $_SESSION['status']="Service id not found";
        $_SESSION['status_code']="error";
    }
    //mail functtion beginn once data  is saved in db

$sql = "SELECT * FROM service WHERE service_id ='$service_id' and status='ready'";
$result=mysqli_query($link,$sql);
   $num=mysqli_num_rows($result);
    if($num == 1)

//if(mysqli_query($link, $sql))
{
                                  $result=mysqli_query($link,$sql);
                                  $rows=mysqli_fetch_array($result);
                                  $date= $rows['date']; 
                                  $cname= $rows['cust_name'];
                                  $vno= $rows['vehicle_no']; 
                                  $vname=$rows['vehicle_name'];
                                  $email=$rows['email'];
                                  $vproblem= $rows['vehicle_problem'];
                                  $cos=$rows['cost'];
                                  $service=$rows['service_id'];
    $message="hello $cname\r\n
    Your vehicle service has been completed \r\n
    With problem:$vproblem \r\n
    your service id is:$service \r\n
    YOUR Vehicel name: $vname \r\n
    vehicle number:$vno \r\n
    costs ₹$cos.00 \r\n
    Paynow: https://rzp.io/l/xmQraHTYs \r\n                       
    YOU CAN ALSO USE THE ABOVE LINK TO PAY BILL ONLINE \r\n
    IF ALREADY PAID PLEASE IGNORE\r\n
    THANK YOU"; 
   $to_email = $email;
   //$to_email="8310440155@vtext.com";
  $subject = "Regarding:vehicle service";
  $body = $message; 
  $headers = "From:carscare1233@gmail.com";
  $headers = "Regarding:vehicle service ";
  if (mail($to_email, $subject, $body, $headers)) 
  {
        ?>

       <p style="color:blue;text-align:center" > <?php echo "Email sent successfull to $to_email";?> </p>
        <?php
      //  $_SESSION['status']="mailsent";
      //  $_SESSION['status_code']="success";
  }
  else
  {
      ?>
          <p style="color:blue;text-align:center" > <?php echo "Email sending failed for mail id: $email";?> </p>

    <?php
     //  $_SESSION['status']="email failed";
    //    $_SESSION['status_code']="error";
  }
}
   //mail function end  
    


mysqli_close($link);
}
include('includes/script.php');
?>
       <!-- footer -->
    
       <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Manglore industrial area, 176 Airport Road,manglore, NY 10014</span>
                                <p>(+91)992993999<br>carscare@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    <!-- <li> <a href="customer.html">customer</a> </li>--> 
                                    <li><a href="vehiclehtml.php">vehicle</a></li> 
                                       <li><a href="servicing.php">Servicing</a></li> 
                                       <li><a href="update_status.php">update_status</a></li> 
                                       <li><a href="servicelist.php">Service list</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                     </div>
            </div>
        </div>
    </footer>  
        <!-- end footer -->
      <!-- Javascript f iles-->
    
      <script src="js/jquery.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/custom.js"></script>  
      <script src="js/bootstrap.bundle.min.js">
    </script>
  </body>

</html>