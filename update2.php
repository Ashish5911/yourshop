<?php
include 'header1.php';
if(isset($_POST['name_button'])){
    $name=$_POST['new_name'];
    $up_name="update login1 set name='$name' where user_id='$user_id'";
    $up_name_done=mysqli_query($con,$up_name) or die(mysqli_error($con));
    echo "<script>
        window.location.href='profile.php'; 
        </script>";
}
if(isset($_POST['mail_button'])){
    $mail=$_POST['new_mail'];
    $myemails="select * from login1";
    $user_emails=mysqli_query($con,$myemails) or die(mysqli_error($con));
    $counts=mysqli_num_rows($user_emails);
    if(mysqli_num_rows($user_emails) > 0){
        for ($i=0;$i<$counts;$i++){
            $rows= mysqli_fetch_array($user_emails);
            if($rows[2]==$mail){
                
                echo "<script>
                    alert('another account is using this email');
                    
                    window.location.href='update3.php'; 
                    </script>";
                exit();

                }
            elseif(10!==10){
                abcd:
                $up_mail="update login1 set email='$mail' where user_id='$user_id'";
                $up_mail_done=mysqli_query($con,$up_mail) or die(mysqli_error($con));
                $myemails="select * from ashish";
                $user_emails=mysqli_query($con,$myemails) or die(mysqli_error($con));
                $counts=mysqli_num_rows($user_emails);
                $ash="update ashish set email='$mail' where id='$counts'";
                $up_ash=mysqli_query($con,$ash) or die(mysqli_error($con));
                echo "<script>
                    window.location.href='profile.php'; 
                    </script>";
                exit();
                }
            else {
                if($i==$counts-1){
                    goto abcd;
                }
            }
        }
    }
}
if(isset($_POST['phone_button'])){
    $phone=$_POST['new_phone'];
    $myemails="select * from login1";
    $user_emails=mysqli_query($con,$myemails) or die(mysqli_error($con));
    $counts=mysqli_num_rows($user_emails);
    if(mysqli_num_rows($user_emails) > 0){
        for ($i=0;$i<$counts;$i++){
            $rows= mysqli_fetch_array($user_emails);
            if($phone==$rows[4]){
                echo "<script>
                    alert('another account is using this phone number');
                    window.location.href='update4.php';
                    </script>";
                exit();
                }
            elseif(10!==10){
                    phone:
                    $up_phone="update login1 set contact_no='$phone' where user_id='$user_id'";
                    $up_phone_done=mysqli_query($con,$up_phone) or die(mysqli_error($con));
                    echo "<script>
                         window.location.href='profile.php'; 
                         </script>";
                    exit();
                }
            else {
                if($i==$counts-1){
                    goto phone;
                }
            }
        }
    }
}
    

if(isset($_POST['address_button'])){
    $address=$_POST['new_address'];
    $up_address="update login1 set address='$address' where user_id='$user_id'";
    $up_address_done=mysqli_query($con,$up_address) or die(mysqli_error($con));
    echo "<script>
        window.location.href='profile.php'; 
        </script>";
}

?>