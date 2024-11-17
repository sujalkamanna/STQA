<html>
  <head>
       <title>Donor Information</title>
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
                    <img src="img/logo.png" height="250px" width="100%">     
                </div><!--logo div -->
             
			    <div class="col-md-9">
                   <h1 style="color:red"><center style="font-size:80px;" ><b><I> Life Saviour Blood Bank</I></b></center> </h1>
		           <h1 style="color:Black"><center style="font-size:80px;" ><b><I>Donor Information</I></b></center> </h1>
                </div><!-- title -->
            </div>
        
            <div class="col-md-12">
               <nav class="navbar navbar-inverse" >
                  <div class="container-fluid">
                     
					 <div class="navbar-header">
                         <a class="navbar-brand" href="index.php" > Home </a>
                     </div>
                      
					  <ul class="nav navbar-nav">
					      <li><a href="Event.php"> Events </a></li> 
                          <li><a href="About Us.php"> About Us </a></li>
                          <li><a href="Contact Us.php"> Contact Us </a></li>
						  <li><a href="Dashboard.php">Back</a></li>
                      </ul>
                      
					  <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
                      </ul>
                  </div>
               </nav>
            </div><!--Menu div close-->
			
			<?php
                include_once 'connect.php';        
                $sql = "SELECT * FROM  donor_info WHERE D_BLOOD_GP ='$_POST[search]' ";
                if (!$result = $conn->query($sql)){
                    die('There was an error running the query ['.$conn->error.']');
                }
                else{
                    echo "<p><h1><center><font size='30pt'><B>Donors Details</B></font></center></h1></p>";
                }
            ?>
			
		  <div class="col-md-12" style="margin-top: 0.2%">
            
			<?php
             if($result->num_rows >0){
            ?>
            <?php
                while($row=$result->fetch_assoc()){
            ?>
          <div class="col-md-3" style="margin-top:2%; " >
		  
            <div class="col-md-12" style="margin-top:1% " >
              <center><img src="img/P.png" width="50%" height="170px"></center>
            </div>
			
            <div class="col-md-12" style="margin-top:3%">
               <center style="font-size:20 ; color:black " >
                  <span><B>Name :-</B> </span> <?php echo $row['D_NAME']; ?><br>
                  <span><B>Contact No :- </B> </span><?php echo $row['D_CONTACT_NO']; ?><br>
                  <span><B>E-mail :- </B> </span><?php echo $row['D_EMAIL_ID']; ?><br>
                  <span><B>Address :- </B> </span><?php echo $row['D_ADDRESS']; ?>
               </center><br><br><br>
            </div>
			
          </div>
        <?php
            }
        ?>
        <?php
            }
            mysqli_close($conn);
        ?>
        </div><br><br>
			
		</div>
		
   </body>


</html>