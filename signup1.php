<?php
include 'header2.php';
?>
<html>
    <head>
        <title>
            Sign up page
        </title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .cstyle{
        border:1px solid blue;}
        .top-mg{
        margin:140px 1px 100px;
        }
    </style>
    </head>
    
    <body>
<div class="container top-mg ">
    <div class="row ">
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <h4>SIGN UP</h4>
               </div>
            <div class="panel-body">
              <p class="text-warning">Sign Up to make a purchase</p>


              <form action="insert.php" method="post">
               
                 <div class="form-group">
                     <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required pattern="[a-z 0-9 ._%+-]+@[a-z 0-9._]+\.[a-z]{2,3}$">
                    <!-- [a-z 0-9 ._%+-]+@[a-z 0-9._]+\.[a-z]{2,3}$comment -->
                </div>
               
                 <div class="form-group">
                     <input type="text" class="form-control" name="contact_no" placeholder="Contact" required pattern="[0-9]{10}$" >
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" name="address" placeholder="Address" >
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required pattern=".{8,20}" >
                </div>
                <div class="form-group">
                <i class="bi bi-eye-slash" id="togglePassword">Show Password</i>
                </div>
                  <input type="submit" value="login" name="submit" class="btn btn-primary">
              </form>
            </div>
           </div><!-- comment -->
        </div>
    </div>
</div>
        <script src="show_password.js"></script>
        <script>
            let x=name;
            name.innerText=x;
        </script>
    </body>
    </html>