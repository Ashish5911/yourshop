<?php
include 'user_id.php';
session_start();
$con=mysqli_connect("localhost","root","","student") or die(mysqli_error($con));
$myproducts="select * from user_products where user_id='$user_id'";
$products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
$counts=mysqli_num_rows($products);


 if(isset($_POST['con_shop'])){
     header('location:product1.php');
     
 }
elseif($counts>0 && isset($_POST['purchase']))
{    
     header('location:razorpay3.php');
     unset($_SESSION['purchase']);
   
}
 elseif($counts>0 && isset($_POST['cod']))
{    
     header('location:cod.php');
     unset($_SESSION['purchase']);
   
}
 else {
       
                    echo "<script>
                             alert('No items in cart please select minimun one item... Thank you!!');
                            window.location.href='mycart.php';
                        </script>";
    
 }
     ?>
