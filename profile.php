

<?php
include 'header1.php';
$user="select * from login1 where user_id='$user_id'";
$user_i=mysqli_query($con,$user) or die(mysqli_error($con));
$rows= mysqli_fetch_array($user_i);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .cstyle{
        background-color: rgba(0,0,0,0.8);
        }
        .top-mg{
        margin:60px 1px 100px;
        }
        
        
    </style>
    
</head>
<body>
    


<div class="top-mg">
    <div class="row ">
        
        
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h1 style="background-color:red; border-radius: 20px; color: white;" class="text-center"> My Profile </h1>

            <form action="update.php" method="post" class="top-mg">
            <div class=""><b>NAME:</b></div>
            <div class="form-control"><?php echo $rows[1]; ?><button style="float:right;margin-top:-5px;" name="up_name">edit&nbsp;<i style="float:right; font-size:24px" class="fa fa-edit"></i></button></div><br>
            <div class=""><b>E-MAIL ID:</b></div>
            <div class="form-control"><?php echo $rows[2]; ?><button style="float:right; margin-top:-5px;" name="up_mail">edit&nbsp;<i style="float:right; font-size:24px" class="fa fa-edit"></i></button></div><br>
            <div class=""><b>CONTACT NUMBER:</b></div>
            <div class="form-control"><?php echo $rows[4]; ?><button style="float:right;margin-top:-5px;" name="up_phone">edit&nbsp;<i style="float:right; font-size:24px" class="fa fa-edit"></i></button></div><br>
            <div class=""><b>ADDRESS:</b></div>
            <div class="form-control"><?php echo $rows[5]; ?><button style="float:right;margin-top: -5px;;" name="up_address">edit&nbsp;<i style="float:right; font-size:24px" class="fa fa-edit"></i></button></div><br><!-- comment -->
            </form>


            
            <!-- comment -->
             
           
          </div>

        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>
   
</body>
</html>