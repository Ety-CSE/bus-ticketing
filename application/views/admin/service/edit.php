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
              <?php echo empty($service->id) ? 'Add a <i class="la la-clipboard la-2x">  </i> New Service' : 'Edit Service <i class="la la-clipboard la-2x">  </i> '.$service->s_name; ?>
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
              <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('amount', set_value('amount', $service->amount), 'class="form-control" placeholder="500 BDT" id="amount"');
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
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Seller</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('seller_id', $this->service_m->get_supplier_dw(),$service->seller_id,'aria-describedby="sub-cat" class="form-control" placeholder="service Sub-service" id="seller_id"' );
                ?>
              </div>
            </div>            

            <?php //dump($service->photo); ?>
          <!-- photo upload -->
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
              <div class='col-sm-10'>
                <div class="row" id="img-preview">
                  <?php 
                    if ($service->s_photo) {
                       $img = array_filter(explode(',', $service->s_photo));
                       
                       $output = '';
                       foreach ($img as $img) {
                        $output .= '<div class="col-4">';
                        $output .= '<i class="la la-times-circle-o remove" onclick="remove('.$img.')"> </i>';
                        $output .= '<img id="'.$img.'" src="'.site_url("upload").'/'.$this->service_m->media_by_id($img).'" class="img img-fluid">';
                        $output .= '</div>';

                       }
                        echo $output;
                     } else {
                          echo '<img id="'.$img.'" src="'.site_url("images/").'services.jpg" class="img img-fluid">';
                     }
                   ?>
                </div>
              </div>
              <div class='col-sm-2'></div>
              <div class='col-sm-10'>
                <input type="hidden" id="img_s_photo" name="s_photo" value="<?php echo $service->s_photo ?>">
                <br>
                <button id="profile" onclick="openUploadModal('profile')" data-field="s_photo"  data-drive="category" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
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
        
      </div> <!-- kt-portlet -->

    </div> <!-- col-lg-6 -->
  </div> <!-- row -->
</div> <!-- container -->






<!-- UPLOAD MODAL -->

  <!-- Modal -->
  <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" id="uploadModal" aria-labelledby="myModalLabel">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link " id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="true">
                <h4 class="modal-title" id="myModalLabel">
                  <i class="la la-upload"></i>Upload
                </h4>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="mediaLibrary-tab" data-toggle="tab" href="#mediaLibrary" role="tab" aria-controls="mediaLibrary" aria-selected="false">
                <h4 class="modal-title" id="myModalLabel">
                  <i class="la la-photo"></i>Media Library
                </h4>
              </a>
            </li>
          </ul>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
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
                          <input type="submit" value="Upload" class="btn btn-outline-success pull-right" id="upload_button">
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

            <div class="tab-pane fade show active" id="mediaLibrary" role="tabpanel" aria-labelledby="mediaLibrary-tab">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-4">
                    <form action="" class="form">
                      <input type="text" name="search-media" class="form-control search-media" placeholder="Search Media Here">
                    </form>
                  </div>
                  <div class="col-3">
                    <select name="" class="form-control" id="">
                      <option value="">Product</option>
                      <option value="">Category</option>
                      <option value="">Services</option>
                      <option value="">Profile</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <select name="" class="form-control" id="">
                      <option value="">Media Type</option>
                      <option value="">Images</option>
                      <option value="">Videos</option>
                    </select>
                  </div>
                  <div class="col-2">
                    <!-- <button class="btn btn-outline-danger pull-right">Delete</button> &nbsp; -->
                    <button class="btn btn-outline-success btn-block pull-right" id="use_media">Use</button>
                  </div>
                </div>                
                <hr>
                <div class="row media">
                  <!-- <div class="col-lg-2 col-md-2 col-sm-3 col-4 form-check checkbox ">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">
                      <img src="<?php echo site_url('upload/5b6a32098c06b3.943483791533686281.png') ?>" height="100"  class="img-fluid form-check-label" alt="">
                      <p>Image Name</p>
                    </label>
                  </div> -->

                </div> <!-- row -->
              </div>
            </div>

          </div> <!-- tabContent -->

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

     <script type="text/javascript">
        // $(document).ready(function(){
            

            function openUploadModal(id){
              var button = $('#'+id);
              var upInfo =  $('#upload-info');
              var up = button.data("field");
              var view = button.data("preview");
              var drive = button.data("drive");
              var url = "<?php echo site_url('admin/media/all_media'); ?>";

                upInfo.attr('data-info', up);
                upInfo.attr('data-view', view);
                // upload Dir
                upInfo.attr('data-drive', drive);


                // Get Media for library;
                $.get( url , function( data ) {
                  $( ".media" ).html( data );
                });

                // Open Modal
                $('#photoUploader').modal('show');

            }

            // process img to save
            var img = $('#img-preview').find('img');
            var ids = new Array();
            img.each(function(){
              ids.push($(this).attr('id'));
            });

            $('#img_s_photo').val(ids);


            // Remove photo
            $('.remove').click(function(){

                // get photo id
                var id = $(this).siblings('.img').attr('id');

                // remove photo
                $(this).parent('.col-4').remove();

                // process img to save
                var img = $('#img-preview').find('img');
                var ids = new Array();
                img.each(function(){
                  ids.push($(this).attr('id'));
                });

                $('#img_s_photo').val(ids);

              });


            // Use Media form Media library

            $('#use_media').click(function(){
              var select = $('.media').find('input:checked');

              // set photo data
              var ids = new Array();
              select.each(function(){
                id = $(this).attr('id');
                ids.push(id);

                var url = '<?php echo site_url('admin/media/ajax_media_by_id/') ?>'+id;

                // AJAX for image file name
                $.get( url, function( data ) {
                  $('#img-preview').append('<div class="col-4"><i class="la la-times-circle-o remove"> </i><img id="'+id+'" src="<?php echo site_url('upload/') ?>'+data+'" class="img img-fluid"></div>') ;
                });


              });



              var img = $('#img-preview').find('img');
              img.each(function(){
                ids.push($(this).attr('id'));
              });
              $('#img_s_photo').val(ids);


              console.log(ids);
            });

        // });
     </script>





