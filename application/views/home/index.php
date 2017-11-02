<div class="container">
    <form method="post" action="<?php echo base_url().'home/index/'.$eid; ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo set_value('email'); ?>">
            <?php if(!empty($email_error)) { echo $email_error;  } ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" name="password" id="password" class="form-control"  value="<?php echo set_value('password'); ?>">
            <?php if(!empty($password_error)) { echo $password_error;  } ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>