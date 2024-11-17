<html>
   <head>
        <title>Blood Stock Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
	
	<body style="background-color:hsl(300, 100%, 95%);">
	  <div class="fixed">
	   
	    <div class="col-md-12"  style="margin-top: 0.2%">
          <div class="col-md-3">
             <img src="img/logo.png" height="250px" width="100%">     
          </div><!--logo div -->
          <div class="col-md-9">
             <h1 style="color:red"><center style="font-size:80px;" ><b><I> Life Saviour Blood Bank</I></b></center> </h1>
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
		
    <?php
      include_once 'connect.php';        
        $sql = "SELECT * FROM  bloodstock ";
         if (!$result = $conn->query($sql)){
                die('There was an error running the query ['.$conn->error.']');
         }
        else{
               echo "<p><h1><center><font size='30pt'><B>Blood Stock</B></font></center></h1></p>";
            }
        
    ?>
    
	<div class="col-md-12" style="margin-top: 2%">
           
         <div class="col-md-2"></div>
         <div class="col-md-8">
             <table class="table table-hover">
                <thead>
                 <tr>
                    <th>Blood Group </th>
                    <th>Status</th>
                    <th>Quantity</th>
                </tr>
               </thead>
                 
           <?php
              if($result->num_rows >0){
           ?>
           <?php
               while($row=$result->fetch_assoc()){
           ?>
                   
               <tbody>
                    <tr>
                       <td> <?php echo $row['blood_g']; ?></td>
                       <td> <?php echo $row['Status']; ?></td>
                       <td> <?php echo $row['Quantity']; ?></td>
                   </tr>
              </tbody>
                 
         <?php
            }
          ?>
                 
         <?php
             }
             mysqli_close($conn);
          ?>
                 
          </table>
            
         </div>       
         <div class="col-md-2"></div>   
            
         
        </div><br><br>
		
	  </div>
	</body>


</html>