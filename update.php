<?php
include 'header1.php';
?>

<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4" style="margin-top:100px; border-radius:20px;">
<h1 style="background-color:red; border-radius: 20px; color: white;" class="text-center">Update Form</h1>
</div>
<?php
    
    $myproducts="select * from login1";
    $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
    $counts=mysqli_num_rows($products);
        if(isset($_POST['up_name'])){
           // echo '<div style="margin-top:100px;"><b>1:</b></div>';
            
                        //echo '<div style="margin-top:100px;"><b>4:</b></div>';
                        echo ' 
                            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                                <form action="update2.php" method="post">
                                <div style="margin-top:50px;"><b>Enter New Name:</b></div>
                                <div class="form-check">
                                    <input type="text" class="form-control" name="new_name" >
                                </div><br>
                                <button class="btn btn-primary" name="name_button">update</button>
                                </form>
                            </div>
                            ';
                    }
                    else {
                        
                    }
                       
                 
       
        if(isset($_POST['up_mail'])){
           // echo '<div style="margin-top:100px;"><b>1:</b></div>';
           
                        //echo '<div style="margin-top:100px;"><b>4:</b></div>';
                        echo ' 
                            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                                <form action="update2.php" method="post">
                                <div style="margin-top:100px;"><b>Enter New E-mail:</b></div>
                                <div class="form-check">
                                    <input type="text" class="form-control" name="new_mail" >
                                </div><br>
                                <button class="btn btn-primary" name="mail_button">update</button>
                                </form>
                            </div>
                            ';
                    }
                    else {
                        
                    }
                       
                
        if(isset($_POST['up_phone'])){
           // echo '<div style="margin-top:100px;"><b>1:</b></div>';
           
                        //echo '<div style="margin-top:100px;"><b>4:</b></div>';
                        echo ' 
                            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                                <form action="update2.php" method="post">
                                <div style="margin-top:100px;"><b>Enter New Contact Number:</b></div>
                                <div class="form-check">
                                    <input type="text" class="form-control" name="new_phone" >
                                </div><br>
                                <button class="btn btn-primary" name="phone_button">update</button>
                                </form>
                            </div>
                            ';
                    }
                    else {
                        
                    }
                 
        if(isset($_POST['up_address'])){
           // echo '<div style="margin-top:100px;"><b>1:</b></div>';
            
                        //echo '<div style="margin-top:100px;"><b>4:</b></div>';
                        echo ' 
                            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                                <form action="update2.php" method="post">
                                <div style="margin-top:100px;"><b>Enter New Address:</b></div>
                                <div class="form-check">
                                    <input type="text" class="form-control" name="new_address" >
                                </div><br>
                                <button class="btn btn-primary" name="address_button">update</button>
                                </form>
                            </div>
                            ';
                    }
                    else {
                        
                    }
                       
                
                        
?>
