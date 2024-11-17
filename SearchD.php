<html>

  <head>
       <title> Search Donor </title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" type="text/css" href="css/srchd.css">
  </head>
  
  <body style="background-color:hsl(300, 100%, 95%);">
   
        <div class="fixed">
            <div class="col-md-12"  style="margin-top: 0.2%">
                <div class="col-md-3">
                    <img src="img/logo.png" height="250px" width="100%">     
                </div><!--logo div -->
             
			    <div class="col-md-9">
                   <h1 style="color:red"><center style="font-size:80px;" ><b><I> Life Saviour Blood Bank</I></b></center> </h1>
		           <h1 style="color:Black"><center style="font-size:80px;" ><b><I>Search Donor</I></b></center> </h1>
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
			
		   <div class="col-md-12" style="margin-top: 0.5%">
            <div class="col-md-12">
                <h1>Search the Donor : </h1><br>
                <form class="example" action="DisplayD.php" method="post">   
                 <input type="text" placeholder="Enter Blood Group e.g A+ve.." name="search">
                 <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
         
           </div>
		
		</div>
			


</html>