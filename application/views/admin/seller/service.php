<div class="row c_search" style="display: none;">
      <i id="s_close" class="la la-times la-2x"></i>
  <div class="container">
    <div class="row">
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
      <div class="content-header col-12 col-lg-8 col-md-8 col-sm-10">
          <h2 class="text-center hidden-xs-down">
            <span>FIND THE PERFECT</span> SERVICES  FOR YOU
       </h2>
          <form action="" method="GET">
            <input type="search" class="form-control c_search_input" data-action="<?php echo site_url('service/search_str');?>" id="s_search" placeholder="Search">
            <div class="search_sug"></div>
          </form>
          <p class="">Such as repair, plumbing, home shifting, car services, car rental & more ...</p>

        </div>
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
    </div>
  </div>
</div>


<div class="row w_app w_viewpage">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6 col-sm-6">
        <div class="col-auto">
          <label class="sr-only" for="search">Search</label>
          <div class="input-group mb-2 mt-2">
            <input type="search" class="form-control" id="search" placeholder="Search Services here ...">
          </div>
        </div>
      </div>
      <div class="content-header col-12 col-lg-6 col-md-6 col-sm-6">
         <h3 class="pull-right"> 
            <span>Call - imo | whatsApp</span> +880 1717440931
          </h3>
        </div>
    </div>
  </div>
</div>

<div class="container view" style="margin-top: 20px; min-height: 50px">
  <div class="row">
    <div class="col-12">
      <h3 class="servicev_title text-center"><i class="la la-shopping-cart"> </i> <?php echo empty($service->id) ? ' New Service' : 'Edit Service '.$service->s_name; ?></h3>


    </div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<!--begin::Form-->
        <?php echo form_open('', 'class="form"'); ?>
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-brand"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Servise Name</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('s_name', set_value('s_name', $service->s_name), 'class="form-control" placeholder="Service Name" id="name"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
              <div class="col-sm-10">
                    <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
                <?php
                    echo form_textarea( array('name'=>'s_des','value'=>set_value('s_des', $service->s_des),'rows'=> '5', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'s_des'));

                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Services Category</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('s_cat', $this->service_m->categories(),$service->s_cat,'aria-describedby="cat" class="form-control" placeholder="service Sub-service" id="s_cat"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Sub Category</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('s_sub_cat', $this->service_m->s_categories($service->s_cat),$service->s_sub_cat,'aria-describedby="sub-cat" class="form-control" placeholder="service Sub-service" id="s_sub_cat"' );
                ?>
              </div>
            </div>
            <input type="hidden" name="seller_id" value="<?php echo $this->session->userdata('id'); ?>">
           <!--  <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Seller</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('seller_id', $this->service_m->get_supplier_dw(),$service->seller_id,'aria-describedby="sub-cat" class="form-control" placeholder="service Sub-service" id="seller_id"' );
                ?>
              </div>
            </div> -->            

            <?php //dump($service->photo); ?>
          <!-- photo upload -->
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
              <div class='col-sm-10'>
                <div class="img-preview"><img height="242px" src="<?php echo $photo = ($service->s_photo != "") ? site_url('upload/'.$service->s_photo) : site_url('images/services.png') ;
                 ?>" id="preview" class="img img-responsive"></div>
              </div>
              <div class='col-sm-2'></div>
              <div class='col-sm-10'>
                <input type="hidden" id="img_s_photo" name="s_photo" value="<?php echo $service->s_photo ?>">
                <br>
                <button id="profile" onclick="openUploadModal('profile')" data-field="s_photo" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
              </div>
            </div>
            <!-- photo upload -->

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$service->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="service Sub-service" id="status"' );
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
              <?php echo empty($service->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
                <?php //echo empty($user->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning "');?>
                <a href="<?php echo site_url('admin/service') ?>" class="btn btn-secondary">Cancel</a>
              </div>
            </div>
          </div>
        </div>
       <?php form_close(); ?>
        <!--end::Form-->
        







		</div>
	</div>
</div>


<!-- UPLOAD MODAL -->

  <!-- Modal -->
  <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <!-- Upload Contant -->
          <div class="upload-console">
            <div class="upload-console-body">
              <form action="<?php site_url('admin/upload') ?>" method="post" class="row" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="form-group row">
                      <input type="file" class="col-sm-12" multiple="multiple" id="upload_file" name="files[]" >
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="submit" value="Upload" class="btn btn-outline-info" id="upload_button">
                  </div>
                </div>
              </form>
            </div>
            <span id="upload-info"></span>
            <!-- Drag and Drowp -->
            <div class="upload-console-drop" id="drop-zone">
              Just Drag and Drop <i style="color:#5bc0de" class="la la-download"> </i>  File Here
            </div>
            <div class="bar">
              <div class="bar-fill" id="bar-fill">
                <div class="bar-fill-text" id="bar-fill-text"> </div>
              </div>
            </div>
            <!--   -->
            <!-- class="hidden" -->
            <div id="upload-finished" class="hidden">
              <h5>Processed File</h5>
              <!-- <div class="upload-console-upload">
              <a href="#">FileName.jpg</a>
              <span>Success</span>
            </div> -->
          </div>
        </div>
        <!-- Upload Contant -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

     <script type="text/javascript">
        function openUploadModal(id){
          var button = $('#'+id);
          var upInfo =  $('#upload-info');

            var up = button.data("field");
            var view = button.data("preview");
            upInfo.attr('data-info', up);
            upInfo.attr('data-view', view);
            $('#photoUploader').modal('show');
            // console.log(up+' || '+view);
        }



        $('#s_cat').change(function(){
          var url = '<?php echo site_url('admin/seller/s_categories/'); ?>'+$(this).val();
          $.get( url, function( data ) {
          $( "#s_sub_cat" ).html( data );
        });  
        });
     </script>