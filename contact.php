<?php
 include 'header1.php';
 ?>
<html>
    <head>
        <title>
            Contact us
        </title>
         <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div style="margin-top: 20px;" class="container-fluid">
          <img src="html/contact.bmp" width="100%">
        </div>
        <br>
        <div class="container">
          <div class="row">
            <div class="col-sm-8" style="padding:20px; border:1px solid #F0F0F0;">
                    <form method="post">
                    <div class="form-group">
                         <input type="text" class="form-control"  placeholder="Name*" name="name" required/>
                    </div>
                                <div class="form-group">
                         <input type="email" class="form-control"  placeholder="email*" value="" name="email" required/>
                    </div>
                                <div class="form-group">
                         <input type="tel" class="form-control" pattern="[6-9]{1}[0-9]{9}"  name="phone" placeholder="Phone(optinal) EX 9213298761"/>
                    </div>
                                <div class="form-group">
                        <textarea class="form-control"    placeholder="Message*" name="msgtxt" rows="3" col="10" required/></textarea>
                    </div>
                                <div class="form-group">
                           <button type="submit" name="message" class="btn btn-danger">Send Message</button>
                    </div>
                </form>
                </div>
            <div class="col-sm-4" style="padding:30px;">
                   <div class="form-group">
                   <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<b> 90000 00000</b><br><br>
                                <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Chohal , Hoshiarpur, Zip Code-146024<br>(24*7 Days)

                   </div>
                </div>
          </div>
        </div>
        <br><br>
          <?php
                include("footer.php");
        ?>
    </body>
</html>
<?php
include 'user_id.php';
if(isset($_POST['message'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msgtxt'];
$user_query="insert into contact(user_id,name,email,phone,msg) values('$user_id','$name','$email','$phone','$msg')";
$Quert_submit=mysqli_query($con,$user_query) or die(mysqli_error($con));

}
   ?>