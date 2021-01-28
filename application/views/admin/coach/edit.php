<div class="container">
  <div class="row">
    
    <div class="col-lg-2"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($coach->id) ? 'Add a <i class="la la-heart la-2x">  </i> New coach' : 'Edit coach <i class="la la-heart la-2x">  </i> '.$coach->name; ?>
            </h3>
          </div>
        </div>
        <!--begin::Form-->
        <?php echo form_open('', 'class="kt-form kt-form--label-right"'); ?>
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-coach"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Coach No</label>
              <div class="col-sm-9">
                <?php
                    echo form_input('no', set_value('no', $coach->no), 'class="form-control" placeholder="Coach No" id="no"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Bus</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('bus_id', $this->coach_m->get_bus_dw(),$coach->bus_id,'class="form-control lineAwsome"  id="bus_id"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Category</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('category', array('Economy', 'Business', 'VIP'),$coach->category,'class="form-control lineAwsome"  id="category"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Type</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('type', array('AC', 'NON-AC'),$coach->type,'class="form-control lineAwsome"  id="type"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Route No</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('route', $this->coach_m->get_route_dw(),$coach->route,'class="form-control lineAwsome"  id="route"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-3 col-form-label">Fare</label>
              <div class="col-sm-9 input-group">
                <?php
                    echo form_input('fare', set_value('fare', $coach->fare), 'class="form-control" placeholder="Fare" id="fare"');
                ?>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">TK</span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$coach->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="coach Sub-coach" id="status"' );
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
              <?php echo empty($coach->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/coach') ?>" class="btn btn-secondary">Cancel</a>
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


