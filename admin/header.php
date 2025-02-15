<?php 
session_start();
if($_SESSION['key'] != "admin") {
    header("location: login.php");
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
    <script type="text/javascript" src="../tools/ckeditors/ckeditor.js""> </script>

    <!-- External CSS file -->
    <link rel="stylesheet" href="style.css">
    

</head>
<!-- Header of admin -->
<div class="container-fluid text-center" id="hDive">
        <h1><a href="AdminDashboard.php"><b  id="panl">A d m i n &nbsp;&nbsp;P a n e l</b></a> <a class="navbar-brand" id="panl" href="../Index.php">VBajar</a> <a class="navbar-brand" id="panl" href="login.php">Login</a></h1>   
    </div>


    <!-- Body section -->
    <div class="container-fluid">
        <div class="row">
            <!-- Vertical nav bar for panel -->
            <div class="col-sm-2" id="nav">
                <h4><b>CONTROL</b></h4>
                <ul id="list">
                    <li><a href="AdminDashboard.php">Admin Dashboard</a></li>
                    <li><a href="ManageAdmin.php">Manage Admin</a></li>
                    <li><a href="ManageEmployee.php">Manage Employee</a></li>
                    <li><a href="ManageProduct.php">Manage Product</a></li>
                    <li><a href="CustomerView.php">Customer View</a></li>
                    <li><a href="ManageOrder.php">Manage Order</a></li>
                    <li><a href="ReviewSection.php">Review Section</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
