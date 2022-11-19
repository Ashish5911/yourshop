<?php
include 'header1.php';
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
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 text-center border-rounded bg-light my-5 top-mg ">
                <h1 style="background-color:red; border-radius: 20px; color: white; margin: 0 30% 0 30%;"> My Orders</h1>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <table class="table " >
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial number</th><th scope="col">Item Image</th>  <th scope="col">Item Name</th>  <th scope="col">Price</th>  <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        include 'user_id.php';
                            $myproducts="select * from purchased_products";
                            $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
                            $counts=mysqli_num_rows($products);
                            $sr=0;
                            if(mysqli_num_rows($products) > 0){
                                for($i=0; $i<$counts; $i++){
                                    $rows= mysqli_fetch_array($products);
                                    if($rows[1]==$user_id){

                                        $sr+=1;
                                        echo "
                                        
                                        <tr>
                                            <td>$sr</td>
                                            <td><img src='$rows[5]' class='card-img-top' height='100'></td>
                                            <td>$rows[3]</td>
                                            <td>$rows[4]</td>
                                            <td>$rows[6]</td>
                                        </tr>
                                          ";
                                         
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div><!-- comment -->
    </div>
 <?php
    include 'footer.php';
 ?>
</body>
</html>


