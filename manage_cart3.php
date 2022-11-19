<?php
session_start();
if(isset($_SESSION['user'])){

//
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
echo '<br>';
if(isset($_POST['add_to_cart'])||isset($_POST['remove_item'])||isset($_POST['mod_quantity'])){
$item_name=$_POST['item_name'];
}
//echo $user_id;  

        if(isset($_POST['add_to_cart'])){
        
            $myproducts="select * from user_products";
            $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
            $counts=mysqli_num_rows($products);
            //echo $counts;
            //$i=0;
            
            if(mysqli_num_rows($products) > 0){
                for($i=0; $i<$counts; $i++){
                    $rows= mysqli_fetch_array($products);
                    if($rows[1]==$user_id && $rows[3]==$_POST['item_name'] ){
                        echo "<script>
                            alert('item already added');
                            window.location.href='product1.php';
                            </script>";
                        exit();
                        }
                        elseif (10!=10) {
                            abc:
                            $u_id=$user_id;
                            
                            $price=$_POST['price'];
                            $img_src=$_POST['img_src'];
                            $quantity=1;
                            $insert_data_query="insert into user_products(user_id,item_name,price,img_src,quantity) values ('$u_id','$item_name','$price','$img_src','$quantity')";
                            $user_data_submit=mysqli_query($con,$insert_data_query) or die(mysqli_error($con));
                            echo "<script>
                                alert('Item Added');
                                window.location.href='product1.php';
                                </script>";
                            exit();
                            
                        
                    }
                    else {
                            if ($i==$counts-1){
                                goto abc;
                            }
                        
                        }
        
    }


            
           
            
            }
            else{
                $u_id=$user_id;
                $price=$_POST['price'];
                $img_src=$_POST['img_src'];
                $quantity=1;
                $insert_data_query="insert into user_products(user_id,item_name,price,img_src,quantity) values ('$u_id','$item_name','$price','$img_src','$quantity')";
                $user_data_submit=mysqli_query($con,$insert_data_query) or die(mysqli_error($con));
                echo "<script>
                    alert('Item Added');
                    window.location.href='product1.php';
                </script>";
                
            }
}
        
            $myproducts="select * from user_products";
            $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
            $counts=mysqli_num_rows($products);
            if(mysqli_num_rows($products) > 0){
                for($i=0; $i<$counts; $i++){
                    $rows= mysqli_fetch_array($products);
                    //$item=$_POST['item_name'];
                    if($rows[1]==$user_id && $rows[3]==$item_name ){
                        if(isset($_POST['remove_item'])){        //to ramove the items from cart
                        $del_com="delete from user_products where user_id='$user_id' and item_name='$item_name'";
                        $user_del_com=mysqli_query($con,$del_com) or die(mysqli_error($con));
                        
                        echo "<script>
                            alert('item Removed');
                            window.location.href='mycart.php';
                            </script>";
                        exit();
                        }
                        
                        elseif (isset($_POST['mod_quantity'])) {    //to change the quantity of items
                            $quan=$_POST['mod_quantity'];
                            $up_quan="update user_products set quantity='$quan' where user_id='$user_id' and item_name='$item_name'";
                            $user_update_com=mysqli_query($con,$up_quan) or die(mysqli_error($con));
                            echo "<script>
                            
                            window.location.href='mycart.php';
                            </script>";
                        exit();

                        }
                        else{
                            
                        }
                    }
               }
           }
}
else{
    echo "<script>
                            alert('Signup or login first to buy items');
                            
                            </script>";
    header('location:login3.php');
}
    
       
?>
