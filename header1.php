<?php
session_start();
if(isset($_SESSION['user'])){
$con=mysqli_connect("localhost","root","","student") or die(mysqli_error($con));
$selected_emails="select * from ashish";
$final_emails=mysqli_query($con,$selected_emails) or die(mysqli_error($con));
//$counts= mysqli_num_rows($final_emails);

while ($femail= mysqli_fetch_array($final_emails)){
    $mail=$femail[1];
    
}
//echo $mail;
$user="select user_id from login1 where email='$mail'";
$user_i=mysqli_query($con,$user) or die(mysqli_error($con));
$user_i2= mysqli_fetch_assoc($user_i);
$user_id=$user_i2['user_id'];
//$_SESSION['user'][0]=array('user_id'=>'$user_id');
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lifestyle Store</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="ascss.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        .top-mg{
        margin:140px;}
        .lr-mg{
        margin-left:-5px;
        margin-right:-5px;}
        #cars{
            background-color: black;
        }


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
      <a href="#" class="navbar-brand">Lifestyle Store</a>
      <a href="product1.php" class="navbar-brand">&nbsp; &nbsp;Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"><!--navbar-collapse will keep collapse login and signup without this we will see both without clicking on hamburgger icon-->
      <ul class="nav navbar-right navbar-nav">
        <!--without navbar-nav class login and signup will split in different rows-->

           <?php
			if(isset($_SESSION['user']))
			{
			?>
                        <li> <a href="purchased_order.php" > <span class="glyphicon glyphicon-shopping-cart"></span>Purchased Orders</a> </li>
                        <li> <a href="mycart.php" > <span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>
                        <li> <a href="profile.php"> <span class="glyphicon glyphicon-user"></span>Profile</a> </li>
                        <li class="nav-item"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a></li>

			&nbsp;&nbsp;
            <?php
			}
			else
			{
			?>
                        <li> <a href="signup1.php" > <span class="glyphicon glyphicon-user"></span> SignUp</a> </li>
                        <li class="nav-item"> <a href="login3.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
			<?php
			}
			?>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
<?php
}
    
else{
    echo "<script>
     window.location.href='login3.php';
     </script>";
}
?>