<div class="container">
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="sellerv_title text-left">
              <?php echo empty($user->id) ? 'Add a <i class="la la-user-plus la-2x">  </i> New User' : 'Edit User <i class="la la-user-plus la-2x">  </i> '.$user->name; ?>
            </h3>
          </div>
        </div>
        <!--begin::Form-->
        <?php echo form_open('', 'class="kt-form kt-form--label-right"'); ?>
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-brand"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('name', set_value('name', $user->name), 'class="form-control" placeholder="Name" id="name"');
                ?>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('email', set_value('email', $user->email), 'class="form-control" placeholder="Email" id="email"');
                ?>
              </div>
            </div><div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('phone', set_value('phone', $user->phone), 'class="form-control" placeholder="Phone" id="Phone"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
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
              <input type="hidden" name="type" value="4">            
            <!-- <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
              <div class="col-sm-10"> 
                <?php
                    echo form_dropdown('type', array('0'=>'Please Select', '1'=>'Admin','2'=>'Services Provider', '3'=>'Client', '4'=>'Office Stuff'),$user->type,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="type"' );
                ?>
              </div>
            </div> -->
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">             
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$user->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="status"' );
                ?>
              </div>
            </div>



          </div> <!-- portlet__body -->

          <div class="kt-portlet__foot">
          <div class="kt-form__actions">
            <div class="row">
              <div class="col-2">
              </div>
              <div class="col-10">
                <?php echo empty($user->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning "');?>
                <a href="<?php echo site_url('admin/user') ?>" class="btn btn-secondary">Cancel</a>
              </div>
            </div>
          </div>
        </div>
       <?php form_close(); ?>
        <!--end::Form-->
        
      </div> <!-- kt-portlet -->

    </div> <!-- col-lg-6 -->
  </div> <!-- row -->
</div> <!-- container -->




