<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="ascss.css" type="text/css">
  
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .cstyle{
        border:1px solid blue;}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <!--collapse class will show collapsed data-->
            <!--without navbar-toggle class we can make hamburger icon-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Lifestyle Store</a>
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"><!--navbar-collapse will keep collapse login and signup without this we will see both without clicking on hamburgger icon-->
      <ul class="nav navbar-right navbar-nav">
        <!--without navbar-nav class login and signup will split in different rows-->

        <li> <a href="signup1.php" > <span class="glyphicon glyphicon-user"></span> SignUp</a> </li>
        <li> <a href="login3.php" > <span class="glyphicon glyphicon-log-in"></span>&nbsp; &nbsp;Login</a> </li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>


