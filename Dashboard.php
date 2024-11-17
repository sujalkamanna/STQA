<html>
   
    <head>
       <title>Dashboard</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
    
   <body style="background-color:hsl(300, 100%, 95%);">
   
        <div class="fixed">
            <div class="col-md-12"  style="margin-top: 0.2%">
                <div class="col-md-3">
                    <img src="img/logo.png" height="200px" width="100%">     
                </div><!--logo div -->
             
			    <div class="col-md-9">
                   <h1 style="color:red"><center style="font-size:80px;" ><b><I> Life Saviour Blood Bank</I></b></center> </h1>
		           <h1 style="color:Black"><center style="font-size:80px;" ><b><I>Dashboard</I></b></center> </h1>
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
                      </ul>
                      
					  <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                      </ul>
                  </div>
               </nav>
            </div><!--Menu div close-->
			
			<div class="col-md-12">
			       <div class="col-md-3">
				       <img src="img/R.png" height="200px" width="100%"> 
				   
				       <li class="list-group-item active">Donor</li>
                       <div class="list-group">
                          <a href="Donor.php" class="list-group-item list-group-item-action">Register the Donor</a>
                          <a href="SearchD.php" class="list-group-item list-group-item-action">Search the Donor</a>
                          <a href="RemoveD.php" class="list-group-item list-group-item-action">Remove the Donor</a>
                       </div>
				   </div>
				   
				   <div class="col-md-3">
				       <img src="img/seeker.png" height="200px" width="100%"> 
				   
				       <li class="list-group-item active">Seeker Request</li>
                       <div class="list-group">
                          <a href="seeker.php" class="list-group-item list-group-item-action">Register the Seeker Request</a>
                          <a href="DisplaySeeker.php" class="list-group-item list-group-item-action">Seeker Information</a>
                       </div>
				   </div>
				   
				   <div class="col-md-3">
				       <img src="img/hl.png" height="200px" width="100%"> 
				   
				       <li class="list-group-item active">Hospital Request</li>
                       <div class="list-group">
                          <a href="Hospital.php" class="list-group-item list-group-item-action">Register the Hospital Request</a>
                          <a href="DisplayHospital.php" class="list-group-item list-group-item-action">Hospital Request Information</a>
                       </div>
				   </div>
				   
				   <div class="col-md-3">
				       <img src="img/Bloodstock.png" height="200px" width="100%"> 
				   
				       <li class="list-group-item active">Blood Stock</li>
                       <div class="list-group">
                          <a href="DisplayBS.php" class="list-group-item list-group-item-action">Blood Stock Information</a>
                          <a href="Update.php" class="list-group-item list-group-item-action">Update Blood Stock</a>
                       </div>
				   </div>
			
			</div>
       
       
        
        </div>  
		
    </body>


</html>