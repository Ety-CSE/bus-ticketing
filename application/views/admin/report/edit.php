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
      <h2 class="content-title"> <?php echo empty($report->id) ? 'Add a <i class="la la-cart-plus  la-2x">  </i> New report' : 'Edit report of <i class="far fa-exclamation-triangle  fa-2x">  </i> '. $this->report_m->rentacar_by_id($report->rentacar); ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
         
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Rent a Car</label>
            <div class="col-sm-10">
              <?php            
                  echo form_dropdown('rentacar', $this->report_m->rentacar_dw(),$report->rentacar,' class="form-control"  required="required" id="rentacar" ');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
              <?php
            
                  echo form_dropdown('customer', $this->report_m->get_customer_dw(),$report->customer,' class="form-control"  required="required" id="customer" ');
               
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">             
              <?php
                  echo form_dropdown('type', array('0'=>'Bad Car','1'=>'Lost Propetry','2'=>'Bad Service','4'=>'Cheatting'),$report->type,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="type"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Report Description</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'report','value'=>set_value('report', $report->report),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Actions</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('actions', array('0'=>'suspent','1'=>'warning','2'=>'Panlty','4'=>'Block'),$report->actions,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="actions"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$report->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="report Sub-report" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($report->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

