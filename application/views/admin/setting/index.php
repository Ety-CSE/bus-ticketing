

<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"><i class="kt-menu__link-icon flaticon-settings-1"></i> Genaral Setting</h2>
    </div>
    <div class="col-lg-3 col-1"></div>
    <div class="col-lg-6 col-10">

    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Site Title</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('site_title', set_value('text', $setting->site_title), 'class="form-control" placeholder="Site Title" id="site_title"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Logo</label>
            <div class="col-sm-10">
              <input type="file" name="logo" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Favicon</label>
            <div class="col-sm-10">
              <input type="file" name="favicon" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Organization</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('org', set_value('org', $setting->org), 'class="form-control" placeholder="Organization" id="org"');
              ?>
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <?php echo empty($setting->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
            </div>
          </div>
       <?php form_close(); ?>
    </div>
  </div>
</div>
