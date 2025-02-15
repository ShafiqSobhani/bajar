<?php
include_once '../config/database.php';

$db = new Database();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email = '$email' AND pass = '$password'";
    $result = $db->select($sql); 

    if($result->num_rows > 0){ 
        session_start();
        $_SESSION['key'] = 'admin';
        header("Location: AdminDashboard.php"); 
        exit;
    } else {
        echo "<script>
        alert('Login failed!! Email or password not accurate.');
        window.location.href = 'login.php'; // Redirect to home.php if login fails
        </script>"; 
        exit; 
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- External CSS file -->
    <link rel="stylesheet" href="style.css">
    
</head>



<body   id="body">


        <!-- Header of admin -->
        <div class="container-fluid text-center" id="hDive">
        <h1><a href="AdminDashboard.php"><b  id="panl">A d m i n &nbsp;&nbsp;P a n e l</b></a> <a class="navbar-brand" id="panl" href="../Index.php">VBajar</a> <a class="navbar-brand" id="panl" href="login.php">Login</a></h1>   
    </div>

       <!-- details -->


    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 thumbnail" id="login">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 pull-right text-right">
                            <input type="submit" name="submit" value="Login" class="btn btn-default">
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
