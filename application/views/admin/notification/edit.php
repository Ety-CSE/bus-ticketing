
<!-- css -->
<style>
  .btn-remove{
     z-index: 1000;
    height: 25px;
    width: 25px;
    margin-left: -25px;
  }
  .pro{
    margin-top: 15px;
  }
  .btn-hover{
    cursor: pointer;
  }
</style>
<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($notification->id) ? 'Add a <i class="la la-bell  la-2x">  </i> New Notification' : 'Edit Notification <i class="la la-bell  la-2x">  </i> '.$notification->notification; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">User Id</label>
    	      <div class="col-sm-10">
    		      <?php
              // if($notification->id):
                 
                //   else:                   
                  
                  echo form_dropdown('user_id', $this->notification_m->get_customer_dw(),$notification->user_id,' class="form-control" onchange="setCustomer()"  required="required" id="user_id" ');
                  // endif;
                  ?>
    	      </div>
    	    </div>
          
          <div class="form-group row">
            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
             <?php
                  echo form_input('sub', set_value('sub', $notification->sub), 'class="form-control" placeholder="Subject" id="subject" ');
                  // echo form_textarea( array('name'=>'sub','value'=>set_value('sub', $notification->sub),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 
          
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Notification Body</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'body','value'=>set_value('body', $notification->body),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 

         

          <!-- <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('customer_id', $this->notification_m->get_customer_dw(),$notification->customer_id,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="customer_id"' );
              ?>
            </div>
          </div> -->

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Notification Type</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('type', array('Token', 'Order', 'Order Complete', 'Review'),$notification->type,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="notification Sub-notification" id="type"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Seen'),$notification->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="notification Sub-notification" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($notification->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

