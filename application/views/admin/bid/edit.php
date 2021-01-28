
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
      <h2 class="content-title"> <?php echo empty($bid->id) ? '<i class="far fa-fw fa-check-circle">  </i> Bid on Buyer Request' : 'Edit bid <i class="far fa-fw fa-check-circle">  </i> '.$bid->bid; ?></h2>
    </div>
    <div class="col-lg-8 offset-lg-1">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    
          <!-- request id -->
          <div class="form-group row">
            <label for="request_id" class="col-sm-2 col-form-label">Req. ID</label>
            <div class="col-sm-10">
             <?php
                  // echo form_input('request_id', '12SDF25', 'class="form-control" placeholder="request_id" id="request_id" readonly'); //set_value('request_id', $bid->request_id)
                  echo form_dropdown('request_id', $this->bid_m->buyer_request_dw(),$bid->request_id,' class="form-control" onchange="setrequest_id()"  required="required" id="request_id" ');

              ?>
            </div>
          </div> 
          
          <!-- rent a car -->
          <div class="form-group row">
    	      <label for="rentacar" class="col-sm-2 col-form-label">Rent a Car</label>
    	      <div class="col-sm-10">
    		      <?php   
                echo form_dropdown('rentacar', $this->bid_m->rentacar_dw(),$bid->rentacar,' class="form-control" onchange="setrentacar()"  required="required" id="rentacar" ');
                ?>
    	      </div>
    	    </div>
    
          <!-- details -->
          <div class="form-group row">
          <?php $offer= unserialize($bid->offer_details);?>
            <label for="details" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'details','value'=>set_value('details', $offer['details']),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 

          <!-- offer -->
          <div class="form-group row">
            <label for="offer_id" class="col-sm-2 col-form-label">Offer</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('offer_id', $this->bid_m->offer_dw(),$bid->offer_id,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="offer_id"' );
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
                  <div class="col-lg-3 package border-right">
                    <!-- Details -->
                    <div class="form-group row">
                      <div class="col-sm-12 hr"> 
                        <?php 
                          echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package1',
                            'value'         => 'hourly',
                            'checked'       => ($bid->package == 'hourly') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required"');
                          ?>
                      <label for="package1" class=" col-form-label"><strong>Hourly</strong></label> 
                      </div>
                    </div> 
                    <!-- includes -->
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

                    <hr>
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
                  <!-- daily -->
                  <div class="col-lg-3 package border-right">
                    <!-- details -->
                    <div class="form-group row">
                      <div class="col-sm-12 hr">
                      <?php 
                          echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package2',
                            'value'         => 'daily',
                            'checked'       => ($bid->package == 'daily') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required"');
                          ?>
                        <label for="package2" class=" col-form-label"><strong>Daily</strong></label> 

                      </div>
                      <?php //$day = unserialize($offer->daily);?>
                      
                    </div> 
                    <!-- includes -->
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

                    <hr>
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
                  <!-- monthly -->
                  <div class="col-lg-3 package border-right">
                    <!-- m_details -->
                    <div class="form-group row">
                      <div class="col-sm-12 hr">
                        <?php 
                          echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package3',
                            'value'         => 'monthly',
                            'checked'       => ($bid->package == 'monthly') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required"');
                          ?>
                          <label for="package3" class=" col-form-label"><strong>Monthly</strong></label> 
                          
                      </div>
                      <?php //$month = unserialize($offer->monthly); ?>

                      
                    </div> 

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
                    <hr>
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

                  <!-- custom -->
                  <div class="col-lg-3 package">
                    <!-- m_details -->
                    <div class="form-group row">
                      <div class="col-sm-12 hr">
                        <?php 
                          echo form_radio(array(
                            'name'          => 'package',
                            'id'            => 'package4',
                            'value'         => 'custom',
                            'checked'       => ($bid->package == 'custom') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required"');
                          ?>
                          <label for="package4" class=" col-form-label"><strong>Custom</strong></label> 
                          
                      </div>
                      <?php //$month = unserialize($offer->monthly); ?>

                      
                    </div> 

                    <!-- Includes -->
                    <!-- driver Lunch -->
                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-form-label hr">Includes</label>  
                        <hr>                      
                        <label for="c_driver_lunch" class="col-sm-8 col-form-label includ">Driver Lunch</label>         
                        <div class="col-sm-4">
                        <?php 
                          echo form_checkbox(array(
                            'name'          => 'c_driver_lunch',
                            'id'            => 'c_driver_lunch',
                            'value'         => '1',
                            'checked'       => ($offer['c_driver_lunch'] == '1') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px',
                            'class'         => 'custom-checkbox form-control',
                          ),$offer->rentacar,'class="custom-checkbox form-control"  required="required" id="rentacar" ');
                          ?>
                        </div>

                    </div>
                    <!-- fuel -->
                    <div class="form-group row">
                        <label for="c_fuel" class="col-sm-8 col-form-label includ">Fule</label>         
                        <div class="col-sm-4">
                        <?php 
                          echo form_checkbox(array(
                            'name'          => 'c_fuel',
                            'id'            => 'c_fuel',
                            'value'         => '1',
                            'checked'       => ($offer['c_fuel'] == '1') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                          ?>
                        </div>

                    </div>
                    <!-- overtime -->
                    <div class="form-group row">
                        <label for="c_overtime_include" class="col-sm-8 col-form-label includ">Overtime</label>         
                        <div class="col-sm-4">
                        <?php 
                          echo form_checkbox(array(
                            'name'          => 'c_overtime_include',
                            'id'            => 'c_overtime_include',
                            'value'         => '1',
                            'checked'       => ($offer['c_overtime_include'] == '1') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                          ?>
                        </div>

                    </div>
                    <!-- m_rcost -->
                    <div class="form-group row">
                        <label for="c_rcost" class="col-sm-8 col-form-label includ">Road Cost</label>         
                        <div class="col-sm-4">
                        <?php 
                          echo form_checkbox(array(
                            'name'          => 'c_rcost',
                            'id'            => 'c_rcost',
                            'value'         => '1',
                            'checked'       => ($offer['c_rcost'] == '1') ? true : false,
                            'style'         => 'margin-top:10px;height:15px; width:15px'
                          ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                          ?>
                        </div>

                    </div>
                    <hr>
                    <!-- pricing -->
                    <!-- rent -->
                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-form-label hr">Pricing</label>
                        <label for="c_rent" class="col-sm-12 col-form-label"><small>Rent</small></label>
                        
                        <div class="col-sm-12">
                          <div class="input-group">
                            <?php
                              echo form_input('c_rent',($bid->package == 'custom') ? $bid->rent : ' ','class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount"');
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
                            <input type="text" name="c_hour" value="<?php echo $offer['c_hour'];?>" class="form-control aria-label=" id="c_hour" placeholder="hour">
                            <!-- <input type="text" class="form-control" aria-label="Amount"> -->
                            <div class="input-group-append">
                              <span class="input-group-text">Hour/Day</span>
                            </div>
                          </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="c_overtime_rent" class="col-sm-8 col-form-label"><small>Over Time</small></label>                        
                        <div class="col-sm-12">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input type="checkbox" value="1" name="c_overtime" <?php echo ($offer['c_overtime'] == '1') ? 'Checked' :'';?> aria-label="Checkbox for following text input">
                              </div>
                            </div>
                            <?php
                              echo form_input('c_overtime_rent',$offer['c_overtime_rent'],'class="form-control aria-label="Amount" placeholder="Amount"');
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
          
          <!-- status -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Seen'),$bid->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="bid Sub-bid" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($bid->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

