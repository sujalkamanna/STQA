<html>
 <head>
      <title>Hospital</title>
      <link rel="stylesheet" type="text/css" href="css/reg.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="js/REG.js"></script>
 </head>

 <body style="background-image: url(img/1429603.png);background-repeat: no-repeat;background-size: cover";>
  <h1 style="color: black ">Hospital Requirments</h1>
  
  <div class="register">
    <form method="post" id="register"  onsubmit="validate()" name="myForm" action="insertHospital.php">
	   <h2>Register Here</h2> 
	   
	   <label>Hospital_Name :  </label><br>
            <input type="text" name="name" id="name" placeholder="Enter Full Name" required><br><br>
       
	   <label>Blood_Requirement_Date : </label><br> 
            <input type="date" name="date2" required><br><br>
	
	   <label>Required Blood Group : </label><br>
	   <select id="bg" name="bg">
               <option>select</option>
               <option>A+ve</option>
               <option>A-ve</option>
               <option>B+ve</option>
               <option>B-ve</option>
               <option>AB+ve</option>
               <option>AB-ve</option>
               <option>O+ve</option>
               <option>O-ve</option>
       </select><br><br>
	   
	   <label>Number_of_Units :</label><br>
			<input type="number" name="units" required><br><br>
	
	   <label>Hospital_Contact_No : </label><br>
            <input type="number" name="contact" id="name" placeholder="Enter Mobile Number" required><br><br>
          
	   <label>Hospital_Email_id : </label><br>
            <input type="email" name="email" id="name" placeholder="Enter Email_id " required><br><br>
        
	   <label>Hospital_Address :</label><br>
		    <input type="address" name="address" id="name" placeholder="Enter Address" required><br><br>
     	
		<input type="submit" value="Submit" id="res">  
        <input type="reset" value="Reset" id="res">
	 </form>
  </div>

 </body>
</html>