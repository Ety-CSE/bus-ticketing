<?php echo form_open('', 'class="kt-form kt-form--label-right"'); ?>
<div class="container">
  <div class="row">
    
    <div class="col-lg-7">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-name">
              <?php echo empty($rentacar->id) ? 'Add a <i class="fa fa-car fa-2x">  </i> New Rentacar' : 'Edit rentacar <i class="fa fa-car fa-2x">  </i> '.$rentacar->title; ?>
            </h3>
          </div>
        </div>
        <!--begin::Form-->
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-brand"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('name', set_value('name', $rentacar->name), 'class="form-control" placeholder="RentAcar Name" id="name"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Owner</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('user_id', $this->rentacar_m->get_owner_dw(),$rentacar->user_id,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="rentacar Sub-rentacar" id="user_id"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">About</label>
              <div class="col-sm-10">
                <?php
                    echo form_textarea( array('name'=>'about','value'=>set_value('about', $rentacar->about),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

                ?>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">             
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="phone-addon1">+880</span>
                    </div>
                    <?php
                        echo form_input('phone', set_value('phone', $rentacar->phone), 'class="form-control" placeholder="1XX XXX XXXX" id="phone" aria-label="phone" aria-describedby="phoneC"');
                    ?>
                  </div>
              </div>
            </div>  

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('country', set_value('country', $rentacar->country), 'class="form-control" placeholder="Bangladesh" id="country" aria-label="phone" aria-describedby="phoneC"');
                ?>
              </div>
            </div>            
            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-5">               
                <?php
                    echo form_dropdown('division', $this->rentacar_m->division_dw(),$rentacar->division,'aria-describedby="division" class="form-control"  required="required" placeholder="" id="division"' );
                ?>
                <small id="division" class="form-text text-muted">Division</small>
              </div>
              <div class="col-sm-5">               
                <?php
                    echo form_dropdown('district', $this->rentacar_m->district_dw($rentacar->division),$rentacar->district,'aria-describedby="district" class="form-control"  required="required" placeholder="" id="district"' );
                ?>
                <small id="district" class="form-text text-muted">District</small>
              </div>
            <div class="col-sm-2">
              
            </div>
              <div class="col-sm-4">               
              <?php
                  echo form_dropdown('police_station', $this->rentacar_m->police_station_dw($rentacar->district),$rentacar->police_station,'aria-describedby="police_station" class="form-control"  required="required" placeholder="" id="police_station"' );
              ?>
                <small id="district" class="form-text text-muted">Police Station</small>
              </div>
              <div class="col-sm-4">               
              <?php
                  echo form_dropdown('post_office', $this->rentacar_m->post_office_dw($rentacar->police_station),$rentacar->post_office,'aria-describedby="post_office" class="form-control"  required="required" placeholder="" id="post_office"' );
              ?>
                <small id="district" class="form-text text-muted">Post Office</small>
              </div>
              <div class="col-sm-2">               
              
                <?php
                    echo form_input('zip', set_value('zip', $rentacar->zip), 'class="form-control" placeholder="zip" id="zip"');
                ?>
                <small id="district" class="form-text text-muted">Zip Code</small>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$rentacar->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="rentacar Sub-rentacar" id="status"' );
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
              <?php echo empty($rentacar->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/rentacar') ?>" class="btn btn-secondary">Cancel</a>
              </div>
            </div>
          </div>
        </div>
        <!--end::Form-->
        
      </div> <!-- kt-portlet -->

    </div> <!-- col-lg-6 -->
    <div class="col-lg-3 offset-lg-1">
      <br><br><br>
      

      <!-- logo  -->
      <label for="logo" class="col-form-label"><h4>Logo</h4></label>
      <div class="form-group row">
        <div class='col-sm-12'>
          <div class="img-preview"><img height="" src="<?php echo $logo = ($rentacar->logo !== "") ? site_url('upload/'.$rentacar->logo) : site_url('img/rentAcar.svg') ; ?>" id="preview" class="img img-fluid"></div>
        
          <input type="hidden" id="img_logo" name="logo" value="<?php echo $rentacar->logo ?>">
          <br>
          <button id="logo" onclick="openUploadModal('logo')" data-field="logo" data-preview="preview" type="button"  class="btn btn-outline-info logo"><i class="fab fa-vaadin fa-fw"></i>  Change Logo</button>
        </div>
      </div>
    <!-- logo -->
<hr>      
        <!-- c_photo  -->
        <label for="c_photo" class="col-form-label"><h4>Cover Photo</h4></label>
        <div class="form-group row">
          <div class='col-sm-12'>
          <?php //dump($rentacar->c_photo);?>
            <div class="img-c_preview"><img height="" src="<?php echo $c_photo = ($rentacar->c_photo !== "") ? site_url('upload/'.$rentacar->c_photo) : site_url('img/coverPhoto.jpg') ; ?>" id="c_preview" class="img img-fluid"></div>
          
            <input type="hidden" id="img_c_photo" name="c_photo" value="<?php echo $rentacar->c_photo ?>">
            <br>
            <button id="c_photo" onclick="openUploadModal('c_photo')" data-field="c_photo" data-preview="c_preview" type="button"  class="btn btn-outline-info c_photo"><i class="far fa-image fa-fw"></i>  Change Cover Photo</button>
          </div>
        </div>
      <!-- c_photo -->
      <br>

    </div>
  </div> <!-- row -->
</div> <!-- container -->
<?php form_close(); ?>

<?php $this->load->view('admin/common/_upload-modal');?>

<script>
  $('#division').change(function(){
    var id = $(this).val();
    var url = '<?php echo site_url('admin/division/district_dw/') ?>'+id;

      $.get( url, function( data ) {
        $( "#district" ).html( data );
      });     
  });

  $('#district').change(function(){
    var id = $(this).val();
    var url = '<?php echo site_url('admin/division/police_station_dw/') ?>'+id;

      $.get( url, function( data ) {
        $( "#police_station" ).html( data );
      });     
  });

  
  $('#police_station').change(function(){
    var id = $(this).val();
    var url = '<?php echo site_url('admin/division/post_office_dw/') ?>'+id;

      $.get( url, function( data ) {
        $( "#post_office" ).html( data );
      });     
  });

  $('#post_office').change(function(){
    var id = $(this).val();
    var url = '<?php echo site_url('admin/division/get_zip_by_po/') ?>'+id;

      $.get( url, function( data ) {
        $( "#zip" ).val( data );
      });     
  });


  // police_station



</script>


 




