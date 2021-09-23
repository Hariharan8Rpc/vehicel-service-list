<!DOCTYPE html>
<?php

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
?>

    
</html>