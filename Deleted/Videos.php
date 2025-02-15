<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VBajar.com</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body  style="background-color: rgb(243, 214, 233); " id="myPage">
    <div style="background-color: hsl(60, 56%, 91%); border-radius: 5px;" class="container-fluid text-center">
        <p></p>
        <a href="Index.php"><img src="image/LogoBbajar5.png" width="100px" alt="VBajar Image"></img></a>
        <h3 style="color: rgb(82, 9, 9);">Bringing the Best to Your Doorstep: VBajar - Your Premier Online Marketplace</h3>
    </div>

    <!-- Navbar section -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Index.php">VBajar</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                
                </button>
            </div>

            <div  class="collapse navbar-collapse" id="mynav">
                <ul class="nav navbar-nav">
                    <li><a href="New.php">New</a></li>
                    <li><a href="Videos.php">Video</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="image/flash1.jpg" alt="VBajar image" style="width: 100%; height: 200px;">
            </div>
            <div class="item">
                <img src="image/flash2.jpg" alt="VBajar image" style="width: 100%; height: 200px;">
            </div>
            <div class="item">
                <img src="image/flash3.jpg" alt="VBajar image" style="width: 100%; height: 200px;">
            </div>
            <div class="item">
                <img src="image/flash4.png" alt="VBajar image" style="width: 100%; height: 200px;">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

<br>
<!-- Video section-->


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail">
                    <iframe src=" "  width="80%"; height="150px;"  frameborder="0"></iframe>
                    <p> V I D E O L I N K </p>
                    
                </div>

            </div>

        </div>

    </div>
   
</div>




<!-- Footer sectopn: Address & subscribe-->

<?php include('footer.php');  ?>

</body>
</html>


