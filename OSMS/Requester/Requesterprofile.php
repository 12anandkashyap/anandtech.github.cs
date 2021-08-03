                                                       
<html>
 <head>
    <title>
      Profile
    </title>
     <!------------Bootstrap CSS------------------------>
     <link rel="stylesheet" href="../CSS/bootstrap.min.css">
     <!------------font Awesome CSS--------------------->
     <link rel="stylesheet" href="../CSS/all.min.css">
     <!------------google font--------------------->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
     <!------------Custom CSS--------------------->
     <link rel="stylesheet" href="../CSS/Custom.css">
     
     
     <style>
         .hoverr:hover{
             background-color:orangered;
             color: white;
         }
     
     
     </style>
     
     
    </head>
    <body>
        <!------Top navbar------>
        <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap shadow"><a href="Requesterprofile.php" class="navbar-brand col-sm-3 mr-0">OSMS</a></nav>
        <!------End-Top navbar------>
        
        <!------Start Side-bar------>
        <div class="container-fluid" style="margin-top:40px;"><!-------Start-Container------>
        <div class="row"><!--------Start-row---------------->
            <nav class="col-sm-2 bg-light sidebar py-5"><!------Start Side-bar------>
                <div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link hoverr" href="Requesterprofile.php">
                            <i class="fas fa-user"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverr"  href="Submitrequest.php"> 
                            <i class="fab fa-accessible-icon"></i>Submit request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverr" href="servicestatus.php">
                            <i class="fas fa-align-center"></i>Service status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverr" href="changepassword.php">
                            <i class="fas fa-key"></i>Change Password</a>
                    </li>
                    <li class="nav-item hoverr">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-out-alt"></i>Log-Out</a>
                    </li>
                </ul>
                </div>
            </nav><!--------------End-Side-bar----------------->
            <div class="col-sm-6 mt-" style="background-color:orange; margin-top:48px;"><!-------------Start-ProfileArea------------>
            <form action="" method="post">
                <div class="form-group">
                <label for="rEmail">Email</label><input type="email" 
                class="form-control" name="rEmail" id="rEmail">
                </div>
                <div class="form-group">
                <label for="rName">Name</label><input type="text" 
                class="form-control "name="rName" id="rName">
                </div>
                <button type="submit" class="btn btn-success" name="nameupdate">Update</button>
            
                
            </form>
            
            </div>
            
            
        </div><!--------End-row---------------->
        </div><!-------End-Container-------->
        
        
        
        <!------------javascript----->
        <script src="../JavaScript/jquery.min.js"></script>
        <script src="../JavaScript/popper.min.js"></script>
        <script src="../JavaScript/bootstrap.min.js"></script>
        <script src="../JavaScript/all.min.js"></script>
    </body>
</html>
