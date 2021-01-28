
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
      <h2 class="content-title"> <?php echo empty($review->id) ? 'Add a <i class="la la-cart-plus  la-2x">  </i> New review' : 'Edit review of <i class="la la-certificate  la-2x">  </i> '.$this->review_m->order_by_id($review->order_id) ; ?></h2>
      <!-- $this->review_m->review_by_id($review->id) -->
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
         
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Order</label>
            <div class="col-sm-10">
              <?php
            
                  echo form_dropdown('order_id', $this->review_m->order_dw(),$review->order_id,' class="form-control"  required="required" id="order_id" ');
               
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
              <?php
            
                  echo form_dropdown('customer', $this->review_m->get_customer_dw(),$review->customer,' class="form-control"  required="required" id="customer" ');
               
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Review</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('star', array('0'=>'1 star','1'=>'2 star','2'=>'3 star','3'=>'4 star','4'=>'5 star'),$review->star,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="star"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Review Description</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'review','value'=>set_value('review', $review->review),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 



          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$review->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="review Sub-review" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($review->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

