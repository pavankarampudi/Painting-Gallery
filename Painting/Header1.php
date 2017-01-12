<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>Online Painting Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Online Painting Store</h1>      
    <p>To Provide Service to Each and Every One</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <!-- <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="50px" height="30px"></img></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="artist.php">Add Artist</a></li>
        <li><a href="prints.php">Add Prints</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
    <!-- <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>-->
        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out">Logout</span>
        </a></li>
      </ul>
    </div>
  </div>
</nav>

  
  



</body>
</html>
