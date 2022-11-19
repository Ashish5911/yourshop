<?php
//session_start();
include 'header2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Lifestyle Store</title>
  
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
              <h4>LOGIN</h4>
            </div>
            <div class="panel-body">
                <p class=" " style=" color: red;">Login to make a purchase</p>
              <form action="check.php" method="post">
                  <br><div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                    
                </div>
                  <div class="form-group">
                       <i class="bi bi-eye-slash" id="togglePassword">Show Password</i>
                  </div>
                 <button class="btn btn-primary">Login</button>
              </form>
              <?php
                    if(isset($_GET['a'])){
                       echo "<font color='red'> invalid username or password...</font><br><hr> ";
                                         }
              ?>
              
            </div>
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup1.php">Register</a> </p>
            </div>
          </div>

        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>
 <script src="show_password.js"></script>   
</body>
</html>