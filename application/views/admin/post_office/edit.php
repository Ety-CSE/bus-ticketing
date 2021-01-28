
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
      <h2 class="content-title"> <?php echo empty($post_office->id) ? 'Add a <i class="la la-bell  la-2x">  </i> New Post Office ' : 'Edit Post Office <i class="la la-bell  la-2x">  </i> '.$post_office->post_office; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
        

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Division</label>
            <div class="col-sm-10">             
              <?php
                  echo form_dropdown('division', $this->post_office_m->division_dw(),$post_office->division,'aria-describedby="division" class="form-control"  required="required" placeholder="" id="division"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">District</label>
            <div class="col-sm-10">             
              <?php
                  echo form_dropdown('district', $this->post_office_m->district_dw($post_office->division),$post_office->district,'aria-describedby="district" class="form-control"  required="required" placeholder="" id="district"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Police Station</label>
            <div class="col-sm-10">             
              <?php
                  echo form_dropdown('police_station', $this->post_office_m->police_station_dw($post_office->district),$post_office->police_station,'aria-describedby="police_station" class="form-control"  required="required" placeholder="" id="police_station"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Post Office</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('name', set_value('name', $post_office->name), 'class="form-control" placeholder="Name" id="name"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ডাক</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('bd_name', set_value('bd_name', $post_office->bd_name), 'class="form-control" placeholder="ডাক ঘর" id="name"');
              ?>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('zip', set_value('zip', $post_office->zip), 'class="form-control" placeholder="Zip Code" id="zip"');
              ?>
            </div>
          </div>
         

          
          
          <hr>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <?php echo empty($post_office->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
            </div>
          </div>

       <?php form_close(); ?>
    </div>
  </div>
</div>


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

  // police_station
</script>
