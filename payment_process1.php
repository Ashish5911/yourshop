<?php
session_start();
if(isset($_SESSION['user'])){
$con=mysqli_connect("localhost","root","","student")or die(mysqli_error($con));
if(isset($_POST['name']) && isset($_POST['amt'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="Pending";

    $added_on=date('Y-m-d h:i:s');
    $ins_query="insert into payment1(name,amount,payment_status,added_on) values ('$name','$amt','$payment_status','$added_on')";
    $user_data_submit=mysqli_query($con,$ins_query)or die(mysqli_error($con));
    $_SESSION['OID']=mysqli_insert_id($con);//oid=order id
}
if(isset($_POST['payment_id']) && isset($_SESSION['OID']))
{

$payment_id=$_POST['payment_id'];

$added_on=date('Y-m-d h:i:s');

$ids="update payment1 set payment_status='complete',payment_id=$payment_id where id='".$_SESSION['OID']."'" ;
$user_data_submit=mysqli_query($con,$ids) or die(mysqli_error($con));
echo "userdata successfuly inserted";
}
}
else{
    header('location:login3.php');
}

?>