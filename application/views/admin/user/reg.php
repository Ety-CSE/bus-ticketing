<br><br>
<br><br>
<br><br>
<div class="card text-center">
  <div class="card-header">
    <h4 class="card-title"><i class="la la-unlock-alt "> </i> Registration</h4>
  </div>
  <div class="card-block">
    <!-- <img src="<?php echo site_url('images/logo.png'); ?>" height="30px;" style="margin-top: 20px;"> -->
    <p class="card-text" style="padding: 10px 0">Please  Register Using Your Info</p>
    <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
      
    <div class="container">
    <?php //echo "hi"; ?>
    <?php echo form_open(); ?>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <?php
              echo form_input('name', set_value('name', $user->name), 'class="form-control" placeholder="Name" id="name"');
          ?>
        </div>
      </div>  
	    <div class="form-group row">
	      <label for="email" class="col-sm-2 col-form-label">Email</label>
	      <div class="col-sm-10">
		      <?php
            	 echo form_input('email', set_value('email', $user->email), 'class="form-control" placeholder="Email" id="email"');
		      ?>
	      </div>
	    </div>
      <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
          <?php
              echo form_input('phone', set_value('phone', $user->phone), 'class="form-control" placeholder="Phone" id="phone"');
          ?>
        </div>
      </div>
	    <div class="form-group row">
	      <label for="passwpord" class="col-sm-2 col-form-label">Password</label>
	      <div class="col-sm-10">
          <?php
         	  echo form_password('password', '', 'class="form-control" placeholder="Password" id="passwpord"');
           ?>
	      </div>
	    </div>
      <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <?php
                  echo form_password('password_confirm', '', 'class="form-control" placeholder="Confirm Password" id="password_confirm"');
                 ?>
              </div>
            </div>
      <hr>
	    <div class="form-group row">
        <div class="col-6">
              <a href="<?php echo site_url('admin/user/login') ?>" class="pull-right">Login to your Account</a>
          
        </div>
	      <div class="col-6">
          <?php echo form_submit('submit', 'Registration', 'class="btn btn-outline-warning pull-right"') ?>
	      </div>
	    </div>
	  <?php form_close(); ?>
	</div>
  </div>
  <div class="card-footer text-muted">
    &copy; Aurora Technologies
  </div>
</div>




