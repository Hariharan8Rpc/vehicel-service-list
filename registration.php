<?php

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
    $sql_query="Insert into registration (name, password)values('$name','$password')";
    if(mysqli_query($conn,$sql_query))
    {
   
        $_SESSION['status']="admin registration successfull";
        $_SESSION['status_code']="success";
        header('location:login.html');
    }
    else{
        $_SESSION['status']="Error";
        $_SESSION['status_code']="error";
        header('location:login.html'); 
        }
       
        ?>
     </html>

