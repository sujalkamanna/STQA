<html>
  <head>
    <title>Doner_Form</title>
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/REG.js"></script>
  </head>
    
  <body style="background-image: url(img/1429603.png);background-repeat: no-repeat;background-size: cover";>
      <h1 style="color: black ">Doner Registration Form</h1>
     
      <div class="register">
          <form method="post" id="register"  onsubmit="validate()" name="myForm" action="insertDonor.php">
          <h2>Register Here</h2>
              <label>Name :  </label><br>
              <input type="text" name="name" id="name" placeholder="Enter Full Name" required><br><br>
        
             

             <label>Date Of Birth  : </label><br> 
              <input type="date" name="bday"><br><br>
             
               <label>Gender : </label><br>
              
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
				  <textarea rows="4" cols="40" placeholder="Enter your Address " name="address"required></textarea><br><br>
				
				
				<input type="submit" value="Submit" id="res">  
                <input type="reset" value="Reset" id="res"> 
                
          </form>
      </div>
     
  
  </body>

</html>