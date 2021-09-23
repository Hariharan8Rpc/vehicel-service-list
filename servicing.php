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
    <title>Vehicle servicec Management</title>
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
                                <li><img src="icon/call.png" />(+91)9686854070</li>
                                <li><img src="icon/email.png" />carscare1233@gmail.com</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <script>
        function validaterform(){          // for registration//  
          var cust_name = document.serviceForm.cust_name.value;
          var contact_no=document.serviceForm.contact_no.value; //type numberin form
          var vehicle_no=document.serviceForm.vehicle_no.value;
          var email=document.serviceForm.email.value; 
          var vehicle_name=document.serviceForm.vehicle_name.value;
          var vehicle_problem=document.serviceForm.vehicle_problem.value;
          var cost=document.serviceForm.cost.value;     
         
      if(cust_name == "") {
        alert("customer name Cannot be empty");
        return false;
      } else {
          var regex = /^[a-zA-Z\s]+$/;                
          if(regex.test(cust_name) === false) {
          alert("Please enter a valid customer name ");
          return false;
          } else {
            true;
          }
      }
  
      //contact =numebr
      if(contact_no== "") {
          alert("contact number cannot be empty");
          return false;
      } else {
          var regex =/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;                
          if(regex.test(contact_no) === false) {
            alert("Please enter a valid contact");
            return false;
          } else {
           //  alert("Registration successfull ")
           true;
          }
      }
        //email
        if(email == "") {
          alert("email id cannot be empty");
          return false;
      } else {
          var regex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;                
          if(regex.test(email) === false) {
            alert("Please enter a valid email");
            return false;
          } else {
           //  alert("Registration successfull ")
           true;
          }
      }


        //vehicle numebr
      if(vehicle_no == "") {
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

      // vehicle name
      if(vehicle_name == "") {
          alert("Vehicel name cannot be empty");
          return false;
      } else {
          var regex =/^[a-zA-Z0-9]+$/;                
          if(regex.test(vehicle_name) === false) {
            alert("Please enter a valid vehicle name");
            return false;
          } else {
           //  alert("Registration successfull ")
           true;
          }
      }
  
       // email
       


      if(cost == "") {
      alert("Cost Cannot be blank");
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
     
  
    }//regi function close
  
  </script>





    <!--for         -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Servicing </h2>
                    </div> 
                  <form class="main_form" method="post"  name="serviceForm" onsubmit="return validaterform()" >
                      <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Customer name</label>
                                <input class="form-control" placeholder="Customer Name" type="text" name="cust_name">
                              </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Contact no</label>
                                <input class="form-control" placeholder="contact NO" type="number" name="contact_no"  >
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Email id</label>
                               <input class="form-control" placeholder="Enter emailid" type="email" name="email"></input>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>vehicle No</label>
                                <input class="form-control" placeholder="vehicle No" type="text" name="vehicle_no"></input>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Vehicle Name</label>
                               <input class="form-control" placeholder="Enter vehicle name"type="text" name="vehicle_name"></input>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Vehicle Probelem</label>
                              <input class="form-control" placeholder="vehicle Problem"type="textarea" name="vehicle_problem" maxlength="20"></input>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"style="justify-content: center;">
                                <label>Service Cost</label>
                              <input class="form-control" placeholder="service Cost" type="number" name="cost"></input>
                            </div>
                        </div>
                            <div style="justify-content: center;">                           
                              <input class="send" name="submit" type ="submit">
                              <input class="send" type="reset">
                           </div>
                           <?php 

if(isset($_POST['submit']))
{
 include_once('config.php');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$service_id=mysqli_real_escape_string($link, $_REQUEST['service_id']);   
$cust_name=mysqli_real_escape_string($link, $_REQUEST['cust_name']);
$contact_no=mysqli_real_escape_string($link, $_REQUEST['contact_no']);
$email=mysqli_real_escape_string($link, $_REQUEST['email']);
$vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$vehicle_name=mysqli_real_escape_string($link, $_REQUEST['vehicle_name']);
$vehicle_problem=mysqli_real_escape_string($link, $_REQUEST['vehicle_problem']);
$cost=mysqli_real_escape_string($link, $_REQUEST['cost']);
// attempt insert query execution
/*$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
*/
$sql = "INSERT INTO service (service_id,cust_name,contact_no,email, vehicle_no,	vehicle_name, vehicle_problem,cost)VALUES('','$cust_name','$contact_no','$email','$vehicle_no','$vehicle_name','$vehicle_problem','$cost')";
if(mysqli_query($link, $sql))
{
    $_SESSION['status']="Vehicel Added successfull";
    $_SESSION['status_code']="success";
  // echo "Records added successfully.";
   // echo'<script type="text/javascript">';
   // echo'alert("Record Saved successfully")';
    //echo'</script>';
 // header('location:admin.html');
}
 else{
    $_SESSION['status']="Sorry Please try again";
    $_SESSION['status_code']="Error";
   // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//mail functtion beginn once data  is saved in db
$sql = "SELECT * FROM service WHERE vehicle_no ='$vehicle_no'";
if(mysqli_query($link, $sql))
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


                                 
    $message = "hello $cname\r\n
    Your vehicle has been registered for service on $date  \r\n
    With problem:$vproblem \r\n
    your service id is:$service \r\n
    YOUR Vehicel name: $vname \r\n
    vehicle number:$vno \r\n
    costs ₹$cos.00 \r\n
    Paynow: https://rzp.io/l/xmQraHTYs \r\n                       
    USE SERVICE ID--$service--TO SEARCH YOUR SERVICE STATUS IN OUR WEBSITE \r\n
    THANK YOU  
    </body>
     </html>"; 
     $to_email = $email;
     $subject = "Regarding:vehicle service";
     $headers = "From:carscare1233@gmail.com";
     $headers = "Regarding:vehicle service ";
  
  $body =  $message; 
  if (mail($to_email, $subject, $body, $headers)) 
  {
    ?>

       <p style="color:blue;text-align:center" > <?php echo "Email sent successfull to $email";?> </p>
        <?php 
  }
  else
  {
    ?>

       <p style="color:red;text-align:center" > <?php echo "Email failed to send for :$email";?> </p>
        <?php
  }
   //mail function end  
}
// close connection
mysqli_close($link);}

  include('includes\script.php');
    ?>
               </form>
       
            </div>
        </div>
    </div>
</div>
    
    <!-- end contact -->
   

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
                                <p>(+91)9686854070<br>carscare1233@gmail.com</p>
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
          <!-- Javascript f iles-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/custom.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>

</html>