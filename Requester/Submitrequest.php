<?php
include('includes/header.php');
?>  


<div class="col-sm-9 col-md-10 mt-5"><!---------satrt services form second coloumn----->
<form class="mx-5"action="" method="post">
    <div class="form-group">
    <label for="inputrequestInfo">Request Info</label>
        <input type="text" class="form-control" id="inputrequestinfo" placeholder="Request Info" name="requestinfo">
    </div>
    
    <div class="form-group">
    <label for="inputrequestInfo">Description</label>
        <input type="text" class="form-control" id="inputdescription" placeholder="Description" name="Description">
    </div>
    
    <div class="form-group">
    <label for="inputrequestInfo">Name</label>
        <input type="text" class="form-control" id="inputname" placeholder="Name" name="Name">
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputrequestInfo">Address-line-1</label>
        <input type="text" class="form-control" id="inputaddress1" placeholder="Address-line-1" name="address1">
    </div>
        
        <div class="form-group col-md-6">
    <label for="inputrequestInfo">Address-line-2</label>
        <input type="text" class="form-control" id="inputaddress2" placeholder="Address-line-2" name="address2">
    </div>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputcity">City</label>
        <input type="text" class="form-control" id="inputcity" placeholder="CityName" name="city">
        </div>
        
        
        <div class="form-group col-md-4">
        <label for="inputcity">State</label>
        <input type="text" class="form-control" id="inputstate" placeholder="stateName" name="state">
        </div>
        
        <div class="form-group col-md-2">
        <label for="inputcity">pin-code</label>
        <input type="number" class="form-control" id="inputpincode" placeholder="pincode" name="pincode">
        </div>
        </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputcity">Email-id</label>
        <input type="email" class="form-control" id="inputemail" placeholder="email" name="email">
        </div>
        
        
        <div class="form-group col-md-2">
        <label for="inputcity">Mobile-No.</label>
        <input type="number" class="form-control" id="inputnumber" placeholder="Mobile-No." name="MobileNo">
        </div>
        
        <div class="form-group col-md-2">
        <label for="inputcity">Date</label>
        <input type="date" class="form-control" id="inputdate" name="date">
        </div>
    </div>
    
    <button type="submit" class="btn btn-success"
            name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    
</form>
</div><!---------satrt services form second coloumn----->





 <?php
include('includes/footer.php');
?>           
            
  