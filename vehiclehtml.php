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
      <title>Vehicle service management</title>
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
        <!-- redireted to 
           <script src="js/validate.js"></script>  val idate -->
       
      </head>
   <!-- body -->
   <body class="main-layout special-page">
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
                           <div class="logo"> <a href="index.html"><img src="images/logo1.png" alt="#"></a> </div>
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
        var vehicle_no = document.vehicleForm.vehicle_no.value;
        var vehicle_manufacture_name=document.vehicleForm.vehicle_manufacture_name.value;
        var vehicle_name=document.vehicleForm.vehicle_name.value;
        var chassi_no=document.vehicleForm.chassi_no.value;
        var engine_no=document.vehicleForm.engine_no.value;     
        var vehicle_manufacture_year=document.vehicleForm.vehicle_manufacture_year.value;

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

    //ehicle_manufacture_name
    if(vehicle_manufacture_name == "") {
        alert("Manufacturer name cannot be empty");
        return false;
    } else {
        var regex =/^[a-zA-Z\s]+$/;                
        if(regex.test(vehicle_manufacture_name) === false) {
          alert("Please enter a valid manufacturer name");
          return false;
        } else {
         //  alert("Registration successfull ")
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

    // vehicle CHASSIS NUM
    if(chassi_no == "") {
        alert("chassis number cannot be blank");
        return false;
    } else {
        var regex =/^([A-z]{2}[A-z0-9]{5,16})$/;                
        if(regex.test(chassi_no) === false) {
          alert("Please enter a valid CHASSIS NO  EX:ME4KC093A98040032");
          return false;
        } else {
         //  alert("Registration successfull ")
         true;
        }
    }

    
    // vehicle ENGINE  NUM
    if(engine_no == "") {
        alert("ENGINE number cannot be blank");
        return false;
    } else {
        var regex =/^([A-z]{2}[A-z0-9]{5,16})$/;                
        if(regex.test(engine_no) === false) {
          alert("Please enter a valid ENGINE NO  EX:JF39E70321656");
          return false;
        } else {
         //  alert("Registration successfull ")
         true;
        }
    }
     
        // MANUFACTURE YAER M
    if(vehicle_manufacture_year == "") {
        alert("Manufacture year cannot be blank");
        return false;
    } else {
        //var regex =/^(199\d|200\d|2021)$/;                
         var regex =/^(19[5-9]\d|20[0-4]\d|2050)$/;
        if(regex.test(vehicle_manufacture_year) === false) {
          alert("Please enter a valid year");
          return false;
        } else {
         //  alert("Registration successfull ")
         true;
        }
    }

  }//regi function close

</script>
<!-- script for validation-->
      <!-- contact -->
    
    <div class="contact">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="titlepage">
                      <h2>Enter the RC details of vehicle</h2>
                  </div>
                  <form  method="POST"  name="vehicleForm" onsubmit="return validaterform()" action="vehiclehtml.php" class="main_form">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <label>vehicle_number</label>
                              <input class="form-control" placeholder="Ex:KA-12-MA-2222" type="text" name="vehicle_no"required>
                             
                          </div>
                     
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <label>vehicle_manufacture_name</label>
                              <input class="form-control" placeholder="EX:AUDI BMW  TATA " type="text" name="vehicle_manufacture_name">
                             
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <label>vehicle model name</label>
                              <input class="form-control" placeholder="EX: AUDI A8  TATA HEXA  " type="text" name="vehicle_name">
                             
                          </div>
                            <!--
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <label>Model number</label>
                              <input class="form-control" placeholder="Enter MOdel number"type="text" name="model_no"></input>
                              <div class="error" id="model_noErr"></div>
                          </div>
                          -->   
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <label>Vehicle chassi no</label>
                             <input class="form-control" placeholder=" EX:ME4KC093A98040032"type="text" name="chassi_no"></input>
                         
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <label>Engine number</label>
                            <input class="form-control" placeholder="EX:JF39E70321656"type="text" name="engine_no"></input>
                            
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"style="justify-content: center;">
                              <label>Vehicle vehicle_manufacture_year</label>
                             <input class="form-control" placeholder="Enter vehicle Manufacture year"type="text" name="vehicle_manufacture_year"></input>
                            
                          </div>
                      </div>
                                <div style="justify-content: center;">   
                                    <input class="send"  type="submit" name="submit" value="save">                        
                                   <!--     <button class="send" type="submit">save</button>-->
                                        <input class="send" type="reset">
                                  </div>
                   </form>               
          </div>
      </div>
  </div>
  
  <!-- end contact -->

  <?php
if(isset($_POST['submit']))
{
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vehicle");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);   
$vehicle_manufacture_name=mysqli_real_escape_string($link, $_REQUEST['vehicle_manufacture_name']);
$vehicle_name=mysqli_real_escape_string($link, $_REQUEST['vehicle_name']);
//$model_no=mysqli_real_escape_string($link, $_REQUEST['model_no']);
$chassi_no=mysqli_real_escape_string($link, $_REQUEST['chassi_no']);
$engine_no=mysqli_real_escape_string($link, $_REQUEST['engine_no']);
$vehicle_manufacture_year=mysqli_real_escape_string($link, $_REQUEST['vehicle_manufacture_year']);
// attempt insert query execution
/*$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
*/
$sql = "INSERT INTO add_vehicle (vehicle_no, vehicle_munufacture_name, vehicle_name, chassi_no, engine_no, vehicle_manufacture_year)VALUES('$vehicle_no', '$vehicle_manufacture_name','$vehicle_name','$chassi_no','$engine_no','$vehicle_manufacture_year')";
if(mysqli_query($link, $sql)){
  $_SESSION['status']="vehicel added successfully";
  $_SESSION['status_code']="success";
  //  echo "Records added successfully.";
  // header('location:vehicle.html');
} 
else{
  $_SESSION['status']="Sorry try again ";
  $_SESSION['status_code']="error";
  
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
include('includes/script.php');
}
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
                              <p>(+91)9686854070<br>carscare1233@gmail.com</p>
                             </div>
                                    <ul class="location_icon">
                                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                                    </ul>
                                    <div class="menu-bottomm">
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
    <script src="js/bootstrap.bundle.min.js"></script>
         <?php 
         include('includes/script.php');
         ?>
   </body>
</html>