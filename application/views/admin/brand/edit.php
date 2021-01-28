<div class="container">
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($brand->id) ? 'Add a <i class="la la-heart la-2x">  </i> New Brand' : 'Edit brand <i class="la la-heart la-2x">  </i> '.$brand->name; ?>
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
              <label for="inputEmail3" class="col-sm-2 col-form-label">Brand Name</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('title', set_value('title', $brand->title), 'class="form-control" placeholder="Brand title" id="name"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-2 col-form-label">Details</label>
              <div class="col-sm-10">
                    <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
                <?php
                    echo form_textarea( array('name'=>'details','value'=>set_value('details', $brand->details),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('country', set_value('country', $brand->country), 'class="form-control" placeholder="Brand country" id="name"');
                ?>
              </div>
            </div>


            <!-- logo upload -->
            <div class="form-group row">
            <label for="logo" class="col-form-label col-sm-2">Logo</label>
              <div class='col-sm-6'>
                <div class="img-preview"><img height="" src="<?php echo $logo = ($brand->logo) ? site_url('upload/'.$brand->logo) : site_url('img/brand.svg') ; ?>" id="preview" class="img img-fluid"></div>
              
                <input type="hidden" id="img_logo" name="logo" value="<?php echo $brand->logo ?>">
                <br>
                <button id="logo" onclick="openUploadModal('logo')" data-field="logo" data-preview="preview" type="button"  class="btn btn-outline-info logo"><i class="fab fa-vaadin fa-fw"></i>  Change Logo</button>
              </div>
            </div>
            <!-- photo upload -->

            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$brand->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="brand Sub-brand" id="status"' );
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
              <?php echo empty($brand->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/brand') ?>" class="btn btn-secondary">Cancel</a>
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


<?php $this->load->view('admin/common/_upload-modal');?>


