<html>
<head>
    <title>Sign-in</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:hsl(300, 100%, 95%);" >
        <form  method="POST"  name="myForm" action="dbLogin.php">
     <div class="signin-box">
     <img src="img/av2.png" class="av2">
         <br>
        <h1> Sign-in Here</h1>
        <form>
         <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username" required>
         <p>Password</p>
            <input type="text" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Log-in" ><br>
            <a href="forgetp.php">Forget Password</a>
         </form>
        
        </div>
     </form>
    </body>

</html>