<?php 
include('dbconnection.php');
if(isset($_REQUEST['rsign-up']))

{
    //Cheaching for Empty Feilds
    if(($_REQUEST['rname'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['rpassword'] == ""))
    {
        $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Feild Required</div>';
    }
    else
    {
        //Email Already Registered
        $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email 
        = '".$_REQUEST['remail']."'";
        
        $result = $conn->query($sql);
        if($result->num_rows==1)
        {
            $regmsg = '<div class="alert alert-warning mt-2" 
            role="alert">Email ID Already Registered</div>';
        }else
        {
        //Assigning User's values to variable
        $rname = $_REQUEST['rname'];
        $remail = $_REQUEST['remail'];
        $rpassword = $_REQUEST['rpassword'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password)VALUES('$rname', '$remail', '$rpassword')";
        if($conn->query($sql) == TRUE)
      {
          $regmsg = '<div class="alert alert-success mt-2" role="alert">Account Succefully Created</div>';
      }else
      {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
      }
      }
    }
}
?>
<!--------------Start Registraion Form--------------->
        
        <div class="container pt-5" id="Registration">
        <h2 class="text-center">Create an Account</h2>
            <div class="row mt-4 mb-4">
             <div class="col-md-6 offset-md-3">
                <form action="" class="shadow-lg p-4" method="post">
                    <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="rname">
                    </div>
                 
                 
                 
                    <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="remail">
                        <small>We'all never share your email with anyone else.</small>
                    </div>
                    
                 
                 
                 
                    <div class="form-group">
                    <i class="fas fa-user"></i><label for="pass" class="font-weight-bold pl-2">New-Password</label>
                        <input type="password" class="form-control" placeholder="password" name="rpassword">
                    </div>
                    
                    <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rsign-up">Sign-up</button>
                    <em style="font-size:10px">Note - By clicking sign-up, you agree to our terms, data policy and cookie policy</em>
                    <?php if(isset($regmsg)){echo $regmsg;}?>

                 </form>
                 
                </div>
            </div>
        </div><!--------------End Registraion Form container--------------->