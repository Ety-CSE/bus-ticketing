
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
    
    <div class="col-lg-1"></div>
    <div class="col-lg-8 content-header">
    <h2 class="content-title"> <?php echo empty($order->id) ? 'Add a <i class="la la-cart-plus  la-2x">  </i> New Order' : 'Edit Order <i class="la la-cart-plus  la-2x">  </i> '.$order->order; ?></h2>
    <hr>
    <br>
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); 
        // dump($order);
        ?>

          <!-- request ID -->
          <div class="form-group row">
            <label for="order_id" class="col-sm-2 col-form-label">Order ID</label>
            <div class="col-sm-10">
              <input type="text" name="order_id" value="<?php echo ($order->order_id != '')?$order->order_id:$this->order_m->new_buyer_request_id();?>" id="order_id" class="form-control" readonly>
            </div>
          </div> 
          
          <!-- Customer -->
          <div class="form-group row">
    	      <label for="customer" class="col-sm-2 col-form-label">Customer</label>
    	      <div class="col-sm-10">
    		      <?php
                  echo form_dropdown('customer', $this->order_m->get_customer_dw(),$order->customer,' class="form-control"  required="required" id="customer" ');
    		      ?>
    	      </div>
          </div>

          <!-- Rentacar -->
            <input type="hidden" name="rentacar" value="<?php echo $this->user_m->user_id_by_rentacar($this->user_m->session->userdata('id'));?>">
          <!-- <div class="form-group row">
    	      <label for="rentacar" class="col-sm-2 col-form-label">Rent a Car</label>
    	      <div class="col-sm-10">
    		      <?php
                  echo form_dropdown('rentacar', $this->order_m->rentacar_dw(),$order->rentacar,' class="form-control"  required="required" id="rentacar" ');
    		      ?>
    	      </div>
          </div> -->


          <!-- select offer -->
          <div class="form-group row">
            <!-- <?php echo $order->offer_id;?> -->
    	      <label for="offer_id" class="col-sm-2 col-form-label">Select Offer</label>
    	      <div class="col-sm-10">
    		      <?php

                  echo form_dropdown('offer_id', $this->order_m->offer_by_rentacar_dw(),$order->offer_id,' class="form-control"  required="required" id="offer_id" ');
    		      ?>
    	      </div>
          </div>

          <!-- select package -->
          <div class="form-group row">
    	      <label for="package" class="col-sm-2 col-form-label">Select Package</label>
    	      <div class="col-sm-10">
    		      <?php
                  echo form_dropdown('package', array('none'=>'Select Package','hourly'=>'Hourly','daily'=>'Daily','monthly'=>'Monthly'),$order->package,' class="form-control"  required="required" id="package" ');
    		      ?>
    	      </div>
          </div>

          <!--car info  -->
          <div class="form-group row">
            <?php $car_info = unserialize($order->car_info);?>
            <b class="col-sm-12 col-form-label">Car Info</b>
            <label for="car" class="col-sm-1 col-form-label">Car</label>                
            <div class="col-sm-4">
              <div class="input-group">
                <?php
                  echo form_dropdown('car', $this->order_m->car_dw(),$car_info['car'],' class="form-control"  required="required" id="car" ');
                ?>
              </div>
            </div> 
            <label for="car_reg" class="col-sm-2 col-form-label">Car Reg no</label>
            <div class="col-sm-2">
              <?php echo form_input('car_reg', $car_info['car_reg'],'class="form-control"  placeholder="Reg no"');?>
            </div>
            <label for="seat" class="col-sm-1 col-form-label">Seat</label>
            <div class="col-sm-2">
              <?php
                  echo form_dropdown('seat', array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12',
                    '13' => '13',
                    '14' => '14',
                    '15' => '15',
                  ),$car_info['seat'],'class="form-control"  required="required" id="seat" ');
                ?>
            </div>                            
          </div>
          <!-- Fuel -->
          <div class="form-group row">
            <label for="gas" class="col-sm-1 col-form-label"><p class="text-right">Fuel:</p> </label>
            <!-- gas CNG -->
            <?php $fuel = explode(",",$car_info['fuel']);?>
            <div class="col-sm-4">
              <?php 
                echo form_checkbox(array(
                  'name'          => 'fuel[]',
                  'id'            => 'gas',
                  'value'         => 'gas',
                  'checked'       => (in_array("gas", $fuel)) ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required"');
              ?>
              <label for="gas" class=" col-form-label"><p class="text-right">Gas &nbsp;&nbsp;</p> </label>
              <!-- Petrol -->
              <?php 
                echo form_checkbox(array(
                  'name'          => 'fuel[]',
                  'id'            => 'petrol',
                  'value'         => 'petrol',
                  'checked'       => (in_array("petrol", $fuel)) ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required"');
                ?>
              <label for="petrol" class=" col-form-label"><p class="text-right">Petrol &nbsp;&nbsp;</p> </label>
                <!-- Disel -->
              <!-- </div>
              <div class="col-sm-2"> -->
              <?php 
                echo form_checkbox(array(
                  'name'          => 'fuel[]',
                  'id'            => 'diesel',
                  'value'         => 'diesel',
                  'checked'       => (in_array("diesel", $fuel)) ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required"');
                ?>
                <label for="diesel" class=" col-form-label"><p class="text-right">Diesel</p> </label>
            </div>

            <!-- AC -->
            <label for="ac" class="col-sm-1 col-form-label"><p class="text-right">AC:</p> </label>
            <!-- Ac -->
    	      <div class="col-lg-3">
    		      <?php 
                echo form_radio(array(
                  'name'          => 'ac',
                  'id'            => 'ac',
                  'value'         => 'ac',
                  'checked'       => ($car_info['ac'] == 'ac') ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                ?>
                <label for="ac" class="col-form-label"><p class="text-right">AC &nbsp; &nbsp;</p> </label>
              <!-- </div>
              <div class="col-lg-2"> -->
    		      <?php 
                echo form_radio(array(
                  'name'          => 'ac',
                  'id'            => 'non-ac',
                  'value'         => 'non-ac',
                  'checked'       => ($car_info['ac'] == 'non-ac') ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                ?>
                <label for="non-ac" class=" col-form-label"><p class="text-right">Non AC</p> </label>
            </div>
            <label for="pass" class="col-sm-1 col-form-label">Pass</label>
            <div class="col-sm-2">
              <?php
                  echo form_dropdown('pass_no', array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'),$order->pass_no,'class="form-control"  required="required" id="pass_no" ');
                ?>
            </div>
          </div>

          <!-- details -->
          <div class="form-group row">
            <?php $custome_offer = unserialize($order->custome_offer);?>

            <b class="col-sm-12 col-form-label">Order Description</b>            
            <label for="details" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'details','value'=>set_value('details', $custome_offer['details']),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'details'));

              ?>
            </div>
          </div>           
          <!-- includes -->
          <div class="form-group row">
            <div class="col-lg-2"></div>
            <!-- Includes -->
            <div class="col-lg-3 package border-right">             
              <!-- driver Lunch -->
              <div class="form-group row">
                  <label for="" class="col-sm-12 col-form-label hr">Includes</label>  
                  <hr>                      
                  <label for="driver_lunch" class="col-sm-8 col-form-label includ">Driver Lunch</label>         
                  <div class="col-sm-4">
                  <?php 
                    echo form_checkbox(array(
                      'name'          => 'driver_lunch',
                      'id'            => 'driver_lunch',
                      'value'         => '1',
                      'checked'       => ($custome_offer['driver_lunch'] == '1') ? true : false,
                      'style'         => 'margin-top:10px;height:15px; width:15px',
                      'class'         => 'custom-checkbox form-control',
                    ),$offer->rentacar,'class="custom-checkbox form-control"  required="required" id="rentacar" ');
                    ?>
                  </div>

              </div>
              <!-- fuel -->
              <div class="form-group row">
                  <label for="in_fuel" class="col-sm-8 col-form-label includ">Fuel</label>         
                  <div class="col-sm-4">
                  <?php 
                    echo form_checkbox(array(
                      'name'          => 'in_fuel',
                      'id'            => 'in_fuel',
                      'value'         => '1',
                      'checked'       => ($custome_offer['in_fuel'] == '1') ? true : false,
                      'style'         => 'margin-top:10px;height:15px; width:15px'
                    ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                    ?>
                  </div>

              </div>
              <!-- overtime -->
              <div class="form-group row">
                  <label for="overtime_include" class="col-sm-8 col-form-label includ">Overtime</label>         
                  <div class="col-sm-4">
                  <?php 
                    echo form_checkbox(array(
                      'name'          => 'overtime_include',
                      'id'            => 'overtime_include',
                      'value'         => '1',
                      'checked'       => ($custome_offer['overtime_include'] == '1') ? true : false,
                      'style'         => 'margin-top:10px;height:15px; width:15px'
                    ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                    ?>
                  </div>

              </div>
              <!-- m_rcost -->
              <div class="form-group row">
                  <label for="rcost" class="col-sm-8 col-form-label includ">Road Cost</label>         
                  <div class="col-sm-4">
                  <?php 
                    echo form_checkbox(array(
                      'name'          => 'rcost',
                      'id'            => 'rcost',
                      'value'         => '1',
                      'checked'       => ($custome_offer['rcost'] == '1') ? true : false,
                      'style'         => 'margin-top:10px;height:15px; width:15px'
                    ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                    ?>
                  </div>
              </div>                                
            </div> 
            <div class="col-lg-3 package border-right">
              <!-- pricing -->
              <!-- rent -->
              <div class="form-group row">
                <label for="" class="col-sm-12 col-form-label hr">Over Time</label>
              <!-- Duty hour -->
                  <label for="d_hour" class="col-sm-12 col-form-label includ"><small>Duty</small></label>         
                  <div class="col-sm-12">
                    <div class="input-group">
                      <input type="text" name="d_hour" value="<?php echo $custome_offer['d_hour'];?>" class="form-control aria-label=" id="d_hour" placeholder="hour">
                      <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                      <div class="input-group-append">
                        <span class="input-group-text">Hour/Day</span>
                      </div>
                    </div>
                  </div>

              </div>

              <div class="form-group row">
                  <label for="overtime_rent" class="col-sm-8 col-form-label"><small>Over Time</small></label>                        
                  <div class="col-sm-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="checkbox" value="1" name="overtime" <?php echo ($custome_offer['overtime'] == '1') ? 'Checked' :'';?> aria-label="Checkbox for following text input">
                        </div>
                      </div>
                      <?php
                        echo form_input('overtime_rent',$custome_offer['overtime_rent'],'class="form-control aria-label="Amount" placeholder="Amount"');
                      ?>
                      <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                      <div class="input-group-append">
                        <span class="input-group-text">TK</span>
                      </div>
                    </div>
                  </div>                

              </div>  
            </div>
            <div class="col-lg-4 package">
              <div class="form-group row">
                <label for="" class="col-sm-12 col-form-label hr">Pricing</label>
                <label for="rent" class="col-sm-12 col-form-label"><small>Rent</small></label>                
                <div class="col-sm-12">
                  <div class="input-group">
                    <?php
                      echo form_input('rent',$order->rent,'class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount" id="rent"');
                    ?>
                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                    <div class="input-group-append">
                      <span class="input-group-text">TK</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="rent_comission" class="col-sm-12 col-form-label"><small>Comission</small></label>                
                <div class="col-sm-12">
                  <div class="input-group">
                    <?php
                      echo form_input('rent_comission',$custome_offer['rent_comission'],'class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount"');
                    ?>
                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                    <div class="input-group-append">
                      <span class="input-group-text">TK</span>
                    </div>
                  </div>
                </div> 
              </div>
              <br>
            </div>            
          </div>

          <!-- pickup info  -->
          <div class="form-group row">
            <?php 
              $pickup_info = unserialize($order->pickup_info); 
              $destination = unserialize($order->destination); //dump($destination);
            ?>

            <!-- address -->
            <b class="col-sm-12 col-form-label">Pick & Drop Info</b>
            <label for="p_add" class="col-sm-2 col-form-label">Pick Up</label>
            <div class="col-sm-4">
             <?php
                  echo form_input('p_add', set_value('p_add', $pickup_info['p_add']), 'class="form-control" placeholder="Pick Up Address" id="p_add"');
                  // echo form_textarea( array('name'=>'description','value'=>set_value('description', $order->description),'rows'=> '2', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));
                  ?>
            </div>
            <label for="d_add" class="col-sm-2 col-form-label">Destination</label>                
            <div class="col-sm-4">
              <div class="input-group">
                <?php
                  echo form_input('d_add', set_value('d_add', $destination['d_add']), 'class="form-control" placeholder="Destination" id="d_add"');
                  // echo form_textarea( array('name'=>'description','value'=>set_value('description', $order->description),'rows'=> '2', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));
                 ?>
                
              </div>
            </div> 
          </div>
          <!-- time -->
          <div class="form-group row">
            <label for="p_date" class="col-sm-2 col-form-label">Pick Up time</label>
              <div class="col-sm-4">
                <input type="datetime-local" class="form-control" name="p_date" value="<?php echo isset($pickup_info['p_date']) ? set_value('p_date', $pickup_info['p_date']) : set_value('p_date'); ?>">
              </div>
              <label for="d_date" class="col-sm-2 col-form-label">Drop time</label>                
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="datetime-local" class="form-control" name="d_date" value="<?php echo isset($destination['d_date']) ? set_value('d_date', $destination['d_date']) : set_value('d_date'); ?>">
                </div>
              </div> 
          </div>
          
          <!--Driver info  -->
          <div class="form-group row">
            <?php $driver_info = unserialize($order->driver_info);?>

            <b class="col-sm-12 col-form-label">Driver Info</b>              
            <label for="driver" class="col-sm-2 col-form-label">Driver</label>                    
            <div class="col-sm-10">
              <div class="input-group">
                  <?php
                    // echo form_dropdown('driver', $this->order_m->get_driver_dw(),$driver_info['driver'],' class="form-control"  required="required" id="driver" ');
                    echo form_input('driver', $driver_info['driver'], 'class="form-control"  required="required" id="driver"');
                  ?>
                  <!-- <div class="input-group-append">
                    <span class="input-group-text"><a href="#" id="createDriver"><i class="fa fa-user-plus fa-fw"> </i> Create Driver</a></span>
                  </div> -->
                </div>
            </div> 
          </div>
          <div class="form-group row">
            <label for="d_phone" class="col-sm-2 col-form-label">Phone No</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="d_phone" placeholder="Driver Phone" value="<?php echo $driver_info['d_phone']; ?>">
              </div>
              <label for="d_lic_no" class="col-sm-3 col-form-label">Driving License</label>                
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" name="d_lic_no" placeholder="Driver License" value="<?php echo $driver_info['d_lic_no']; ?>">
                </div>
              </div> 
              
          </div>
          <hr>

          <!-- note -->
          <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label">Note</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'note','value'=>set_value('note', $order->note),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 

          <!-- Status -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$order->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="order Sub-order" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($order->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

<!-- modal -->

<!-- <div class="modal fade" id="driver_reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b class="modal-title" id="myModalLabel">Create a New Driver</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<script>
  // $('#createDriver').click(function(){
  //   event.preventDefault();
  //   $('#driver_reg').modal('show');
  // });

//  Offer by car info
  $('#offer_id').change(function(){
    // alert($(this).val());
    var id = $(this).val();
    var url = '<?php echo site_url('admin/rent_a_car/offer_by_car_info/') ?>'+id;

      $.get( url, function( data ) {
        var car = JSON.parse(data);
        // set data
        $("#car").val(car['car']);
        $("#seat").val(car['seat']);
        $("#pass_no").val(car['pass']);
        $("input[name='ac'][value='"+car['ac']+"']").prop('checked', true);
        
        var fuel = car['fuel'].split(',');
        for(var i=0; i<fuel.length; i++){
          $("input[name='fuel[]'][value='"+fuel[i]+"']").prop('checked', true);
        };

      });
           
  });

  // Packege by 
  $('#package').change(function(){
    // alert($(this).val());
    var package = $(this).val();
    var id = $('#offer_id').val();
    
    var url = '<?php echo site_url('admin/rent_a_car/package_by_car_info/') ?>';
      
    $.post( url, { id: id, package: package })
    .done(function( data ) {
      var package_info = JSON.parse(data);
      console.log( package_info );
      if(package == 'hourly'){
        $("#details").val(package_info['h_details']);
        $("input[name='driver_lunch'][value='"+package_info['h_driver_lunch']+"']").prop('checked', true);
        $("input[name='in_fuel'][value='"+package_info['h_fuel']+"']").prop('checked', true);
        $("input[name='overtime_include'][value='"+package_info['h_overtime']+"']").prop('checked', true);
        $("input[name='rcost'][value='"+package_info['h_rcost']+"']").prop('checked', true);
        $("#rent").val(package_info['h_rent']);
        
      }else if(package == 'daily'){
        $("#details").val(package_info['d_details']);
        $("input[name='driver_lunch'][value='"+package_info['d_driver_lunch']+"']").prop('checked', true);
        $("input[name='in_fuel'][value='"+package_info['d_fuel']+"']").prop('checked', true);
        $("input[name='overtime_include'][value='"+package_info['d_overtime']+"']").prop('checked', true);
        $("input[name='rcost'][value='"+package_info['d_rcost']+"']").prop('checked', true);
        $("input[name='overtime'][value='"+package_info['d_overtime_include']+"']").prop('checked', true);
        $("#rent").val(package_info['d_rent']);
        $("#d_hour").val(package_info['d_hour']);
        $("#overtime_rent").val(package_info['d_overtime_rent']);
        
      }else{
        $("#details").val(package_info['m_details']);
        $("input[name='driver_lunch'][value='"+package_info['m_driver_lunch']+"']").prop('checked', true);
        $("input[name='in_fuel'][value='"+package_info['m_fuel']+"']").prop('checked', true);
        $("input[name='overtime_include'][value='"+package_info['m_overtime']+"']").prop('checked', true);
        $("input[name='overtime'][value='"+package_info['m_overtime_include']+"']").prop('checked', true);
        $("input[name='rcost'][value='"+package_info['m_rcost']+"']").prop('checked', true);
        $("#rent").val(package_info['m_rent']);
        $("#d_hour").val(package_info['m_hour']);
        $("#overtime_rent").val(package_info['m_overtime_rent']);

      }
    });
      // $.get( url, data, function( data ) {
      //   console.log(data);
      //   // // set data
      //   // $("#seat").val(car['seat']);
      //   // $("#pass_no").val(car['pass']);
      //   // $("input[name='ac'][value='"+car['ac']+"']").prop('checked', true);
        
      //   // var fuel = car['fuel'].split(',');
      //   // for(var i=0; i<fuel.length; i++){
      //   //   $("input[name='fuel[]'][value='"+fuel[i]+"']").prop('checked', true);
      //   // };

      // });            
    });

</script>

<!-- modal -->
