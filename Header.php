<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VBajar.com</title>
    <link rel="shortcut icon" href="mage/LogoVbajar6.png" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 


    <!-- External CSS file -->
    <link rel="stylesheet" href="Style.css">


</head>

<body style="background-color: rgb(243, 214, 233);" id="myPage">

    </div>

    <!-- Omitted   
<div style="background-color: hsl(60, 56%, 91%); border-radius: 5px;" class="container-fluid text-center">
    <a href="Index.php"><img src="image/LogoVbajar6.png" width="100px" alt="VBajar Image"></a>    <h3 style="color: rgb(82, 9, 9);">Bringing the Best to Your Doorstep: VBajar - Your Premier Online Marketplace</h3>
</div>


Navbar section 
<nav class="navbar navbar-inverse" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="Index.php">VBajar</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                
            </button>
        </div>

        <div class="collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav">
                <li><a href="Products.php">Products</a></li>
                <li><a href="New.php">New</a></li>
                <li><a href="about.php">About</a></li>


        
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin/login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

Ommited -->
    <!-- Navbar section -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Index.php">VBajar</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="mynav">
                <ul class="nav navbar-nav">
                    <li><a href="Products.php">Products</a></li>
                    <li><a href="New.php">New</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <ul class="nav navbar-nav" style="text-decoration: none;">
                    <li style="text-decoration: none;">
                        <h4 style="color: rgb(100, 255, 355); text-decoration: none; margin-top: 8px;">

                            <a href="Index.php" style="color: inherit; text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/LogoVbajar6.png" width="50px" alt="logo"> VBajar - Your Premier Online Marketplace</a>

                        </h4>
                    </li>

                    <li id="btn" style="text-decoration: none;">
                        <form class="form-inline" style="margin:10px; text-decoration: none;">
                            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" class="form-control" style="text-decoration: none; color:black" placeholder="Search the product">
                            <button class="btn btn-primary" type="button" style="text-decoration: none;">Search</button>
                        </form>

                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Slider Section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-50px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" id="divborder">
            <div class="item active">
                <img src="image/flash1.jpg" alt="VBajar image" style="width: 100%; ">
            </div>
            <div class="item">
                <a href="SlideProducts.php"><img src="image/Slide1.jpg" alt="VBajar image" style="width: 100%; "></a>
            </div>
            <div class="item">
                <a href="SlideProducts.php"><img src="image/Slide7.jpg" alt="VBajar image" style="width: 100%; "></a>
            </div>
            <div class="item">
                <a href="SlideProducts.php"><img src="image/Slide3.jpg" alt="VBajar image" style="width: 100%; "></a>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    </nav>
    <br>
