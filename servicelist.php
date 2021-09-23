<?php 
session_start();
if(!isset($_SESSION['user'])){
   header('location:login1.php');
}
?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Service list Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php                       
  include_once('config.php');
  ?>
 
<style>
        td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #434bbe;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:hover{
    background-color: #18cee6;  
}
th:hover{
    background-color: #18dfe6;  
}
tr:nth-child(even){
 background-color: #eeeeee;
}
     </style>
</head>

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
                                      <!-- <li> <a href="customer.html">customer</a> </li>
                                       --> 
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
                    <!-- end heer inner -->
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
 <!-- co  ntact -->
 <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                       
                        <div class="row">
                        <h1 style="color:blue;text-align:center"> Vehicle servicing list is here</h1>
                        
                        </div>
                       </div>
                </div>
            </div>
        </div>

<body>
    <?php //  HEADER IS IN HEADErR SECTION FOR SERVER CONNECTION
    $rows=$result=0;
    $query=(" SELECT  * FROM `service` ");
    $result=mysqli_query($link,$query);
?>
<div class="container">
    <table class="table table-fluid" id="myTable">
    <thead>
        
        <tr>
        <th colspan="10"><h2>Vehicle service list </h2></th>
     </tr>
    <tr><b>
        <th>service id</th>
        <th>customer name</th>
        <th>Date/time</th>
        <th>Contact number</th>
        <th>email_id</th>
        <th>vehicle no</th>
        <th>Vehicle name</th>
        <th>Vehicle problem</th>
        <th>cost</th>
        <th>service status</th>
    </b> </tr>
    </thead>
    <?php
                                while($rows=mysqli_fetch_array($result))
                                 {
                            ?>
    <tbody>
        <td><b><?php echo $rows['service_id']; ?></B></td>
            <td><b><?php echo $rows['cust_name']; ?></b></td>
            <td><b><?php echo $rows['date']; ?></b></td>
            <td><b><?php echo $rows['contact_no']; ?></b></td>
            <td><b><?php echo $rows['email']; ?></b></td>
            <td><b><?php echo $rows['vehicle_no']; ?></b></td>
            <td><b><?php echo $rows['vehicle_name']; ?></b></td>
            <td><b><?php echo $rows['vehicle_problem']; ?></b></td>
            <td><b><?php echo  $rows['cost']; ?></b></td>
            <td><b><?php echo $rows['status']; ?></b></td>
    </tbody>
    <?php  
}
mysqli_close($link);
?>
<script>
   $(document).ready( function () {
    $('#myTable').DataTable();} 
    );
    </script>
    </table>
</div>



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