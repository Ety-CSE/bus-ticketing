<script>
      tinymce.init({
        selector: '#content',
        plugins: "code",
        toolbar: "code | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent" 
      });
    </script>
<div class="container">
  <div class="row">
    
    <div class="col-lg-2"></div>
    <div class="col-lg-7">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($page->id) ? 'Add a <i class="la la-cube la-2x">  </i> New page' : 'Edit page <i class="la la-cube la-2x">  </i> '.$page->title; ?>
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
              <label for="inputEmail3" class="col-sm-2 col-form-label">Page Title</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('title', set_value('title', $page->title), 'class="form-control" placeholder="Page Title" id="title"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('slug', set_value('slug', $page->slug), 'class="form-control" placeholder="Page slug" id="title"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Content</label>
              <div class="col-sm-10">
                    <!-- <textarea name="content" id="" class="form-control" rows="3"></textarea>     -->
                <?php
                    echo form_textarea( array('name'=>'content','value'=>set_value('content', $page->content),'rows'=> '5', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id' => 'content'));

                ?>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$page->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="page Sub-page" id="status"' );
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
              <?php echo empty($page->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/page') ?>" class="btn btn-secondary">Cancel</a>
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

 




