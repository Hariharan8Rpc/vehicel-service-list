
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  <link rel="stylesheet" href="css/style.css">
  
  <?php                       
  include_once('config.php');
  ?>
 
</head>
<body>
    <?php //  HEADER IS IN HEADErR SECTION FOR SERVER CONNECTION
    $rows=$result=0;
    $query=(" SELECT  * FROM `service` ");
    $result=mysqli_query($link,$query);
?>
<div class="container">
    <h2>Vehicel service management </h2>
    <h2>Service list of vehicel </h2>
    <table class="table table-fluid" id="myTable">
    <thead>
        <th colspan="10"><h2>Vehicle service list </h2></th>
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
    </table>
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>