<?php
session_start();
$u=$_POST['email'];
$p=$_POST['password'];
$h=mysqli_connect("localhost","root","","student");
$user_select_query="select * from login1";
$r=mysqli_query($h,$user_select_query);
$flag=0;
while ($a = mysqli_fetch_array($r)) {
 
    if($a[2]==$u && $a[3]==md5($p)){
        $insert_data_query="insert into ashish(email) values ('$u')";
        $user_data_submit=mysqli_query($h,$insert_data_query) or die(mysqli_error($con));
        $flag=1;
        $_SESSION['user'][0]=array('email'=>'$u');

        header('location:product1.php');
        echo 'login sucess......!!!!!!!!';
    }
    else{
        $flag=0;
    }
}
if($flag==0){
    echo "<script>
                            alert('login failed');
                            window.location.href='mycart.php';
                            </script>";
    //header('location:login3.php?a=1');//here "a" will redirect to login page
    
} 
mysqli_close($h)

?>