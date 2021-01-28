
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
  <div class="row ">
  <!-- content-header -->
    <!-- <div class=" col-8 offset-1">
      <?php// dump($offer);?>
    </div> -->
    <!-- <div class="col-3"></div> -->
    <div class="col-lg-8 offset-lg-1 content-header">
    <h2 class="content-title"> <?php echo empty($offer->id) ? '<i class="far fa-bullhorn">  </i> Add a New offer ' : '<i class="fa fa-bullhorn">  </i> Edit offer '.$offer->offer; ?></h2>
    <hr>
    <br>
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
        <!-- title -->
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
    	      <div class="col-sm-10">
    		      <?php 
                echo form_input('title', $offer->title,' class="form-control" placeholder="Title"  required="required" id="title" ');
    		      ?>
    	      </div>
    	    </div>

            <!-- rent a car -->
              <input type="hidden" value="<?php echo $this->rentacar_m->rentacar_by_user_id($this->session->userdata('id'));?>" name="rentacar">
            <!-- car -->
          <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Car</label>
    	      <div class="col-sm-10">
    		      <?php 
                echo form_dropdown('car', $this->offer_m->car_dw(),$offer->car,' class="form-control"  required="required" id="car" ');
    		      ?>
    	      </div>
    	    </div>
          <!-- Offer details -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'details','value'=>set_value('details', $offer->details),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 
          <!-- CarYear -->
    	    <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Year</label>
            <!-- CarYear -->
    	      <div class="col-sm-4">
              <?php 
                echo form_input('year', $offer->year,' class="form-control"  required="required" id="year" ');
                ?>
    	      </div>
            
    	      <label for="ac" class="col-sm-1 col-form-label"><p class="text-right">AC</p> </label>
            <!-- Ac -->
    	      <div class="col-sm-2">
    		      <?php 
                echo form_radio(array(
                  'name'          => 'ac',
                  'id'            => 'ac',
                  'value'         => 'ac',
                  'checked'       => ($offer->ac == 'ac') ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                ?>
                <label for="ac" class="col-form-label"><p class="text-right">AC</p> </label>
    	      </div>
    	      <div class="col-sm-3">
    		      <?php 
                echo form_radio(array(
                  'name'          => 'ac',
                  'id'            => 'non-ac',
                  'value'         => 'non-ac',
                  'checked'       => ($offer->ac == 'non-ac') ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                ?>
                <label for="non-ac" class=" col-form-label"><p class="text-right">Non AC</p> </label>
    	      </div>
          </div> 
          <!-- car conditions -->
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Conditions</label>
    	      <div class="col-sm-3">
    		      <?php 
                echo form_dropdown('conditions',array('Old','New'), $offer->conditions,' class="form-control"  required="required" id="conditions" ');
    		      ?>
    	      </div>
            <!-- Fuel -->
    	      <label for="inputEmail3" class="col-sm-1 col-form-label"><p class="text-right">Fuel</p> </label>
            <!-- gas CNG -->

            <?php $fuel = explode(",",$offer->fuel);?>
    	      <div class="col-sm-2">
    		      <?php 
                echo form_checkbox(array(
                  'name'          => 'fuel[]',
                  'id'            => 'gas',
                  'value'         => 'gas',
                  'checked'       => (in_array("gas", $fuel)) ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
    		      ?>
            <label for="gas" class=" col-form-label"><p class="text-right">Gas</p> </label>
    	      </div>
            <!-- Petrol -->
    	      <div class="col-sm-2">
    		      <?php 
                echo form_checkbox(array(
                  'name'          => 'fuel[]',
                  'id'            => 'petrol',
                  'value'         => 'petrol',
                  'checked'       => (in_array("petrol", $fuel)) ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                ?>
                <label for="petrol" class=" col-form-label"><p class="text-right">Petrol</p> </label>
    	      </div>
            <!-- Disel -->
    	      <div class="col-sm-2">
    		      <?php 
                echo form_checkbox(array(
                  'name'          => 'fuel[]',
                  'id'            => 'diesel',
                  'value'         => 'diesel',
                  'checked'       => (in_array("diesel", $fuel)) ? true : false,
                  'style'         => 'margin-top:10px;height:15px; width:15px'
                ),$offer->rentacar,'class="form-control"  required="required" id="rentacar" ');
                ?>
                <label for="diesel" class=" col-form-label"><p class="text-right">Diesel</p> </label>
    	      </div>
          </div> 

          <!-- packages -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Packages</label>
            <div class="col-lg-10">
              <div class="container-fluid">
                <div class="row">
                  <!-- hourly -->
                  <div class="col-lg-4 col-4 package border-right">
                    <?php $hour = unserialize($offer->hourly);  ?>
                    <!-- Details -->
                    <div class="form-group row">
                      <b class="col-sm-12">Hourly</b>
                      <label for="h_details" class="col-sm-12 col-form-label"><small>Details</small></label>
                      <div class="col-sm-12">
                        <?php
                           echo form_textarea( array('name'=>'h_details','value'=>set_value('h_details', $hour['h_details']),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'h_details'));
                        ?>
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
                            'checked'       => ($hour['h_driver_lunch'] == '1') ? true : false,
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
                            'checked'       => ($hour['h_fuel'] == '1') ? true : false,
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
                            'checked'       => ($hour['h_overtime'] == '1') ? true : false,
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
                            'checked'       => ($hour['h_rcost'] == '1') ? true : false,
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
                              echo form_input('h_rent',$hour['h_rent'],'class=" custom-checkbox form-control aria-label="Amount" id="h_rent" placeholder="Amount"');
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
                  <div class="col-lg-4 col-4 package border-right">
                    <!-- details -->
                    <div class="form-group row">
                      <b class="col-sm-12">Daily</b>
                      <?php $day = unserialize($offer->daily);?>
                      <label for="d_details" class="col-sm-12 col-form-label"><small>Details</small></label>
                      <div class="col-sm-12">
                        <?php
                           echo form_textarea( array('name'=>'d_details','value'=>set_value('d_details', $day['d_details']),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));
                        ?>
                      </div>
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
                            'checked'       => ($day['d_driver_lunch'] == '1') ? true : false,
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
                            'checked'       => ($day['d_fuel'] == '1') ? true : false,
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
                            'checked'       => ($day['d_overtime_include'] == '1') ? true : false,
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
                            'checked'       => ($day['d_rcost'] == '1') ? true : false,
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
                              echo form_input('d_rent',$day['d_rent'],'id="d_rent" class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount"');
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
                            <input type="text" name="d_hour" value="<?php echo $day['d_hour'];?>" class="form-control aria-label=" id="d_hour" placeholder="hour">
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
                                    'checked'       => ($day['d_overtime'] == '1') ? true : false,
                                    'style'         => 'margin-top:0px;height:15px; width:15px'
                                  ),$offer->rentacar,'class="form-control"  required="required"');
                                ?>
                                <!-- <input type="checkbox" name="d_overtime" value="1" <?php echo ($day['d_overtime'] == '1') ? 'Checked' :'';?> aria-label="Checkbox for following text input"> -->
                              </div>
                            </div>
                            <?php
                              echo form_input('d_overtime_rent',$day['d_overtime_rent'],'id="d_overtime_rent" class="form-control aria-label="Amount" placeholder="Amount"');
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
                  <div class="col-lg-4 col-4 package">
                    <!-- m_details -->
                    <div class="form-group row">
                      <b class="col-sm-12">Monthly</b>
                      <?php $month = unserialize($offer->monthly); ?>

                      <label for="m_details" class="col-sm-12 col-form-label"><small>Details</small></label>
                      <div class="col-sm-12">
                        <?php
                           echo form_textarea( array('name'=>'m_details','value'=>set_value('m_details', $month['m_details']),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));
                        ?>
                      </div>
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
                            'checked'       => ($month['m_driver_lunch'] == '1') ? true : false,
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
                            'checked'       => ($month['m_fuel'] == '1') ? true : false,
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
                            'checked'       => ($month['m_overtime_include'] == '1') ? true : false,
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
                            'checked'       => ($month['m_rcost'] == '1') ? true : false,
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
                              echo form_input('m_rent',$month['m_rent'],'class=" custom-checkbox form-control aria-label="Amount" placeholder="Amount"');
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
                            <input type="text" name="m_hour" value="<?php echo $month['m_hour'];?>" class="form-control aria-label=" id="m_hour" placeholder="hour">
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
                                <?php 
                                    echo form_checkbox(array(
                                    'name'          => 'm_overtime',
                                    'id'            => 'm_overtime',
                                    'value'         => '1',
                                    'checked'       => ($month['m_overtime'] == '1') ? true : false,
                                    'style'         => 'margin-top:0px;height:15px; width:15px'
                                    ),$offer->rentacar,'class="form-control"  required="required"');
                                ?>
                              </div>
                            </div>
                            <?php
                              echo form_input('m_overtime_rent',$month['m_overtime_rent'],'class="form-control aria-label="Amount" placeholder="Amount"');
                            ?>
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
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$offer->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="offer Sub-offer" id="status"' );
              ?>
            </div>
          </div>
    	    
          <!-- submit -->
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
                <?php echo empty($offer->id) ? form_submit('submit', 'Save', 'class="btn btn-warning float-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

