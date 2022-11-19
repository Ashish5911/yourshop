<?php
include 'header3.php';
?>
<html>
    <head>
        <title>
          
        </title>
    </head>
    <body>
  <div class="container  ">
    <div class="jumbotron top-mg lr-mg">
        <h1 style="font-size:4vw;">Welcome to our Lifestyle Store!</h1>
        <p style="font-size:2.5vw;">We have the best Cameras,Shirts and Watches for you.No need to hunt around.We have all in one place.</p>
    </div>
      <div class="row text-center ">
 <?php

if(isset($_POST['search'])){
    $item=$_POST['search_product'];
    $myproducts="select * from products where name like '%$item%' or category like '%$item%';";
                            $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
                            $counts=mysqli_num_rows($products);
                            //echo $counts;
                            //$i=0;
                            
                            if(mysqli_num_rows($products) > 0){
                                for($i=0; $i<$counts; $i++){
                                    $rows= mysqli_fetch_array($products);
                                    //echo $rows[3];
                                     ?> 
                                    
                                        <form action="manage_cart3.php" method="post">
                                            <div class="col-xs-6 col-sm-4 col-md-3  bdr ">
                                                <img src="<?php echo $rows[3];?>" class="img-responsive img-thumbnail ">
                                                <div class="caption thumbnail ">
                                                    <h3><?php echo $rows[1];?></h3>
                                                    <p>Price:Rs.<?php echo $rows[2];?>.00</p>
                                                    <button type="submit" class="btn btn-primary btn-block" name="add_to_cart" value="Add to Cart">Add to Cart</button>
                                                    <input type="hidden" name="price" value="<?php echo $rows[2];?>">
                                                    <input type="hidden" name="item_name" value="<?php echo $rows[1];?>">
                                                    <input type="hidden" name="img_src" value="<?php echo $rows[3];?>">

                                                </div>
                                            </div>
                                        </form>
                                     <?php
                                }
                            } 
    
    
}?>
 </div>  
  </div>
        <?php
  include 'footer.php';
  ?>
</body>
</html>
    
    

