<div class="container">
  <div class="row">
    
    <div class="col-lg-2"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($route->id) ? 'Add a <i class="la la-heart la-2x">  </i> New route' : 'Edit route <i class="la la-heart la-2x">  </i> '.$route->name; ?>
            </h3>
          </div>
        </div>
        <!--begin::Form-->
        <?php echo form_open('', 'class="kt-form kt-form--label-right"'); ?>
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-route"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Route No</label>
              <div class="col-sm-9">
                <?php
                    echo form_input('route_no', set_value('route_no', $route->route_no), 'class="form-control" placeholder="Route No" id="route_no"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">TO</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('where_to', $this->route_m->district_dw(),$route->where_to,'class="form-control lineAwsome"  id="where_to"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">From</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('where_from', $this->route_m->district_dw(),$route->where_from,'class="form-control lineAwsome"  id="where_from"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Distance</label>
              <div class="col-sm-9 input-group">
                <?php
                    echo form_input('distance', set_value('distance', $route->distance), 'class="form-control" placeholder="Distance" id="distance"');
                ?>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Kilometters</span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Duration</label>
              <div class="col-sm-9 input-group">
                <?php
                    echo form_input('duration', set_value('duration', $route->duration), 'class="form-control" placeholder="Duration" id="duration"');
                ?>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Houre</span>
                </div>
              </div>
            </div>
            
            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$route->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="route Sub-route" id="status"' );
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
              <?php echo empty($route->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/route') ?>" class="btn btn-secondary">Cancel</a>
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


