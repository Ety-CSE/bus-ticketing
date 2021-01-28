
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
      <h2 class="content-title"> <?php echo empty($district->id) ? 'Add a <i class="la la-bell  la-2x">  </i> New District' : 'Edit District <i class="la la-bell  la-2x">  </i> '.$district->district; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Division</label>
            <div class="col-sm-10">             
              <?php
                  echo form_dropdown('division', $this->district_m->division_dw(),$district->division,'aria-describedby="division" class="form-control"  required="required" placeholder="" id="division"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">District </label>
            <div class="col-sm-10">
              <?php
                  echo form_input('name', set_value('name', $district->name), 'class="form-control" placeholder="Name" id="name"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">জেলা</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('bd_name', set_value('bd_name', $district->bd_name), 'class="form-control" placeholder="জেলা নাম" id="bd_name"');
              ?>
            </div>
          </div>
         

          
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($district->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

