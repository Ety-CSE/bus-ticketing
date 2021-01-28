<div class="container">
  <div class="row content-header ">
    <div class="col-12">
      <h2 class="content-title"> <i class="far fa-fw fa-check-circle">  </i> Bid on Buyer Request</h2>
      <hr>
      <br>
    </div>
    <div class="col-lg-6 border-right">
       <div class="row">
            <div class="col-6">
            <?php $pickup = unserialize($buyer_request->pickup_info);?>
                <p><b>Customer:</b> <?php echo $this->buyer_request_m->user_by_id($buyer_request->customer);?></p>
                <p><small><b>Date:</b> <?php echo $buyer_request->date;?></small></p>
            </div>
            <div class="col-6">
                <p><b>Request ID:</b> <?php echo $buyer_request->request_id;?></p>
                <p><small><b>Journy Date:</b> <?php echo $pickup['p_date'];?></small></p>
            </div>
            <div class="col-12">
                <hr>
                <b>Details:</b>
                <p><?php echo $buyer_request->details;?></p>
                <hr>
                <p><b>Requsted Car</b></p>
                <?php
                    
                    $car = $this->car_m->get($buyer_request->car);
                    // dump($car);
                    // echo $buyer_request->car;
                ?>
            </div>
            <div class="col-8">
                <img src="<?php echo site_url('upload/'.$car->icon);?>" alt="" class="img-fluid">
            </div>
            <div class="col-4">
                <p><b>Model:</b> <?php echo $car->model;?></p>
                <p><b>Brand:</b> <?php echo $this->car_m->brand_by_id($car->brand);?></p>
                <p><b>Wheel:</b> <?php echo $car->wheel;?></p>
                <p><b>Door:</b> <?php echo $car->door;?></p>
                <p><b>Seat:</b> <?php echo $car->seat;?></p>
                <p><b>Passanger:</b> <?php echo $buyer_request->pass;?></p>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-6">
                <p><b>Picup info</b></p>
                <p><?php echo $pickup['pickup_add'];?></p>
            </div>
            <div class="col-6">
                <p><b>Destination</b></p>
                <p><?php echo $buyer_request->destination;?></p>
            </div>
       </div>
    </div>  
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open();
        
         ?>
    	    
          <!-- request id -->
          <?php //dump($bid);
            $offer_details = unserialize($bid->offer_details);
            //dump($offer_details);
          ?>
          <input type="hidden" name="request_id" class="form-control" readonly value="<?php echo $buyer_request->request_id;?>">
          
          <!-- rent a car -->
          <input type="hidden" name="rentacar" class="form-control" readonly value="<?php echo $this->buyer_request_m->rentacar_by_user_id($this->session->userdata('id'));?>">
         
    
          <!-- details -->
          <div class="form-group row">
            <?php $offer= unserialize($bid->offer_details);?>
            <label for="details" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'details','value'=>set_value('details', $offer['details']),'rows'=> '4', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));
              ?>
            </div>
          </div> 

          <!-- offer -->
          <div class="form-group row">
            <label for="offer_id" class="col-sm-2 col-form-label">Offer</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('offer_id', $this->order_m->offer_by_rentacar_dw(),$bid->offer_id,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="offer_id"' );
              ?>
            </div>
          </div>

          <!-- packages -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Packages</label>
            <div class="col-lg-10">
              <div class="container-fluid">
                <div class="row">
                  <!-- hourly -->
                  <div class="col-lg-12 <?php echo ($buyer_request->type == 'hourly')? '':'d-none'; ?>  package">
                    <!-- Details -->
                    <div class="form-group row">
                        <div class="col-sm-12 hr"> 
                        <?php 
                            echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package1',
                            'value'         => 'hourly',
                            'checked'       =>  ($buyer_request->type == 'hourly') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                            ),$offer->rentacar,'class="form-control"  required="required checked"');
                            ?>
                        <label for="package1" class=" col-form-label"><strong>Hourly</strong></label> 
                        </div>
                    </div> 
                    <div class="row">
                        <!-- includes -->
                        <div class="col-6 border-right">
                            <!-- driver lunch -->
                            <div class="form-group row">
                                <label for="" class="col-sm-12 col-form-label hr">Includes</label>  
                                <label for="h_driver_lunch" class="col-sm-8 col-form-label includ">Driver Lunch</label>         
                                <div class="col-sm-4">
                                <?php 
                                    echo form_checkbox(array(
                                    'name'          => 'h_driver_lunch',
                                    'id'            => 'h_driver_lunch',
                                    'value'         => '1',
                                    'checked'       => ($offer['h_driver_lunch'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                    ),$offer->rentacar,'class="form-control"  required="required"');
                                    ?>
                                </div>

                            </div>
                            <!-- fuel -->
                            <div class="form-group row">
                                <label for="h_fuel" class="col-sm-8 col-form-label includ">Fule</label>         
                                <div class="col-sm-4">
                                <?php 
                                    echo form_checkbox(array(
                                    'name'          => 'h_fuel',
                                    'id'            => 'h_fuel',
                                    'value'         => '1',
                                    'checked'       => ($offer['h_fuel'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                    ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                                    ?>
                                </div>

                            </div>
                            <!-- overlime -->
                            <div class="form-group row">
                                <label for="h_overtime" class="col-sm-8 col-form-label includ">Overtime</label>         
                                <div class="col-sm-4">
                                <?php 
                                    echo form_checkbox(array(
                                    'name'          => 'h_overtime',
                                    'id'            => 'h_overtime',
                                    'value'         => '1',
                                    'checked'       => ($offer['h_overtime'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                    ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                                    ?>
                                </div>

                            </div>
                            <!-- roadcost -->
                            <div class="form-group row">
                                <label for="h_rcost" class="col-sm-8 col-form-label includ">Road Cost</label>         
                                <div class="col-sm-4">
                                <?php 
                                    echo form_checkbox(array(
                                    'name'          => 'h_rcost',
                                    'id'            => 'h_rcost',
                                    'value'         => '1',
                                    'checked'       => ($offer['h_rcost'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                    ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                                    ?>
                                </div>

                            </div>
                        </div>
                        <!-- pricing -->
                        <div class="col-6">
                            <!-- rent -->
                            <div class="form-group row">
                                <label for="" class="col-sm-12 col-form-label hr">Pricing</label>
                                <label for="h_rent" class="col-sm-12 col-form-label"><small>Rent</small></label>
                                
                                <div class="col-sm-12">
                                    <div class="input-group">
                                    <?php
                                        echo form_input('h_rent',($bid->package == 'hourly') ? $bid->rent : ' ','class=" custom-checkbox form-control aria-label="Amount" id="h_rent" placeholder="Amount"');
                                    ?>
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                        <span class="input-group-text">TK</span>
                                    </div>
                                    </div>
                                </div>                

                            </div>
                        </div>
                    </div>

                  </div> 
                  <!-- daily -->
                  <div class="col-lg-12 <?php echo ($buyer_request->type == 'daily')? '':'d-none'; ?>  package">
                    <!-- details -->
                    <div class="form-group row">
                      <div class="col-sm-12 hr">
                      <?php 
                          echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package2',
                            'value'         => 'daily',
                            'checked'       =>  ($buyer_request->type == 'daily') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required"');
                          ?>
                        <label for="package2" class=" col-form-label"><strong>Daily</strong></label> 

                      </div>
                      <?php //$day = unserialize($offer->daily);?>
                      
                    </div>
                    <div class="row">
                        <!-- includes -->
                        <div class="col-6 border-right">
                          <!-- d_driver_lunch -->
                            <div class="form-group row">
                                <label for="" class="col-sm-12 col-form-label hr">Includes</label>  
                                <hr>                      
                                <label for="d_driver_lunch" class="col-sm-8 col-form-label includ">Driver Lunch</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'd_driver_lunch',
                                    'id'            => 'd_driver_lunch',
                                    'value'         => '1',
                                    'checked'       => ($offer['d_driver_lunch'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required" ');
                                ?>
                                </div>

                            </div>
                            <!-- d_fuel -->
                            <div class="form-group row">
                                <label for="d_fuel" class="col-sm-8 col-form-label includ">Fule</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'd_fuel',
                                    'id'            => 'd_fuel',
                                    'value'         => '1',
                                    'checked'       => ($offer['d_fuel'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required" ');
                                ?>
                                </div>

                            </div>
                            <!-- d_overtime -->
                            <div class="form-group row">
                                <label for="d_overtime_include" class="col-sm-8 col-form-label includ">Overtime</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'd_overtime_include',
                                    'id'            => 'd_overtime_include',
                                    'value'         => '1',
                                    'checked'       => ($offer['d_overtime_include'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required"');
                                ?>
                                </div>

                            </div>
                            <!-- d_rcost -->
                            <div class="form-group row">
                                <label for="d_rcost" class="col-sm-8 col-form-label includ">Road Cost</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'd_rcost',
                                    'id'            => 'd_rcost',
                                    'value'         => '1',
                                    'checked'       => ($offer['d_rcost'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required" ');
                                ?>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <!-- d_rent -->
                            <div class="form-group row">
                                <label for="" class="col-sm-12 col-form-label hr">Pricing</label>
                                <label for="d_rent" class="col-sm-12 col-form-label"><small>Rent</small></label>
                                
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <?php
                                    echo form_input('d_rent',($bid->package == 'daily') ? $bid->rent : ' ','id="d_rent" class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount"');
                                    ?>
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                    <span class="input-group-text">TK</span>
                                    </div>
                                </div>
                                </div>                

                            </div>

                            <!-- Duty hour -->
                            <div class="form-group row">
                                <label for="d_hour" class="col-sm-12 col-form-label includ"><small>Duty</small></label>         
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" name="d_hour" value="<?php echo $offer['d_hour'];?>" class="form-control aria-label=" id="d_hour" placeholder="hour">
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                    <span class="input-group-text">Hour/Day</span>
                                    </div>
                                </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="d_overtime" class="col-sm-8 col-form-label"><small>Over Time</small></label>
                                
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <?php 
                                        echo form_checkbox(array(
                                            'name'          => 'd_overtime',
                                            'id'            => 'd_overtime',
                                            'value'         => '1',
                                            'checked'       => ($offer['d_overtime'] == '1') ? true : false,
                                            'style'         => 'height:15px; width:15px'
                                        ),$offer->rentacar,'class="form-control"  required="required"');
                                        ?>
                                        <!-- <input type="checkbox" name="d_overtime" value="1" <?php echo ($day['d_overtime'] == '1') ? 'Checked' :'';?> aria-label="Checkbox for following text input"> -->
                                    </div>
                                    </div>
                                    <?php
                                    echo form_input('d_overtime_rent',$offer['d_overtime_rent'],'id="d_overtime_rent" class="form-control aria-label="Amount" placeholder="Amount"');
                                    ?>
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                    <span class="input-group-text">TK</span>
                                    </div>
                                </div>
                                </div>                

                            </div>
                        </div>
                    </div> 
                          
                  </div> 
                  <!-- monthly -->
                  <div class="col-lg-12 <?php echo ($buyer_request->type == 'monthly')? '':'d-none'; ?>  package">
                    <!-- m_details -->
                    <div class="form-group row">
                      <div class="col-sm-12 hr">
                        <?php 
                          echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package3',
                            'value'         => 'monthly',
                            'checked'       =>  ($buyer_request->type == 'monthly') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required"');
                          ?>
                          <label for="package3" class=" col-form-label"><strong>Monthly</strong></label> 
                          
                      </div>
                      <?php //$month = unserialize($offer->monthly); ?>

                      
                    </div> 
                    <div class="row">
                        <div class="col-6 border-right">
                          <!-- Includes -->
                            <!-- driver Lunch -->
                            <div class="form-group row">
                                <label for="" class="col-sm-12 col-form-label hr">Includes</label>  
                                <hr>                      
                                <label for="m_driver_lunch" class="col-sm-8 col-form-label includ">Driver Lunch</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'm_driver_lunch',
                                    'id'            => 'm_driver_lunch',
                                    'value'         => '1',
                                    'checked'       => ($offer['m_driver_lunch'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px',
                                    'class'         => 'custom-checkbox form-control',
                                ),$offer->rentacar,'class="custom-checkbox form-control"  required="required" id="rentacar" ');
                                ?>
                                </div>

                            </div>
                            <!-- fuel -->
                            <div class="form-group row">
                                <label for="m_fuel" class="col-sm-8 col-form-label includ">Fule</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'm_fuel',
                                    'id'            => 'm_fuel',
                                    'value'         => '1',
                                    'checked'       => ($offer['m_fuel'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                                ?>
                                </div>

                            </div>
                            <!-- overtime -->
                            <div class="form-group row">
                                <label for="m_overtime_include" class="col-sm-8 col-form-label includ">Overtime</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'm_overtime_include',
                                    'id'            => 'm_overtime_include',
                                    'value'         => '1',
                                    'checked'       => ($offer['m_overtime_include'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                                ?>
                                </div>

                            </div>
                            <!-- m_rcost -->
                            <div class="form-group row">
                                <label for="m_rcost" class="col-sm-8 col-form-label includ">Road Cost</label>         
                                <div class="col-sm-4">
                                <?php 
                                echo form_checkbox(array(
                                    'name'          => 'm_rcost',
                                    'id'            => 'm_rcost',
                                    'value'         => '1',
                                    'checked'       => ($offer['m_rcost'] == '1') ? true : false,
                                    'style'         => 'margin-top:10px;height:15px; width:15px'
                                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                                ?>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <!-- pricing -->
                            <!-- rent -->
                            <div class="form-group row">
                                <label for="" class="col-sm-12 col-form-label hr">Pricing</label>
                                <label for="m_rent" class="col-sm-12 col-form-label"><small>Rent</small></label>
                                
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <?php
                                    echo form_input('m_rent',($bid->package == 'monthly') ? $bid->rent : ' ','class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount"');
                                    ?>
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                    <span class="input-group-text">TK</span>
                                    </div>
                                </div>
                                </div>                

                            </div>

                            <!-- Duty hour -->
                            <div class="form-group row">
                                <label for="m_hour" class="col-sm-12 col-form-label includ"><small>Duty</small></label>         
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" name="m_hour" value="<?php echo $offer['m_hour'];?>" class="form-control aria-label=" id="m_hour" placeholder="hour">
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                    <span class="input-group-text">Hour/Day</span>
                                    </div>
                                </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="m_overtime_rent" class="col-sm-8 col-form-label"><small>Over Time</small></label>                        
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" value="1" name="m_overtime" <?php echo ($offer['m_overtime'] == '1') ? 'Checked' :'';?> aria-label="Checkbox for following text input">
                                    </div>
                                    </div>
                                    <?php
                                    echo form_input('m_overtime_rent',$offer['m_overtime_rent'],'class="form-control aria-label="Amount" placeholder="Amount"');
                                    ?>
                                    <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                                    <div class="input-group-append">
                                    <span class="input-group-text">TK</span>
                                    </div>
                                </div>
                                </div>                

                            </div>
                        </div>
                    </div>
                    
                  </div> 
                 
                  

                                  
                  
                </div>
              </div>
            </div>          
          </div>
          
          <!-- status -->
          <input type="hidden" name="status" class="form-control" readonly value="0">
          
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($bid->id) ? form_submit('submit', 'Bid Now', 'class="btn btn-outline-success float-right"') : form_submit('submit', 'Update Bid' , 'class="btn btn-outline-success float-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>




<script>
  // $('#createDriver').click(function(){
  //   event.preventDefault();
  //   $('#driver_reg').modal('show');
  // });

//  Offer by car info
  $('#offer_id').change(function(){
        // alert($(this).val());
        var id = $(this).val();
        // Packege by 
        var package = '<?php echo $buyer_request->type;?>';
        // var id = $('#offer_id').val();
        
        var url = '<?php echo site_url('admin/rent_a_car/package_by_car_info/') ?>';
        
        $.post( url, { id: id, package: package })
            .done(function( data ) {
            var package_info = JSON.parse(data);
            console.log( package_info );
            if(package == 'hourly'){
                $("#details").val(package_info['h_details']);
                $("input[name='h_driver_lunch'][value='"+package_info['h_driver_lunch']+"']").prop('checked', true);
                $("input[name='h_fuel'][value='"+package_info['h_fuel']+"']").prop('checked', true);
                $("input[name='h_overtime_include'][value='"+package_info['h_overtime']+"']").prop('checked', true);
                $("input[name='h_rcost'][value='"+package_info['h_rcost']+"']").prop('checked', true);
                $("#h_rent").val(package_info['h_rent']);
                
            }else if(package == 'daily'){
                $("#details").val(package_info['d_details']);
                $("input[name='d_driver_lunch'][value='"+package_info['d_driver_lunch']+"']").prop('checked', true);
                $("input[name='d_fuel'][value='"+package_info['d_fuel']+"']").prop('checked', true);
                $("input[name='d_overtime_include'][value='"+package_info['d_overtime']+"']").prop('checked', true);
                $("input[name='d_rcost'][value='"+package_info['d_rcost']+"']").prop('checked', true);
                $("input[name='d_overtime'][value='"+package_info['d_overtime_include']+"']").prop('checked', true);
                $("#d_rent").val(package_info['d_rent']);
                $("#d_hour").val(package_info['d_hour']);
                $("#d_overtime_rent").val(package_info['d_overtime_rent']);
                
            }else{
                $("#details").val(package_info['m_details']);
                $("input[name='m_driver_lunch'][value='"+package_info['m_driver_lunch']+"']").prop('checked', true);
                $("input[name='m_fuel'][value='"+package_info['m_fuel']+"']").prop('checked', true);
                $("input[name='m_overtime_include'][value='"+package_info['m_overtime']+"']").prop('checked', true);
                $("input[name='m_overtime'][value='"+package_info['m_overtime_include']+"']").prop('checked', true);
                $("input[name='m_rcost'][value='"+package_info['m_rcost']+"']").prop('checked', true);
                $("input[name='m_rent']").val(package_info['m_rent']);
                $("#m_hour").val(package_info['m_hour']);
                $("input[name='m_overtime_rent']").val(package_info['m_overtime_rent']);

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