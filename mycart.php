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


    </style>
</head>
<body>
<div class="container">
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12 text-center border-rounded bg-light my-5 top-mg ">
            <h1 style="background-color:red; border-radius: 20px; color: white; margin: 0 30% 0 30%;"> My Cart </h1>
        </div>
        <div class="col-lg-8">
            <table class="table " >
                <thead class="text-center" >
                    <tr>
                        <th scope="col">Serial number</th><th scope="col">Item Image</th>  <th scope="col">Item Name</th>  <th scope="col">Price</th>  <th scope="col">Quantity</th>
                        <th scope="col">Total</th><th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody class="text-center  ">
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
                                    
                                    $sr+=1;
                                     echo "
                                <tr>
                                    <td>$sr</td>
                                    <td><img src='$rows[5]' class='card-img-top' height='100'></td>
                                    <td>$rows[3]</td>
                                    <td>$rows[4]<input type='hidden' class='iprice' value='$rows[4]'></td>
                                    <td>
                                    <form  action='manage_cart3.php' method='POST'>   
                                        <input class='text-center iquantity' type='number' name='mod_quantity'  onchange='this.form.submit();' value='$rows[6]' min='1' max='10'>
                                        <input type='hidden' name='item_name' value='$rows[3]'>
                                    </form>
                                    </td>
                                    <td class='itotal'></td>
                                    <td>
                                        <form  action='manage_cart3.php' method='POST'>
                                            <button class='btn btn-sm btn-danger' name='remove_item'>REMOVE</button>
                                            <input type='hidden' name='item_name' value='$rows[3]'>
                                        </form>
                                    </td>
                                </tr>
                                  ";
                                     
                                   
                            }
                            
                        }

                    }
                    ?>
                    
                </tbody>
                
            </table>
        </div>
        <div class="col-lg-3">
            <div class="border bg-light rounded p-4  top-mg">
               <!-- <h4 > Grand Total: &nbsp; &nbsp; </h4> comment -->
                <h3 class="text-right" id="gtotal"></h3><!-- this id="gtotal" will write the value of grand total and gtotal get its value by js code -->
                
                <br>
            
                <form action="manage_cart2.php" method="POST">
            <!-- comment<div class="form-check">
                <input class="form-check-input" type="radio" name="flexradiodefault" id="flexradiodefault2" checked>
                <label class="form-check-label" for="flexradiodefault2">
                    Cash on DELIVERY
                </label>
            </div> -->
            <div class="form-check" >
                <a href="product1.php" style="text-decoration:none"><button class="btn btn-primary btn-block" name="con_shop">CONTINUE SHOPPING</button></a>
            </div>
            <br>
            <div class="form-check" >
                <button class="btn btn-primary btn-block" name="cod" >CASH ON DELIVERY</button>
            </div>
            <br>
            <button class="btn btn-primary btn-block" name="purchase" id="gtotal2"></button>
        </form>
            </div>
        </div>
    </div>
</div>
     
   <?php
  include 'footer.php';
  ?>
    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        
        function sub_total(){
            gt=0;
            for(i=0;i<iprice.length;i++){
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal2.innerText="$PAY : "+gt+".00 Rs.";
            
            gtotal.innerText="Grand Total: "+gt+".00 Rs.";
        }
        sub_total();
    </script>
</body>
</html>
<?php 
}
else{
    header('location:login3.php');
}
    ?>