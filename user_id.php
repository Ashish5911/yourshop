<?php

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

