<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass= md5($_POST['password']);
$contact=$_POST['contact_no'];
$address=$_POST['address'];
$con=mysqli_connect("localhost","root","","student") or die(mysqli_error($con));
$myemails="select * from login1";
$user_emails=mysqli_query($con,$myemails) or die(mysqli_error($con));
$counts=mysqli_num_rows($user_emails);
if(mysqli_num_rows($user_emails) > 0){
    for ($i=0;$i<$counts;$i++){
        $rows= mysqli_fetch_array($user_emails);
       
        if($rows[2]==$email){
            echo "<script>
                alert('another account is using this email');
                window.location.href='signup1.php';
                </script>";
            exit();
                
            }
        elseif($contact==$rows[4]){
            echo "<script>
                alert('another account is using this phone number');
                window.location.href='signup1.php';
                </script>";
            exit();
            }
            elseif (10!==10) {
                abc:
                $insert_data_query="insert into login1(name,email,password,contact_no,address) values ('$name','$email','$pass','$contact','$address')";
                $user_data_submit=mysqli_query($con,$insert_data_query) or die(mysqli_error($con));
                header('location:login3.php');
                exit();
                
        }
       
        else {
            if($i==$counts-1){
                goto abc;
            }
               
           
          
        }
        
    }

   
}

else{
$insert_data_query="insert into login1(name,email,password,contact_no,address) values ('$name','$email','$pass','$contact','$address')";
$user_data_submit=mysqli_query($con,$insert_data_query) or die(mysqli_error($con));
header('location:login3.php');
}

if(isset($_POST['submit'])){
    echo ' <script>
        name.innerText=$name;
    </script>';
}
?>