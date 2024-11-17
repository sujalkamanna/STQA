<?php

include_once 'connect.php';

$sql = "INSERT INTO  employee_info(EMP_NAME, EMP_GENDER, EMP_BG, EMP_CONTACT, EMP_EMAIL, EMP_ADD, EMP_USER_NAME, EMP_PASS, EMP_CPASS)
VALUES ('$_POST[name]','$_POST[gender]','$_POST[bg]','$_POST[contact]','$_POST[email]','$_POST[address]','$_POST[uname]','$_POST[pass]','$_POST[cpass]')";


if(mysqli_query($conn, $sql)){
     echo '<script type="text/javascript"> 
          alert("Records inserted successfully.")
          window.location="Login.php";
          </script>';
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

?>