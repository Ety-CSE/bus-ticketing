<div class="container loginWrapper">
    <div class="row h-100">
        <div class="col-md-4 offset-md-2 col-12">
            <img src="<?php echo site_url('img/ResetPassword.svg');?>" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 offset-md-2 col-12 formWrapper my-auto">          
            <h3 class="title">Reset Password</h3>
            <br>
            <form>
                <div class="form-group">
                    <label class="sr-only" for="password">password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-shield-alt fa-fw"> </i></div>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="password">Confirm password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-shield-alt fa-fw"> </i></div>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="confirm-password">
                    </div>
                </div>
                <div class="row h-100">
                    <div class="col-4 my-auto">
                        <a href="<?php echo site_url('admin/user/login');?>" id="forgotPass">Sign in</a>
                    </div>
                    <div class="col-8">
                        <button type="submit" class="btn btn-success btn-block float-right">Reset Password</button>
                    </div>
                </div>
            </form>
            
        </div> 
    </div>
</div>
