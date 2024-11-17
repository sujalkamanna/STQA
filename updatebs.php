<?php

include_once 'connect.php';

$sql = " UPDATE bloodstock SET Status='$_POST[status]',Quantity='$_POST[qua]' where blood_g='$_POST[bg]'"; 

if(mysqli_query($conn, $sql)){
     echo '<script type="text/javascript"> 
          alert("Blood stock is updated successfully.")
          window.location="Dashboard.php";
          </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>