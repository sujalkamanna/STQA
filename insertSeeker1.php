<?php
include_once 'connect.php';

$sql = "INSERT  INTO  seeker_info(S_NAME,S_CONTACT,P_NAME, P_DOB, P_GENDER, P_BG, HOSPITAL_NAME, HOSPITAL_ADD, BLOOD_REQ_DATE)
VALUES ('$_POST[name]','$_POST[contact]','$_POST[name1]','$_POST[bday]','$_POST[gender]','$_POST[bg]','$_POST[name2]','$_POST[address]','$_POST[date2]')";

if(mysqli_query($conn, $sql)){
     echo '<script type="text/javascript"> 
          alert("Seeker Request Record inserted successfully.")
          window.location="index.php";
          </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>