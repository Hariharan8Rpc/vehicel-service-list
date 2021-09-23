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
    <title>Vehicle Management</title>
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
    <!-- loa
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> der  -->
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
    
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Payment </h2>
                    </div>
                    <form class="main_form" name="paymentform" onsubmit="return paymenttform()" method="post" action="payment.php" >
                       <div class="row">
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label>Service_id</label>	
                                <input class="form-control" placeholder=" Enter service_id" type="text" name="service_id">
                            </div>
                           
                                    </div> 
                                      <div style="justify-content:center;">                           
                                      <input class="send" type="submit" name="submit" value="Search">
                                       <input class="send" type="reset" value="RESET">
                                    </div>
                        </form> 
                     </div>
                  </div>
              </div>
                 

                            <?php     
                                 include('config.php');
                                 if(isset($_POST['submit']))
                                 {
                               //$vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']); 
                                $service_id=mysqli_real_escape_string($link, $_REQUEST['service_id']); 
                               // $paid=paid;
                              //  $query=("SELECT * FROM `service` WHERE vehicle_no='$vehicle_no'");
                              //  $query=("SELECT * FROM `service` WHERE service_id='$service_id' and status!=paid");

                              $query1=("SELECT * FROM `service` WHERE service_id='$service_id' and status='paid'");
                              $result1=mysqli_query($link,$query1);
                        //      $num1=mysqli_num_rows($result1);
                                                            //    if($num1 >= 1){ 
                                                             //     $_SESSION['status']="Already payed ";
                                                             //     $_SESSION['status_code']="success";
                                                            //    }
                                                              
                              $query=("SELECT * FROM `service` WHERE service_id='$service_id' and status!='paid'");
                                $result=mysqli_query($link,$query);
                            ?>  
                                <script>
                                  //  return=true;
                                   // let button=document.querySelector(".button");
                                 //   button.disabled=true;
                                    function paymenttform(){
                                       // var vehicle_no=document.paymentform.vehicle_no.value;
                                        var service_id=document.paymentform.service_id.value;
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
                                                        $num1=mysqli_num_rows($result1);
                                                        if($num1 >= 1){ 
                                                            $_SESSION['status']="Already payed ";
                                                            $_SESSION['status_code']="success";
                                                        }else {                                                       

                                                              $num=mysqli_num_rows($result);
                                                                if($num >= 1){ 
                                                                     $_SESSION['status']="Payment detail found";
                                                                  $_SESSION['status_code']="success";
                                                               }else{
                                                                            $_SESSION['status']="Payment detail not found";
                                                                            $_SESSION['status_code']="error";
                                                         
                                                          
                                                                }  
                                                        }  
                                                          ?>
                                                         }
                                                      </script>


    <!-- end contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                             <table align="center" border="1px" style="width:300px; line=height;30px;">
                                 <tr>
                                     <th colspan="6"><h2>Your Payment Details</h2></th>
                                   </tr>
                                    <tr> <b>
                                        <th>service id </th>
                                        <th>customer name</th>
                                        <th>vehicle number</th>
                                        <th>vehicle Problem</th>
                                        <th>cost</th>                                       
                                        <th>Pay bill</th>
                                        <b>
                                     </tr>
                                <?php
                                    while($rows=mysqli_fetch_array($result))
                                    {
                                ?>
                                    <tr>
                                        <td><?php echo $rows['service_id']; ?></td>
                                        <td><?php echo $rows['cust_name']; ?></td>
                                        <td><?php echo $rows['vehicle_no']; ?></td>
                                        <td><?php echo $rows['vehicle_problem']; ?></td>
                                        <td><?php echo $rows['cost']; ?></td>
                                        <!--payment button gateway_-->
                                      <td><div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HyqiIJ0O7QG6sh/view" data-text="Pay Now" data-color="#528FF0" data-size="small">
                                        <script>
                                            (function(){
                                            var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
                                            if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
                                            s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['_rzp_'];
                                            rzp && rzp.init && rzp.init()}})();
                                        </script>
                                        </div></td>
                                          <!--payment button gateway_end-->
                                       <!-- <td><button style="bgcolor:red"class="send"onclick="location.href='https://rzp.io/l/xmQraHTYs'" >PAY NOW</button></td>
                                 
                                    -->  </tr>     
                                    <?php  
                                    }
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
    <?php 
   include('includes/script.php');
   ?>
</body>
</html>