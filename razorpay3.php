<?php
include 'header1.php';


            $con=mysqli_connect("localhost","root","","student") or die(mysqli_error($con));

            $myproducts="select * from user_products";
            
            $products=mysqli_query($con,$myproducts) or die(mysqli_error($con));
            
            $counts=mysqli_num_rows($products);
            $price=0;
            if(mysqli_num_rows($products) > 0){
                for($i=0; $i<$counts; $i++){
                    $rows= mysqli_fetch_array($products);
                    
                    //$item=$_POST['item_name'];
                    if($rows[1]==$user_id ){
                        $price+=$rows[4]*$rows[6];
                    }
                } 
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Lifestyle Store</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        .cstyle{
        background-color: rgba(0,0,0,0.8);
        }
        .top-mg{
        margin:140px 1px 100px;
        }
        
        
    </style>
    
</head>
<body>

<div class="container ">
    <div class="row ">
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
          <div class="panel panel-primary top-mg">
            <div class="panel-heading">
              <h4>Make Purchase</h4>
            </div>
            <div class="panel-body">
              
              <form>
                  <div class="form-group">
                     <input type="text" class="form-control" name="name" id="name" placeholder=" Enter your Name" required>
               </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder=" Enter your Email" required pattern="[a-z 0-9 ._%+-]+@[a-z 0-9._]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="amt" id="amt" value="<?php echo $price; ?>">
              </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder=" Enter your Contact number" required pattern="[0-9]{10}$" >
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" name="address" id="address" placeholder=" Enter your Address" >
                 </div>
                <input type="button" class="btn btn-primary" value="Pay Now"  onclick="pay_now()"/>
                
            </form>
        </div>
    </div>
</div>

  

<!-- comment<form>
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/>
    <input type="textbox" name="amt" id="amt" placeholder="Enter amt"/><br/><br/>
    <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()"/>
</form> -->

<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process1.php',
               data:"&amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_BDWZTvkAtIpkEC", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "LIFE STYLE STORE",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                            console.log(response); 
                            jQuery.ajax({
                               type:'post',
                               url:'payment_process1.php',
                               data:"&payment_id="+response.razorpay_payment_id,
                                success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        } 
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
       