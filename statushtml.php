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
    <link rel="stylesheet" href="css/tabel.css">
</head>
<!-- body -->

                               



<body class="main-layout">
    <!-- load
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>  er  -->
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
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                        <li><a href="statushtml.php">status</a></li>
                                        <li><a href="payment.php">Payment</a></li> 
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
  

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <H1> Check Your vehicle service status here </H1>
                    <form class="main_form" name="statusform" onsubmit="return statussform()" method="post"  action="statushtml.php">
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Service_id</label>	
                                <input class="form-control" placeholder=" Enter service_id" type="text" name="service_id">
                            </div>
                           
                            <!--
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Vehicel_no</label>
                                <input class="form-control" placeholder="EX: KA-12-MA-2222" type="text" name="vehicle_no">
                            </div>
                             --> 
                                    <div class=" col-md-12">
                                        <input class="send" type="submit" name="submit" value="check status">
                                   </div>
                            <div class=" col-md-12">
                                <input type="reset" class="send" value="RESET">> 
                                
                            </div>
                          </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php //  HEADER IS IN HEADRE SECTION FOR SERVER CONNECTION   for validation the search bar onsubmit="return statusform()"
        include('config.php');
      // $con= new PDO("mysql:host=localhost;dbname=vehicle",'root','');
         if(isset($_POST['submit']))
        {
       
       //  $vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']); 
         $service_id=mysqli_real_escape_string($link, $_REQUEST['service_id']); //search is done using service id
      //    $query=("SELECT * FROM `service` WHERE vehicle_no='$vehicle_no'");
      $query = ("SELECT * FROM service WHERE service_id ='$service_id'");
         $result=mysqli_query($link,$query);
        ?>
                                      <script>
                                      function statussform(){
                                        
                                        var vehicle_no=document.statusform.vehicle_no.value;
                                        var service_id=document.statusform.service_id.value;
                                        /*
                                        if(vehicle_no== ""){
                                            alert("Vehicle Number Cannot be empty");
                                            return false;
                                        } else {
                                        var regex = /^[A-Za-z]{2,3}(-\d{2}(-[A-Za-z]{1,2})?)?-\d{3,4}$/;                
                                        if(regex.test(vehicle_no) === false) {
                                        alert("Please enter a valid vehicle no EX: DL-01-X-1234");
                                        return false;
                                        } else {
                                        true;
                                        }
                                        }
                                        */ 

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
                                                            <?php 
                                                                $num=mysqli_num_rows($result);
                                                               
                                                                if($num >= 1){ 
                                                                   $_SESSION['status']="status found";
                                                                   $_SESSION['status_code']="success";
                                                            ?>

                                                                    // alert("Status detail fetched successfully");
                                                                     // return true;
                                                                     
                                                            <?php
                                                                        }else{
                                                                           $_SESSION['status']="status not found";
                                                                           $_SESSION['status_code']="info";
                                                            ?>
                                                               // alert("Status not found");
                                                                         //  return false;
                                                            <?php
                                                                }     
                                                            ?>
                                                         } 
                                                    
                                           </script>  
     <!-- end  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <table >
                            <tr>
                                 <th colspan="3"><h2>your Vehicle Status</h2></th>
                            </tr>
                            <tr><b>
                                    <th>service id</th>
                                    <th>vehicle no</th>
                                    <th>service status</th>
                                </b>
                            </tr>
                            <?php
                             while($rows=mysqli_fetch_array($result))
                             {
                            ?>    
                                    <tr>
                                        <td><b><?php echo $rows['service_id']; ?></B></td>
                                        <td><b><?php echo $rows['vehicle_no']; ?></b></td>
                                        <td><b><?php echo $rows['status']; ?></b></td> 
                                    </tr> 
                               
                                    <?php  
                                  // $rows=0;
                                 }  //while close
                                 mysqli_close($link);
                                    ?>
                      </table>
                      <?php    
                      }
                      else{

                      }
                    ?> 
                   </div> 
              </div>
          </div> 
      </div> 
                      
      
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
                                <li> <a href="#">Home</a></li>
                                  <!--  <li> <a href="#">Customer</a></li>
                                    <li> <a href="#">servicing  </a></li> -->
                                    <li> <a href="#">status</a></li>
                                    <li> <a href="#">Payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                           <div class="container">
                    </div>
            
        </div>
    </footer>  
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