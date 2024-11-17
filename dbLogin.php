<?php
require_once("connect.php");
$uname = $_POST['user_name'];
$pass = $_POST['password'];

$result = mysqli_query($conn,"SELECT EMP_USER_NAME, EMP_PASS FROM employee_info WHERE EMP_USER_NAME = '".$uname."'") or die( mysqli_error($conn));

$row = mysqli_fetch_array($result);

if($row['EMP_USER_NAME']==$uname && $row['EMP_PASS']==$pass){
	
    header("Location:Dashboard.php");

}else{
	
	echo'<script type="text/javascript">
  	alert("Invalid Credentials!")
	</script>';
    
    echo("<script>window.location = 'Login.php';</script>");
}

?>