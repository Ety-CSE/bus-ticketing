  <!-- Login Area -->
 <div class="container loginWrapper">
    <div class="row h-100">
        <div class="col-md-4 offset-md-2 col-12">
            <img src="<?php echo site_url('img/createAccount.svg');?>" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 offset-md-2 col-12 formWrapper my-auto">          
            <h3 class="title">Create Account</h3>
            <br>
            <a href="<?php echo site_url('admin/user/with_email');?>" type="submit" class="btn btn-danger btn-block" id="withEmail"><i class="far fa-envelope fa-fw"> </i> Create  with Email</a>
            <a href="<?php echo site_url('admin/user/with_phone');?>" type="submit" class="btn btn-success btn-block" id="withPhone"><i class="fa fa-phone fa-fw"> </i> Create with Phone</a>
            <br>
            Registred User <a href="<?php echo site_url('admin/user/login');?>" id="signIn">Sign in</a>
        </div> 
    </div>
</div>




