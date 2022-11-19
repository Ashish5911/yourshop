   <?php
session_start();
//session_destroy();
$con=mysqli_connect("localhost","root","","student") or die(mysqli_error($con));
$selected_emails="select * from ashish";
$final_emails=mysqli_query($con,$selected_emails) or die(mysqli_error($con));
$counts= mysqli_num_rows($final_emails);

while ($femail= mysqli_fetch_array($final_emails)){
    $mail=$femail[0];
    
}

$user="select user_id from login1 where email=$mail";
$user_id=mysqli_query($con,$user) or die(mysqli_error($con));



 {
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['cart'])){
            $myitems=array_column($_SESSION['cart'],'item_name','user_id');
            

            if(in_array($_POST['item_name'],$myitems)){
                if(in_array([$user_id],$myitems['key'])){
                echo "<script>
                    alert('Item alredy Added');
                    window.location.href='product1.php';
                </script>";}
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('user_id'=>$user_id,'item_name'=>$_POST['item_name'],'price'=>$_POST['price'], 'img_src'=>$_POST['img_src'],'quantity'=>1);
            echo "<script>
                alert('Item Added');
                window.location.href='product1.php';
                </script>";
            }
            
            }
            else{
                $_SESSION['cart'][0]=array('user_id'=>$user_id,'item_name'=>$_POST['item_name'],'price'=>$_POST['price'], 'img_src'=>$_POST['img_src'],'quantity'=>1);
                echo "<script>
                 alert('Item Added');
                window.location.href='product1.php';
                </script>";
            }
}
       if(isset($_POST['remove_item'])){
           foreach ($_SESSION['cart'] as $key => $value){
               if($value['item_name']==$_POST['item_name'] and $value['user_id']==$user_id){
                   unset($_SESSION['cart'][$key]);
                   $_SESSION['cart']=array_values($_SESSION['cart']); 
                   echo "<script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>";
               }
           }
       }
       if(isset($_POST['mod_quantity']))
       {
          foreach ($_SESSION['cart'] as $key => $value){
               if($value['item_name']==$_POST['item_name'] and $value['user_id']==$user_id){
                   $_SESSION['cart'][$key]['quantity']=$_POST['mod_quantity'];
                  //print_r($_SESSION['cart']);
                    
                    echo "<script>
               
                            window.location.href='mycart.php';
                        </script>";
               }
           }  
       }
}


 
?>
