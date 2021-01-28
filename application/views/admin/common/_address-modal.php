<!-- modal -->

<div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="addressLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <b class="modal-title" id="addressLabel">Address Locator</b>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <!-- Upload Contant -->
            <div class="upload-console">
              <div class="upload-console-body">
                <form action="<?php site_url('admin/upload') ?>" method="post" class="row" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-12">
                      
                    <div class="form-group row">
                      <div class="col-sm-6">               
                        <?php
                             echo form_dropdown('division', array('select Division'),'asfa','aria-describedby="division" class="form-control"  required="required" placeholder="" id="division"' );
                        ?>
                        <small id="division" class="form-text text-muted">Division</small>
                      </div>
                      <div class="col-sm-6">               
                        <?php
                            echo form_dropdown('district', array('select District'),$rentacar->district,'aria-describedby="district" class="form-control"  required="required" placeholder="" id="district"' );
                        ?>
                        <small id="district" class="form-text text-muted">District</small>
                      </div>
                      <div class="col-sm-5">               
                      <?php
                          echo form_dropdown('police_station', array('select Police Station'),$rentacar->police_station,'aria-describedby="police_station" class="form-control"  required="required" placeholder="" id="police_station"' );
                      ?>
                        <small id="district" class="form-text text-muted">Police Station</small>
                      </div>
                      <div class="col-sm-4">               
                      <?php
                          echo form_dropdown('post_office', array('select Post Office'),$rentacar->post_office,'aria-describedby="post_office" class="form-control"  required="required" placeholder="" id="post_office"' );
                      ?>
                        <small id="district" class="form-text text-muted">Post Office</small>
                      </div>
                      <div class="col-sm-3">               
                      
                        <?php
                            echo form_input('zip', set_value('zip', $rentacar->zip), 'class="form-control" placeholder="zip" id="zip"');
                        ?>
                        <small id="district" class="form-text text-muted">Zip Code</small>
                      </div>
                    </div>
                
                    </div>
                  </div>
                      
            </div>
          </div>
          <!-- Upload Contant -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id='done'>Done</button>
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- modal -->

  <script>
      // upload function
      $('.address_picker').click(function(){
          var field = $(this).attr('id');
          var division = $('#division');
          var district = $('#district');
          var police_station = $('#police_station');
          var post_office = $('#post_office');

          // division deafult
          var url = '<?php echo site_url('admin/division/division_dw/') ?>';
            $.get( url, function( data ) {
              division.html( data );
            }); 

          // District deafult
          var url = '<?php echo site_url('admin/division/district_dw/') ?>';
            $.get( url, function( data ) {
              district.html( data );
            }); 


          // Police Station deafult
          var url = '<?php echo site_url('admin/division/police_station_dw/') ?>';
            $.get( url, function( data ) {
              // console.log(data);
              police_station.html( data );
            }); 

           // Post office deafult
           var url = '<?php echo site_url('admin/division/post_office_dw/') ?>';
            $.get( url, function( data ) {
              // console.log(data);
              post_office.html( data );
            }); 
        



          

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

        
        // done and close modal
        $('#done').click(function(){
          var address = '';
          $.get('<?php echo site_url('admin/division/division_by_id/') ?>'+$('#division').val(),function(data){
            address += data+', ';
          });
          console.log(address);
          //  = division +','+ $('#district').val()+','+ $('#police_station').val() +','+ $('#post_office').val() +','+  $('#zip').val();
          $('#'+field).val(address);//$('#'.field).val(address);
          $('#address').modal('hide');


        })

        // show modal
        $('#address').modal('show');

      })
  </script>
 