<?php
include_once 'connect.php';

$sql = "delete from donor_info where D_NAME='$_POST[search]' ";

if(mysqli_query($conn, $sql))
{
     echo '<script type="text/javascript"> 
          alert("Donor Record deleted successfully.")
          window.location="Dashboard.php";
          </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?> 