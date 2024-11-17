<html>
  <head>
     <title>Seeker_Form</title>
      <link rel="stylesheet" type="text/css" href="css/reg.css">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="js/REG.js"></script>
  </head>
    
  <body style="background-image: url(img/1429603.png);background-repeat: no-repeat;background-size: cover";>
      <h1 style="color: black ">Seeker Registration Form</h1>
     
      <div class="register">
          <form method="post" id="register"  onsubmit="validate()" name="myForm" action="insertSeeker1.php">
          <h2>Register Here</h2>
              
			  <label>Seeker_Name :  </label><br>
                 <input type="text" name="name" id="name" placeholder="Enter Full Name" required><br><br>
              
			  <label>Contact_No : </label><br>
                 <input type="number" name="contact" id="name" placeholder="Enter Mobile Number" required><br><br>
              
			  <label>Paient_Name :  </label><br>
                 <input type="text" name="name1" id="name" placeholder="Enter Full Name" required><br><br>
			  
			  <label>Patient_Date Of Birth  : </label><br> 
                 <input type="date" name="bday"><br><br>
			  
			  <label>Patient_Gender : </label><br>
                 <input type="radio" name="gender" value="male" checked> Male
                 <input type="radio" name="gender" value="female"> Female
                 <input type="radio" name="gender" value="other"> Other<br><br>
               
              <label>Patient Blood Group : </label><br>
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
                 </select>
                 <br><br>
			  
              <label>Hospital_Name :  </label><br>
                 <input type="text" name="name2" id="name" placeholder="Enter Full Name" required><br><br>
              
			  <label>Hospital_Address :</label><br>
				 <input type="address" name="address" id="name" placeholder="Enter Address" required><br><br> 
			  
			  <label>Blood_Requirement_Date   : </label><br> 
                 <input type="date" name="date2"><br><br>
				
			<input type="submit" value="Submit" id="res">  
            <input type="reset" value="Reset" id="res"> 
                
          </form>
      </div>
     
  
  </body>

</html>