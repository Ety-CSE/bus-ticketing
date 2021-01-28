<div class="container">
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($category->id) ? 'Add a <i class="la la-cube la-2x">  </i> New category' : 'Edit category <i class="la la-cube la-2x">  </i> '.$category->title; ?>
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
              <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('title', set_value('title', $category->title), 'class="form-control" placeholder="Category Name" id="name"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
              <div class="col-sm-10">
                    <!-- <textarea name="details" id="" class="form-control" rows="3"></textarea>     -->
                <?php
                    echo form_textarea( array('name'=>'details','value'=>set_value('details', $category->details),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

                ?>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$category->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="Category Sub-Category" id="status"' );
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
              <?php echo empty($category->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/category') ?>" class="btn btn-secondary">Cancel</a>
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





<!-- UPLOAD MODAL -->

 




