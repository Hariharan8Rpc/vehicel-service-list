<?php
include('includes\script.php');
session_start();
//$con=mysqli_connect('localhost','root','');
include_once('config.php');
  //  mysqli_select_db($c,'registration');
    $name=$_POST['name'];
   // $email1=$_POST['email'];
    $password=$_POST['password'];
   $query = ("SELECT * FROM registration WHERE name = '$name' AND password ='$password'");
   $result=mysqli_query($link,$query);
   $num=mysqli_num_rows($result);
    if($num == 1){
        $_SESSION['status']="login successfull successfull";
        $_SESSION['status_code']="success";
        header('location:admin.html');
    }else{
      $_SESSION['status']="login failed";
      $_SESSION['status_code']="error";
      header('location:login.html');

    }
    include('includes/script.php');
    ?>
