<div class="container loginWrapper">
    <div class="row h-100">
        <div class="col-md-4 offset-md-2 col-12">
            <img src="<?php echo site_url('img/emailLogin.svg');?>" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 offset-md-2 col-12 formWrapper my-auto">          
            <h3 class="title">Create Account with Email</h3>
            <br>
            <small>
                <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
                <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
            </small>
            <?php echo form_open(); ?>
                <div class="form-group">
                    <label class="sr-only" for="email">Name</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-user fa-fw"> </i></div>
                        </div>
                        <?php
                            echo form_input('name', '', 'class="form-control" placeholder="Name" id="name"');
                        ?>  
                        <!-- <input type="text" class="form-control" id="name" placeholder="Name"> -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="email">email</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope fa-fw"> </i></div>
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
                <div class="form-group">
                    <label class="sr-only" for="password">Re-password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-shield-alt fa-fw"> </i></div>
                        </div>
                        <?php
                            echo form_password('password_confirm', '', 'class="form-control" placeholder="confirm password" id="passwpord"');
                        ?>
                        <!-- <input type="password" class="form-control" id="password" placeholder="confirm-password"> -->
                    </div>
                </div>
                <div class="row h-100">
                    <div class="col-6 my-auto">
                        <a href="<?php echo site_url('admin/user/login');?>" id="forgotPass">Sign in</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success btn-block float-right">Create</button>
                    </div>
                </div>
            <?php form_close(); ?>

        </div> 
    </div>
</div>

