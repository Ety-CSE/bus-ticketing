<div class="container loginWrapper">
    <div class="row h-100">
        <div class="col-md-4 offset-md-1 col-10 offset-1">
            <img src="<?php echo site_url('img/login.svg');?>" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 offset-md-1 col-12 formWrapper my-auto">          
          <h3 class="title">Sign in</h3>
          <p>
          <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
          <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
          </p>
          <?php echo form_open(); ?>
            <div class="form-group">
                <label class="sr-only" for="email">email</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-user fa-fw"> </i></div>
                  </div>
                  <?php
                      echo form_input('email', '', 'class="form-control" placeholder="email / phone" id="email"');
                  ?>
                  <!-- <input type="email" class="form-control" id="email" placeholder="email / phone"> -->
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="password">password</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-shield-alt fa-fw"> </i></div>
                    </div>
                    <?php
                      echo form_password('password', '', 'class="form-control" placeholder="Password" id="passwpord"');
                    ?>
                    <!-- <input type="password" class="form-control" id="password" placeholder="password"> -->
                </div>
            </div>
            <div class="row h-100">
                <div class="col-6 my-auto">
                    <a href="<?php echo site_url('admin/user/forgot_password'); ?>" id="forgotPass">Forgot Password?</a>
                </div>
                <div class="col-6">
                <?php echo form_submit('submit', 'Sign in', 'class="btn btn-success btn-block  pull-right"') ?>

                    <!-- <button type="submit" class="btn btn-success btn-block float-right">Sign in</button> -->
                </div>
            </div>
            <?php form_close(); ?>
          
          <br>
          <hr>
          <h3 class="text-center hr-mid"><span>or</span></h3>
          <div class="row">
            <div class="col-12">
                <br>
                <a href="<?php echo site_url('admin/user/with_email'); ?>" class="btn btn-success btn-block createAccount" >Create an Account</a>
                <!-- <button type="submit" class="btn btn-primary btn-block" id="signFacebook"><i class="fab fa-facebook-f fa-fw"></i> Sign in with Facebook</button>
                <button type="submit" class="btn btn-danger btn-block" id="signGoogle"><i class="fab fa-google fa-fw"></i> Sign in with Google</button>   -->
            </div>
          </div>  
        </div> 
    </div>
</div>

