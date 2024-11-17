<?php

include_once 'connect.php';

$sql = " UPDATE employee_info SET EMP_PASS='$_POST[pass]',EMP_CPASS='$_POST[cpass]' where EMP_USER_NAME='$_POST[uname]'"; 

if(mysqli_query($conn, $sql)){
     echo '<script type="text/javascript"> 
          alert("Password changed  successfully.")
          window.location="Login.php";
          </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>