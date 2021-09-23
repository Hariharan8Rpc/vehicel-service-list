<script src="js/sweetalert.min.js"></script>
<script>src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
 </script>
 <?php 
    if(isset($_SESSION['status'])&& $_SESSION['status']!='')
    {
        ?>
            <script>
          swal({
                title: "<?php echo $_SESSION['status'];  ?>",
             //   text: "You clicked the button!",
                icon: "<?php echo $_SESSION['status_code'];  ?>",
                button: "OK",
                        });
            </script>
        <?php  
        unset($_SESSION['status']);
        unset($_SESSION['status_code']);
    }

    ?>



  