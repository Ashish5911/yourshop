<?php
include 'header1.php';
if(isset($_SESSION['user'])){
?>
<!doctype html>
<html lang="en">
<head>
   
    <style>

        .top-mg{
        margin:50px auto 30px;}
        
        .lr-mg{
        margin-left:-5px;
        margin-right:-5px;}
        .tcen{
          text-align:center;  
        }


    </style>
</head>
<body>
<div class="container">
<?php
echo '<div style="background-color:skyblue"</div><br><br> ';
echo '<marquee direction="left" style="font-size:60px; color:brown;">LIFESTYLE STORE</marquee>';  
echo '<br><br><h1 style="color:green; text-align:center;">Thank you for shopping from our Website</h1><br><br>';
?>
    <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5 top-mg ">
            <h1>YOUR ORDER</h1> 
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <center>
                <table class="table">
                    <thead class="tcen">
                        <tr >
                            <th scope="col">Serial Number</th><th scope="col">Item Name</th><th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php
                    include 'user_id.php';
                        $myproducts="select * from user_products";
                        $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
                        $counts=mysqli_num_rows($products);
                        //echo $counts;
                        //$i=0;
                        $sr=0;
                        if(mysqli_num_rows($products) > 0){
                            for($i=0; $i<$counts; $i++){
                                $rows= mysqli_fetch_array($products);
                                if($rows[1]==$user_id){
                                    /*$u_id='$user_id';
                                    $p_id='null';
                                    $i_name='$rows[3]';
                                    $price='$rows[4]';
                                    $img_src='$rows[5]';
                                    $quan='$rows[6]';*/
                                    //$con=mysqli_connect("localhost","root","","student") or die(mysqli_error($con));

                                    
                                    
                                    $sr=$sr+1;
                                     echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>$rows[3]</td>
                                    <td>$rows[6]</td>
                                </tr>
                                  ";
                                
                                /*echo "<script>
                            
                                    window.location.href='mycart.php';
                                    </script>";*/
                                     
                                   
                            }
                            
                        }
                        $ins_query="insert into purchased_products(user_id,item_name,price,img_src,quantity) select user_id,item_name,price,img_src,quantity from user_products where user_id='$user_id'";
                        $data_inserted=mysqli_query($con,$ins_query) or die(mysqli_error($con));
                    }
                    $ins_query="delete from user_products where user_id='$user_id'";
                        $data_inserted=mysqli_query($con,$ins_query) or die(mysqli_error($con));
                    ?>
                    
                    </tbody>
                
                </table>
            </center>
        </div>
            <marquee direction="right" style="font-size:60px; color:brown;">LIFESTYLE STORE</marquee>
</body>
</html>
<?php
}
    
else{
    header('location:login3.php');
}
?>