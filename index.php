<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Life Saviour Blood Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:hsl(300, 100%, 95%);">

    <div class="container-fluid">
        <!-- Logo Section -->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color:hsl(300, 100%, 95%);">
                <img src="img/30.png" height="350px" width="100%">   
            </div> <!-- logo div -->
            <div class="col-md-1"></div>
        </div>

        <!-- Navigation Menu -->
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Home</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="Event.php">Events</a></li>
                        <li><a href="Hospital1.php">Hospital Request</a></li>
                        <li><a href="seeker1.php">Seeker Request</a></li>
                        <li><a href="About Us.php">About Us</a></li>
                        <li><a href="Contact Us.php">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </nav>
        </div> <!-- Menu div close -->

        <!-- Main Content -->
        <div class="row">
            <!-- Carousel Section -->
            <div class="col-md-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li> 
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/1.jpg" style="height: 350px; width: 100%" alt="Donate">
                        </div>
                        <div class="item">
                            <img src="img/2.jpg" style="height: 350px; width: 100%" alt="cross-word">
                        </div>
                        <div class="item">
                            <img src="img/3.jpg" style="height: 350px; width: 100%" alt="Blood bank">
                        </div>
                        <div class="item">
                            <img src="img/4.jpg" style="height: 350px; width: 100%" alt="Airoplane">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> <!-- Slider div close -->

            <div class="col-md-1"></div>

            <!-- Text Section -->
            <div class="col-md-6">
                <h1>Blood banking is the process that takes place in the lab to make sure that donated blood, or blood products, are safe before they are used in blood transfusions and other medical procedures.</h1>
            </div>
        </div> <!-- Main content row close -->

        <!-- Video Section -->
        <div class="row" style="margin-top: 2%">
            <div class="col-md-12">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/7HXJyMjUBqI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> <!-- Video section close -->

    </div> <!-- container-fluid close -->
<!-- Footer Section -->
<footer style="background-color:#333; color:white; text-align:center; padding:20px; margin-top:30px;">
    <div class="container">
        <p>&copy; 2024 Life Saviour Blood Bank. All rights reserved.</p>
        <p>Developed by <a href="#" style="color: #FFD700; text-decoration: none;" target="_blank">Sankalp Manchekar</a> And <a href="#" style="color: #FFD700; text-decoration: none;" target="_blank">Samrudhi Manchekar</a></p>
    </div>
</footer>

</body>
</html>
