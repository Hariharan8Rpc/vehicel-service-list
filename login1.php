<?php
 SESSION_START();
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <!--<script src="js/validate.js"></script> -->
    <meta charset="UTF-8">
    <title> Login and Registration </title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <script>src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
 </script>
 <script src="js/sweetalert.min.js"></script> 
<body>
  
<!-- script for validation-->
<script>
  function validateform()
  {
    var name=document.loginform.name.value;
    var password=document.loginform.password.value;
      if(name == "")
       {
            alert("Name Cannot be empty");
        } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
        alert("Please enter a valid name");
        return false;
        } else {
          true;
        }
        if(password == "") {
        alert("Please enter Password");
        return false;
        } else {
          true;
       //   alert("login Approved");
         }
    }
   
  } //function close

  function validaterform(){          // for registration//  
        var rname=document.registrationform.name.value;
    var rpassword=document.registrationform.password.value;

    if(rname == "") {
      alert("Name Cannot be eeempty");
      return false;
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(rname) === false) {
        alert("Please enter a valid name");
        return false;
        } else {
          true;
        }
    }

    //passoword registration
    if(rpassword == "") {
        alert("Please enter Password");
        return false;
    } else {
        var regex =/^[a-zA-Z0-9!@#$%^&*]{6,16}$/;                
        if(regex.test(rpassword) === false) {
          alert("Please enter a valid Password. Password should contain atleast one number and one special character");
          return false;
        } else {
          true;
     //   alert("Registration successfull ")
        }
       }
  }//regi function close

</script>



<!-- script for validation-->
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Trust the experts<br>  who know your vehicle's best</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back"> 
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Trust the experts <br> who know your vehicle's best</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Admin Login</div> 
          <form method="POST" name="loginform" onsubmit="return validateform()"  >
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your Name" name="name">
                                
              </div> 
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" >
                
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
            <label><a href="index.html">Home</a></label>

            <?php
             
            //SESSION_destroy();
         if(isset($_POST['submit']))
         {
       
            //$con=mysqli_connect('localhost','root','');
            include_once('config.php');
              //  mysqli_select_db($c,'registration');
            //  session_start();
                $name=$_POST['name'];
              // $email1=$_POST['email'];
                $password=$_POST['password'];
              $query = ("SELECT * FROM registration WHERE name = '$name' AND password ='$password'");
              $result=mysqli_query($link,$query);
              $num=mysqli_num_rows($result);
                if($num == 1){
                
                $_SESSION['user']=$name;
                 //  $_SESSION['status_code']="success";
                 // echo'<script language="javascript">';
                //  echo'alert(login bfnlkfm,wpeflcaproved)';
              
           //   header('location:servicelist.php');
           //      echo"<script>window.location='servicelist.php'</script>";
         echo"<script>window.location='admin.php'</script>";
              }
              
              else{
                  $_SESSION['status']="Invalid user-name or Password";
                  $_SESSION['status_code']="error";
                //  echo"<script> alert("Registration successfull ")</script>";
               //   echo"<script>window.location='login1.php'</script>";
                //  header('location:login.html');

                }
               
           }
    ?>
            

        </form>
      </div>


      


      
        <div class="signup-form">
          <div class="title">Signup</div>
        <form name="registrationform" onsubmit="return validaterform()"  method="POST"  >
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="name"required >
              
              </div>
          
              <div class="input-box">
                <i class="fas fa-lock"></i>
                
                <input type="password" placeholder="Enter your password" name="password" required>
               
              </div>
              <div class="button input-box">
                <input type="submit" name="save" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
            <label><a href="index.html">Home</a></label>

            <?php
if(isset($_POST['save']))
{
//header('location:login.php');
$servername="localhost";
$username="root";
$password="";
$database_name="vehicle"; 
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{ 
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['save'])) //&&(!empty($_POST['save'])
    $name=$_POST['name'];
  //  $email=$_POST['email'];
    $password=$_POST['password'];


    $query = ("SELECT * FROM registration WHERE name = '$name' ");
    $sql_query="Insert into registration (name, password)values('$name','$password')";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
      if($num == 1){
        $_SESSION['status']="username alredy exist";
        $_SESSION['status_code']="error";
      }else{
    if(mysqli_query($conn,$sql_query))
    {
   
       $_SESSION['status']="admin registration successfull";
       $_SESSION['status_code']="success";
     //   header('location:login.html');
    }
    else{
        $_SESSION['status']="Error";
        $_SESSION['status_code']="error";
      //  header('location:login.html'); 
        }
      }
      }
        ?>

      </form>
        
    </div>
    </div>
    </div>
  </div>
<?php 
  include('includes\script.php');
    ?>
</body>
</html>

