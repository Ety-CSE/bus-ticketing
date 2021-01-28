
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
      <h2 class="content-title"> <?php echo empty($faq->id) ? 'Add a <i class="la la-cart-plus  la-2x">  </i> New FAQ' : 'Edit FAQ: <i class="la la-certificate  la-2x">  </i> '. $faq->question; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>         
          
          <div class="form-group row">
            <label for="question" class="col-sm-2 col-form-label">Question</label>
            <div class="col-sm-10">
              <?php
            
                  echo form_input('question',$faq->question,' class="form-control"  required="required" id="question" ');
               
              ?>
            </div>
          </div>
         
          <div class="form-group row">
            <label for="answer" class="col-sm-2 col-form-label">Answer</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'answer','value'=>set_value('answer', $faq->answer),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 

          <div class="form-group row">
            <label for="list_order" class="col-sm-2 col-form-label">Order</label>
            <div class="col-sm-10">
              <?php
            
                  echo form_input('list_order',$faq->list_order,' class="form-control"  required="required" id="list_order" ');
               
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$faq->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="faq Sub-faq" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($faq->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

