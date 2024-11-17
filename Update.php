<html>

  <head>
    <title>Update Blood Stock </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/updates.css">
  </head>
  
   <body  style="background-image: url(img/bg9.jpg); background-repeat: no-repeat;background-size:cover;">
        <div class="fixed">
		
        <div class="col-md-12" >
             <div class="col-md-12"  style="margin-top: 0.2%">
               <div class="col-md-3">
                    <img src="img/logo.png" height="300px" width="100%">     
               </div><!--logo div -->
               <div class="col-md-9">
                    <h1 style="color:red"><center style="font-size:80px;" ><b><I> Life Saviour Blood Bank</I></b></center> </h1>
					<h1 style="color:black"><center style="font-size:80px;" ><b><I> Blood Stock </I></b></center> </h1>
               </div><!-- title -->            
             </div>
       
        <div class="col-md-12">
               <nav class="navbar navbar-inverse" >
                  <div class="container-fluid">
                     
					  <div class="navbar-header">
                          <a class="navbar-brand" href="index.php" >Home</a>
                      </div>
                      
					  <ul class="nav navbar-nav">
					      <li><a href="Event.php">Events</a></li> 
                          <li><a href="About Us.php">About Us</a></li>
                          <li><a href="Contact Us.php">Contact Us</a></li>
						  <li><a href="Dashboard.php">Back</a></li>
                      </ul>
                      
					  <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                      </ul>
                  </div>
               </nav>
        </div><!--Menu div close-->
	   
       </div>
            <div class="col-md-3"></div>
            <div class="col-md-6" >
			    <br><br>
                <form method="post" action="updatebs.php">
                      <label>Blood Group : </label>
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
                     <label>Status :   </label>
                            <select  name="status" id="status">
                                <option>select</option>
                                <option>Availiable</option>
                                <option>Not-Available</option>
                            </select>
                        <br><br>
                      
					  <label>Quantity : </label>
                         <input type="number" name="qua" id="name" placeholder="Enter quantity"><br><br>
                         
						 <input type="submit" name="submit" value="Update" id="submit">
                         <input type="reset"  value="Reset" name="reset" id="reset" >
                         <br>
              </form>
			</div>
            <div class="col-md-3"></div>
        </div>
    </body>

</html>