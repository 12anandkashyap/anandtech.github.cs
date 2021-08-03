<?php
include('../dbconnection.php');
if(isset($_REQUEST['remail'])){
    
    $rEmail = $_REQUEST['remail'];
    $rpassword = $_REQUEST['rpassword'];
    $sql = "SELECT r_email, r_password FROM requesterlogin_tb
    WHERE r_email = '".$rEmail."' AND r_password = 
    '".$rpassword."' limit 1";
    
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $_SESSION['is_login'] = true;
        $_SESSION['rEmail'] = $rEmail;
        echo "<script>location.href='Requesterprofile.php';</script>";
        exit;
    }else{
        $msg = '<div class="alert alert-warning mt-4">Enter vaild Email-id and Password</div>';
    }
}
?>





<html>
    <head>
     <title>
        Login
     </title>
        <!--------Bootstrap CSS--------->
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        
        <!---------Font Awesome CSS----->
        <link rel="stylesheet" href="../CSS/all.min.css">
        
    </head>
 <body>
    <div class="mt-5 text-center" style="font-size: 30px;">
        <i class="fas fa-stethoscope"></i>
    <span>
        Online Service Management System
        </span>  
     </div>
     <p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-danger"></i>Requester Area</p>
     <div class="conatiner-fluid" style="margin-top:34px;">
     <div class="row justify-content-center">
         <div class="col-sm-6 col-md-4">
         <form action="" class="shadow-lg p-4" method="post">
             <div class="form-group">
             <i class="fas fa-user"></i><label for="email"
                 class="font-weight-bold pl-2">Email</label>
                 <input type="email" class="form-control" placeholder="Email" name="remail">
                 <small class="form-text">We'all never share your email with anyone else</small>
             </div>
             
             <div class="form-group">
             <i class="fas fa-key"></i><label for="password"
                 class="font-weight-bold pl-2">Password</label>
                 <input type="password" class="form-control" placeholder="password" name="rpassword">
                 
             </div> 
             <button type="submit "class="btn btn-outline-success mt-3 font-weight-bold btn-block">Login</button>
             <?php if(isset($msg)) {echo $msg;} ?>
             </form>
             <div class="text-center"><a href="../index.php" class="btn btn-info mt-3">Back to Home</a></div>
         </div>
         </div>
     </div>
     
     
     
     
     
     
     
     
     
    <!----------------------------javaScript----------------------->
        
        <script src="../JavaScript/jquery.min.js"></script>
        <script src="../JavaScript/popper.min.js"></script>
        <script src="../JavaScript/bootstrap.min.js"></script>
        <script src="../JavaScript/all.min.js"></script>
    </body>
</html>