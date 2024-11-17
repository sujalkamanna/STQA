<?php
include_once 'connect.php';

$sql = "INSERT  INTO  donor_info(D_NAME,D_DOB,D_GENDER,D_BLOOD_GP,D_CONTACT_NO,D_EMAIL_ID,D_ADDRESS)
VALUES ('$_POST[name]','$_POST[bday]','$_POST[gender]','$_POST[bg]','$_POST[contact]','$_POST[email]','$_POST[address]')";

if(mysqli_query($conn, $sql)){
     echo '<script type="text/javascript"> 
          alert("Donor Record inserted successfully.")
          window.location="Dashboard.php";
          </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>