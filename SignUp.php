<html>
  <head>
     <title>Sign_Up</title>
      <link rel="stylesheet" type="text/css" href="css/reg.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="js/REG.js"></script>
  </head>
    
  <body style="background-image: url(img/22.jpg);background-repeat: no-repeat;background-size: cover";>
      <h1 style="color: black ">Employee Registration Form</h1>
     
      <div class="register">
          <form method="post" id="register"  onsubmit="validate()" name="myForm" action="insertEMP.php">
          <h2>SIGN UP</h2>
              <label>Name :  </label><br>
                <input type="text" name="name" id="name" placeholder="Enter Full Name" required><br><br>
             
              <label> Gender : </label><br>
              
               <input type="radio" name="gender" value="male" checked> Male
               <input type="radio" name="gender" value="female"> Female
               <input type="radio" name="gender" value="other"> Other<br><br>

               
               <label>Blood Group : </label><br>
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
				 
               <label>Contact_No : </label><br>
                  <input type="number" name="contact" id="name" placeholder="Enter Mobile Number" required><br><br>
               
			   <label>Email_id : </label><br>
			      <input type="email" name="email" id="name" placeholder="Enter Email_id " required><br><br>
               
			   <label>Address :</label><br>
			      <textarea rows="4" cols="40" placeholder="Enter your Address " name="address" required></textarea><br><br>
			  
			   <label>User_Name : </label><br>
                  <input type="text" name="uname" id="name" placeholder="Enter Username" required><br><br>
               
			   <label>Password : </label><br>
                  <input type="Password" name="pass" id="name" placeholder="Enter Password" required><br><br>
				  
               <label>Confirm Password : </label><br>
                  <input type="Password" name="cpass" id="name" placeholder="Enter Confirm Password" required><br><br>
				  
				<input type="submit" value="Submit" id="res">  
                <input type="reset" value="Reset" id="res"> 
                
          </form>
      </div>
     
  
  </body>

</html>