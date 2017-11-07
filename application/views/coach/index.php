Skip to content
  Switch to mobile version
This repository
Search
Pull requests
Issues
Marketplace
Explore
 @arunk2
 Sign out
 Unwatch 1
  Star 0  Fork 0 arunk2/TournamentManager
 Code  Issues 6  Pull requests 0  Projects 0  Wiki  Insights  Settings
Branch: master Find file Copy pathTournamentManager/application/views/club/index.php
50a5c5e  4 days ago
@arunk2 arunk2 Ref #3: Added controller and view files
1 contributor
RawBlameHistory    
51 lines (50 sloc)  3.17 KB
<div class="container">
    <form method="post" action="<?php echo base_url().'club/index/'.$eid; ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Club Name</label>
            <input type="name" name="name" id="name" class="form-control" placeholder="Club Name" value="<?php echo set_value('name'); ?>">
            <?php if(!empty($name_error)) { echo $name_error;  } ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Abbreviation</label>
            <input type="abbv" name="abbv" id="abbv" class="form-control" placeholder="Abbreviation" value="<?php echo set_value('abbv'); ?>">
            <?php if(!empty($abbv_error)) { echo $abbv_error;  } ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address Line 1</label>
            <input type="addr_line_1" name="addr_line_1" id="addr_line_1" class="form-control" placeholder="Address Line 1" value="<?php echo set_value('addr_line_1'); ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address Line 2</label>
            <input type="addr_line_2" name="addr_line_2" id="addr_line_2" class="form-control" placeholder="Address Line 2" value="<?php echo set_value('addr_line_2'); ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="city" name="city" id="city" class="form-control" placeholder="City" value="<?php echo set_value('city'); ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">PIN CODE</label>
            <input type="pincode" name="pincode" id="pincode" class="form-control" placeholder="PIN CODE" value="<?php echo set_value('pincode'); ?>">
            <?php if(!empty($pincode_error)) { echo $pincode_error;  } ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">State</label>
            <input type="state" name="state" id="state" class="form-control" placeholder="State" value="<?php echo set_value('state'); ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Country</label>
            <input type="country" name="country" id="country" class="form-control" placeholder="Country" value="<?php echo set_value('country'); ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contact Person</label>
            <input type="contactPerson" name="contactPerson" id="contactPerson" class="form-control" placeholder="Contact Person" value="<?php echo set_value('contactPerson'); ?>">
            <?php if(!empty($contactPerson_error)) { echo $contactPerson_error;  } ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="phoneNumber" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number" value="<?php echo set_value('phoneNumber'); ?>">
            <?php if(!empty($phoneNumber_error)) { echo $phoneNumber_error;  } ?>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About
