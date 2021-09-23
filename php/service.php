<!DOCTYPE html>
<?php 
 include_once('config.php');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$service_id=mysqli_real_escape_string($link, $_REQUEST['service_id']);   
$cust_name=mysqli_real_escape_string($link, $_REQUEST['cust_name']);
$contact_no=mysqli_real_escape_string($link, $_REQUEST['contact_no']);
$email=mysqli_real_escape_string($link, $_REQUEST['email']);
$vehicle_no=mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$vehicle_name=mysqli_real_escape_string($link, $_REQUEST['vehicle_name']);
$vehicle_problem=mysqli_real_escape_string($link, $_REQUEST['vehicle_problem']);
$cost=mysqli_real_escape_string($link, $_REQUEST['cost']);
// attempt insert query execution
/*$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
*/
$sql = "INSERT INTO service (service_id,cust_name,contact_no,email, vehicle_no,	vehicle_name, vehicle_problem,cost)VALUES('','$cust_name','$contact_no','$email','$vehicle_no','$vehicle_name','$vehicle_problem','$cost')";
if(mysqli_query($link, $sql))
{
  // echo "Records added successfully.";
   // echo'<script type="text/javascript">';
   // echo'alert("Record Saved successfully")';
    //echo'</script>';
  header('location:admin.html');
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//mail functtion beginn once data  is saved in db
$sql = "SELECT * FROM service WHERE vehicle_no ='$vehicle_no'";
if(mysqli_query($link, $sql))
{
                                  $result=mysqli_query($link,$sql);
                                  $rows=mysqli_fetch_array($result);
                                  $date= $rows['date']; 
                                  $cname= $rows['cust_name'];
                                  $vno= $rows['vehicle_no']; 
                                  $vname=$rows['vehicle_name'];
                                  $email=$rows['email'];
                                  $vproblem= $rows['vehicle_problem'];
                                  $cos=$rows['cost'];
                                  $service=$rows['service_id'];


                                 
    $message = "hello $cname\r\n
    Your vehicle has been registered for service on $date  \r\n
    With problem:$vproblem \r\n
    your service id is:$service \r\n
    YOUR Vehicel name: $vname \r\n
    vehicle number:$vno \r\n
    costs ₹$cos.00 \r\n
    Paynow: https://rzp.io/l/xmQraHTYs \r\n                       
    USE SERVICE ID--$service--TO SEARCH YOUR SERVICE STATUS IN OUR WEBSITE \r\n
    THANK YOU  
    </body>
     </html>"; 
     $to_email = $email;
     $subject = "Regarding:vehicle service";
     $headers = "From:carscare1233@gmail.com";
     $headers = "Regarding:vehicle service ";
  
  $body =  $message; 
  if (mail($to_email, $subject, $body, $headers)) 
  {
    ?>

       <p style="color:blue;text-align:center" > <?php echo "Email sent successfull to $email";?> </p>
        <?php 
  }
  else
  {
    ?>

       <p style="color:red;text-align:center" > <?php echo "Email failed to send for :$email";?> </p>
        <?php
  }
   //mail function end  
}
// close connection
mysqli_close($link);
?>
</html>