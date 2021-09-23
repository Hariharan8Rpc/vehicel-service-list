<!DOCTYPE html>
<?php

$link = mysqli_connect("localhost", "root", "", "vehicle");
 
// Check connection
if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
   } 
$service_id=mysqli_real_escape_string($link, $_REQUEST['service_id']);
//$vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$vehicle_status=mysqli_real_escape_string($link, $_REQUEST['vehicle_status']);

//$query = ("SELECT * FROM status WHERE service_id = '$service_id' AND vehicle_no ='$vehicle_no'"); when using status table
$query = ("SELECT * FROM service WHERE 	service_id ='$service_id'");
   $result=mysqli_query($link,$query);
   $num=mysqli_num_rows($result);
    if($num == 1)
    {
       //$sql="UPDATE status SET service_id ='$service_id',vehicle_no ='$vehicle_no',vehicle_status ='$vehicle_status' where service_id='$service_id'";
       $sql="UPDATE service SET status ='$vehicle_status' where service_id ='$service_id'";
      if(mysqli_query($link, $sql))
        {
          ?>   
                  <script type="text/javascript">;
                  alert("Record updated successfully");
                  </script>
          <?php  
        header('location:admin.html');
         }  
        } 

    else
    {

    }
    
mysqli_close($link);
    
?>
</html>