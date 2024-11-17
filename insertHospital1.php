<?php
include_once 'connect.php';

$sql = "INSERT  INTO  hospital_info(H_NAME,BLOOD_REQ_DATE,REQ_BLOOD_GP,NO_OF_UNITS,H_CONTACT,H_EMAIL,H_ADD )
VALUES ('$_POST[name]','$_POST[date2]','$_POST[bg]','$_POST[units]','$_POST[contact]','$_POST[email]','$_POST[address]')";

if(mysqli_query($conn, $sql)){
     echo '<script type="text/javascript"> 
          alert("Hospital Request Record inserted successfully.")
          window.location="index.php";
          </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>