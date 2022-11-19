<?php
include 'header1.php';
    
    $myproducts="select * from login1";
    $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
    $counts=mysqli_num_rows($products);
 
        
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
                    
                    
        
        
           // echo '<div style="margin-top:100px;"><b>1:</b></div>';
            /*if( mysqli_num_rows($products)> 0){
                //echo '<div style="margin-top:100px;"><b>2:</b></div>';
                for($i=0; $i<$counts; $i++){
                    //echo '<div style="margin-top:100px;"><b>3:</b></div>';
                    $rows= mysqli_fetch_array($products);
                    if($rows[0]==$user_id){
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
                       
                }
            }*/
        

                        
?>

