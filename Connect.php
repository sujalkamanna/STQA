<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "blood_bank";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

echo '<script type="text/javascript"> 
         alert("Database Connected successfully.")
     </script>';

?>