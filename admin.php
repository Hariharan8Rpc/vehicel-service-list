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
    <title>Vecicle Management</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resp onsive-->
    <link rel="stylesheet" href="css/responsive.css"> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
   </head>
<!-- body -->

<body class="main-layout ">
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
                                      <!-- <li> <a href="customer.html">customer</a> </li>--> 
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
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/images (1).jpeg"  width="100%"  height="0.5%" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                         
                        </div>
                    </div>
                   
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/main.jpg"  width="100%"  height="0" alt="Second slide">
                    <div class="container">
                   <div class="carousel-caption relative">
                       
                        </div>
                         
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/images (3).jpeg" width="1920px"  height="836" alt="Third slide">
                    <div class="container">
                   
                        <div class="carousel-caption relative">
                         
                        </div>
                       
                    </div>
                   
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/images (4).jpeg" length="200" height="600" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>About Us</h3>
                        <span>VEhicle management</span>
                        <p>Our goal is to apply our knowledge and repair skills to your vehicle with accuracy and success,..when you leave this establishment ,We want you to be satisfied and tell others you were treated fairly and received the very best service.</p>

                    </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->

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
            <div class="container">
               
            </div>
        </div>
    </footer>  
   <!-- Javascript f iles-->
    
   <script src="js/jquery.min.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/custom.js"></script>  
   <script src="js/bootstrap.bundle.min.js"></script>
   
         <!-- javas
           <script src="js/popper.min.js"></script>
           <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/jquery-3.0.0.min.js"></script>
        cript -->


</body>

</html>