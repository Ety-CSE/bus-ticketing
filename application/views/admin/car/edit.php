<!-- TEXT EDITOR  -->
<script>
  tinymce.init({
    // selector: '#s_des'
  });
  </script>


<div class="container">
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head"> 
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($car->id) ? 'Add a <i class="la la-car la-2x">  </i> New car' : 'Edit car <i class="la la-car la-4x">  </i> '.$this->car_m->brand_by_id($car->brand).' - '.$car->model; ?>
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
              <label for="inputEmail3" class="col-sm-2 col-form-label">Model</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('model', set_value('model', $car->model), 'class="form-control" placeholder="Car Model" id="model"');
                ?>
              </div>
            </div>
           
           <div class="form-group row">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Brand</label>
             <div class="col-sm-10">
              
               <?php
                   echo form_dropdown('brand', $this->car_m->brand_dw(),$car->brand,'aria-describedby="brand" class="form-control" id="brand"' );
               ?>
             </div>
           </div>
           
           <div class="form-group row">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Categoty</label>
             <div class="col-sm-10">
              
               <?php
                   echo form_dropdown('category', $this->car_m->category_dw(),$car->category,'aria-describedby="category" class="form-control" id="category"' );
               ?>
             </div>
           </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Wheel</label>
              <div class="col-sm-10">
                <?php
                    echo form_dropdown('wheel', array('2'=>'2 wheel', '3'=>'3 wheel','4'=>'4 wheel'),$car->wheel,'aria-describedby="wheel" class="form-control" id="wheel"' );
                ?>
              </div>
            </div>

             <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Door</label>
              <div class="col-sm-10">
                <?php
                    echo form_dropdown('door', array('2'=>'2 door', '3'=>'3 door','4'=>'4 door','5'=>'5 door'),$car->door,'aria-describedby="door" class="form-control" id="door"' );
                ?>
              </div>
            </div>

           <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Seat</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('seat', set_value('seat', $car->seat), 'class="form-control" placeholder="Number of Seat" id="seat"');
                ?>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Passenger</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('pass', set_value('pass', $car->pass), 'class="form-control" placeholder="Number of pass" id="pass"');
                ?>
              </div>
            </div>

            <!-- car icon upload -->
            <div class="form-group row">
            <label for="icon" class="col-form-label col-sm-2">Icon</label>
              <div class='col-sm-6'>
                <div class="img-icon_preview"><img height="" src="<?php echo $icon = ($car->icon) ? site_url('upload/'.$car->icon) : site_url('img/car.svg') ; ?>" id="icon_preview" class="img img-fluid"></div>
              
                <input type="hidden" id="img_icon" name="icon" value="<?php echo $car->icon ?>">
                <br>
                <button id="icon" onclick="openUploadModal('icon')" data-field="icon" data-preview="icon_preview" type="button"  class="btn btn-outline-info icon"><i class="far fa-car fa-fw"></i>  Change Icon</button>
              </div>
            </div>
            <!-- car icon upload -->

            <!-- car photo upload -->
            <div class="form-group row">
            <label for="photo" class="col-form-label col-sm-2">Photo</label>
              <div class='col-sm-6'>
                <div class="img-preview"><img height="" src="<?php echo $photo = ($brand->photo) ? site_url('upload/'.$brand->photo) : site_url('img/car.svg') ; ?>" id="preview" class="img img-fluid"></div>
              
                <input type="hidden" id="img_photo" name="photo" value="<?php echo $brand->photo ?>">
                <br>
                <button id="photo" onclick="openUploadModal('photo')" data-field="photo" data-preview="preview" type="button"  class="btn btn-outline-info photo"><i class="fab fa-vaadin fa-fw"></i>  Change Photo</button>
              </div>
            </div>
            <!-- car photo upload -->

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$car->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="car Sub-car" id="status"' );
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
              <?php echo empty($car->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
                <?php //echo empty($user->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning "');?>
                <a href="<?php echo site_url('admin/car') ?>" class="btn btn-secondary">Cancel</a>
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
<br>
<br>






<?php $this->load->view('admin/common/_upload-modal');?>


