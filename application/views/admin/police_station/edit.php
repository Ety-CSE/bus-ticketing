
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
      <h2 class="content-title"> <?php echo empty($police_station->id) ? 'Add a <i class="la la-bell  la-2x">  </i> New Police Station ' : 'Edit Police Station <i class="la la-bell  la-2x">  </i> '.$police_station->police_station; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Division</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('division', $this->police_station_m->division_dw(),$police_station->division,'aria-describedby="division" class="form-control"  required="required" placeholder="" id="division"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">District</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('district', $this->police_station_m->district_dw($police_station->division),$police_station->district,'aria-describedby="district" class="form-control"  required="required" placeholder="" id="district"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Police Station</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('name', set_value('name', $police_station->name), 'class="form-control" placeholder="Name" id="name"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">থানা</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('bd_name', set_value('bd_name', $police_station->bd_name), 'class="form-control" placeholder="থানা" id="name"');
              ?>
            </div>
          </div>
         

          
          
          <hr>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <?php echo empty($police_station->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
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
    // alert('division Changed')
  });

</script>
