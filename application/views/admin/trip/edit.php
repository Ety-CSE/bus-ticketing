<div class="container">
  <div class="row">
    
    <div class="col-lg-10">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($trip->id) ? 'Add a <i class="la la-heart la-2x">  </i> New trip' : 'Edit trip <i class="la la-heart la-2x">  </i> '.$trip->name; ?>
            </h3>
          </div>
        </div>
        <!--begin::Form-->
        <?php echo form_open('', 'class="kt-form kt-form--label-right"'); ?>
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-trip"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Route No</label>
              <div class="col-sm-9">
                <?php
                    echo form_dropdown('route_id', $this->trip_m->get_route_dw(),$trip->route_id,'class="form-control lineAwsome"  id="route_id"' );
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Trip Time</label>
              <div class="col-md-9 trip_time">
              <?php if($trip->trip_time):
                  $time = unserialize($trip->trip_time);
                  foreach($time as $k => $t): ?>
                  <div class="row trip_row" id="<?php echo ($k+1);?>">
                    <div class="col">
                      <input type="time" name="t_of_journy[]" min="01:00" max="24:00" value="<?php echo ($t[0]);?>" class="form-control" placeholder="Pick a date">
                      <br>
                    </div>
                    <div class="col">
                      <?php
                        echo form_input('pickup_point[]', set_value('pickup_point', $t[1]), 'class="form-control" placeholder="Pickup Point"');
                        ?>
                        <br>
                    </div>
                    <div class="col">
                      <?php
                        echo form_input('drop_point[]', set_value('drop_point', $t[2]), 'class="form-control" placeholder="Drop Point"');
                      ?>
                      <br>
                    </div>
                    <div class="col">
                      <?php
                          echo form_dropdown('coach[]', $this->trip_m->coach_dw(),$t[3],'class="form-control lineAwsome" placeholder="trip Sub-trip"' );
                      ?>
                      <br>
                      </div>
                    <div class="col">
                      <?php
                          echo form_dropdown('statu[]', array('active', 'syspend'),$t[4],'class="form-control lineAwsome" placeholder="trip Sub-trip"' );
                      ?>
                      <br>
                      </div>
                      <button onclick="delete_row('<?php echo ($k+1);?>');" type="button" class="remove badge badge-pill badge-danger">X</button>
                  </div>
                <?php endforeach; ?>
                <script type="text/javascript">
                    function remove_email(id)
                    {
                      $(id).remove();
                      // console.log($(id));
                    }
                </script>
              <?php else: ?>
                <div class="row trip_row" id="1">
                  <div class="col">
                    <input type="time" name="t_of_journy[]" min="01:00" max="24:00" class="form-control" placeholder="Pick a date">
                    <br>
                  </div>
                  <div class="col">
                    <?php
                      echo form_input('pickup_point[]', set_value('pickup_point', $coach->pickup_point), 'class="form-control" placeholder="Pickup Point"');
                      ?>
                      <br>
                  </div>
                  <div class="col">
                    <?php
                      echo form_input('drop_point[]', set_value('drop_point', $coach->drop_point), 'class="form-control" placeholder="Drop Point"');
                    ?>
                    <br>
                  </div>
                  <div class="col">
                    <?php
                        echo form_dropdown('coach[]', array('Select Coach'),$trip->coach,'aria-describedby="sub-cat" class="coach form-control lineAwsome" placeholder="trip Sub-trip"' );
                    ?>
                    <br>
                    </div>
                  <div class="col">
                    <?php
                        echo form_dropdown('statu[]', array('active', 'syspend'),$trip->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="trip Sub-trip"' );
                    ?>
                    <br>
                    </div>
                  
                </div>
              <?php endif;?>

              </div>
              <div class="col-sm-3 offset-md-3">
                <button class="btn btn-success add_time" onclick="add_trip_time()"><i class="far fa-fw fa-clock"></i> Add Time</button>
              </div>

            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$trip->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="trip Sub-trip" id="status"' );
                ?>
              </div>

            </div>

          </div> <!-- portlet__body -->

          <div class="kt-portlet__foot">
          <div class="kt-form__actions">
            <div class="row">
              <div class="col-10">
              <?php echo empty($trip->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/trip') ?>" class="btn btn-secondary">Cancel</a>
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


<script type="text/javascript">

$('#route_id').change(function(){
  var url = '<?php echo site_url('admin/trip/get_coach_by_route/');?>'+$(this).val();
  $.get( url, function( data ) {
        $( ".coach" ).html( data );
        // console.log(data);
      }); 
});

function add_trip_time()
{
  event.preventDefault();
  var route = $('#route_id').val();
  var url = '<?php echo site_url('admin/trip/get_coach_by_route/');?>'+route;
  $.get( url, function( data ) {

    var rowno= parseInt($(".trip_row").last().attr('id'));
    rowno = rowno+1;

    var phone_no = '';
    phone_no += '<div class="row trip_row" id="'+rowno+'">';
    phone_no += '<div class="col">';
    phone_no += '<input type="time" name="t_of_journy[]" value="" aria-describedby="t_of_journy_'+rowno+'" class="form-control" placeholder="Pick a date" id="phone_'+rowno+'">';
    phone_no += '<br></div>';
    phone_no += '<div class="col">';
    phone_no += '<input type="text" name="pickup_point[]" value="" aria-describedby="pickup_point_'+rowno+'" class="form-control" placeholder="Pickup Point" id="phone_'+rowno+'">';
    phone_no += '<br></div>';
    phone_no += '<div class="col">';
    phone_no += '<input type="text" name="drop_point[]" value="" aria-describedby="drop_point_'+rowno+'" class="form-control" placeholder="Drop Point" id="phone_'+rowno+'">';
    phone_no += '<br></div>';  
    phone_no += '<div class="col">';
    phone_no += '<select name="coach[]" aria-describedby="coach_'+rowno+'" class="form-control coach" placeholder="Coach" id="coach_'+rowno+'">'+data+'</select>';
    phone_no += '<br></div>';
    phone_no += '<div class="col">';
    phone_no += '<select name="statu[]" class="form-control status" id="drop_point_'+rowno+'" aria-describedby="phn_type_'+rowno+'">';
    phone_no += '<option value="0"> active</option>';
    phone_no += '<option value="1"> syspend</option>';
    phone_no += '</select>';
    phone_no += '<br></div><button onclick="delete_row('+rowno+');" type="button" class="remove badge badge-pill badge-danger">X</button>';
    phone_no += '</div>';
    
    $(".trip_time").append(phone_no);
  }); 
  // console.log(rowno);
}


function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>

