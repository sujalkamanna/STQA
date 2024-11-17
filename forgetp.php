<html>
<head>
    <title>forget password</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/signin.js"></script>
    </head>
    <body style="background-image: url(img/bg9.jpg)" >
        <form method="post"   name="myForm" action="forgetpass.php" >
     <div class="signin-box">
     <img src="img/av2.png" class="av2">
         <br>
        <h1> Reset Password</h1>
        <form >
         <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username" required>
         <p>Password</p>
            <input type="text" name="pass" placeholder="Enter Password" required>
         <p>Confirm Password</p>
            <input type="text" name="cpass" placeholder="Re-enter the Password"  required>
            <input type="submit" name="submit" value="Submit" ><br>
            
         </form>
        
        </div>
     </form>
    </body>

</html>