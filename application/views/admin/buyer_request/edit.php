
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
      <h2 class="content-title"> <?php echo empty($buyer_request->id) ? 'Add a <i class="far fa-fw fa-user-check">  </i> New Buyer Request' : 'Edit buyer_request <i class="far fa-fw fa-user-check">  </i> '.$buyer_request->buyer_request; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
        <?php 
            // $this->buyer_request_m->new_buyer_request_id();
        ?>
          
          <div class="form-group row">
            <label for="request_id" class="col-sm-2 col-form-label">Req. ID</label>
            <div class="col-sm-10">
              <input type="text" name="request_id" value="<?php echo ($buyer_request->request_id != '')?$buyer_request->request_id:$this->buyer_request_m->new_buyer_request_id();?>" id="request_id" class="form-control" readonly>
            </div>
          </div> 
          
          <div class="form-group row">
    	      <label for="customer" class="col-sm-2 col-form-label">Customer</label>
    	      <div class="col-sm-10">
    		      <?php   
                echo form_dropdown('customer', $this->buyer_request_m->get_customer_dw(),$buyer_request->customer,' class="form-control" onchange="setCustomer()"  required="required" id="customer" ');
                ?>
    	      </div>
    	    </div>

          
          <div class="form-group row">
            <label for="details" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'details','value'=>set_value('details', $buyer_request->details),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 

          

          <div class="form-group row">
            <label for="car" class="col-sm-2 col-form-label">Car</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('car', $this->buyer_request_m->car_dw(),$buyer_request->car,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="car"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-4">
             
              <?php
                  echo form_dropdown('type', array('hourly'=>'Hourly', 'daily'=>'Daily', 'monthly'=>'Monthly', 'custom'=>'Custom'),$buyer_request->type,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="buyer_request Sub-buyer_request" id="type"' );
              ?>
            </div>
            <label for="pass" class="col-sm-2 col-form-label">Passanger</label>
            <div class="col-sm-4">
             
              <?php
                  echo form_dropdown('pass', array('1','2','3','4','5','6','7','8','9','10'),$buyer_request->pass,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="buyer_request Sub-buyer_request" id="pass"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Pickup Info</label>
            <div class="col-sm-10">
              <div class="row">
                  <div class="col-sm-6">
                  <?php
                    $pickup = unserialize($buyer_request->pickup_info);
                    echo form_input('pickup_add', set_value('request_id', $pickup['pickup_add']),'class="form-control address_picker" id="pickup_add" placeholder="Pickup Address"');
                  ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="p_date" value="<?php echo isset($pickup['p_date']) ? set_value('p_date', $pickup['p_date']) : set_value('p_date'); ?>">
                  </div>
              </div>
              
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Destination</label>
            <div class="col-sm-10">
              
                  <?php
                    echo form_input('destination', set_value('destination', $buyer_request->destination),'class="form-control" id="destination" placeholder="Destination"');
                  ?>
                 
              
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Seen'),$buyer_request->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="buyer_request Sub-buyer_request" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($buyer_request->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>


<?php   $this->load->view('admin/common/_address-modal', $data ) ?>
