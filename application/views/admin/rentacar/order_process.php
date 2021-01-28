<br><br><br><br>
<div class="container order_wrapper">
  <div class="row">
    <div class="col-12">
        <ul class="nav nav-steps">
            <li class="active"><span class="step">1</span> <b>Order Details</b><span class="aro"><i class="fas fa-chevron-right"></i></span></li>
            <li class="step2"><span class="next step ">2</span> <b>Confirm & Pay</b><span class="aro"><i class="fas fa-chevron-right"></i></span></li>
            <li class="step3"><span class="next step s">3</span> <b>Submit Requirements</b></li>
        </ul>
    </div>
 </div>

 <div class="row step-one" style="display:">
    <div class="col-md-9">
        <h3>Customized your order</h3>
        <?php $cars = $this->rentacar_m->car_info_id($offers->car); //dump($offers);?>
        <?php foreach( $cars as $car): ?>

        <div class="row">
            <div class="col-4">
                <img src="<?php echo site_url('upload/'.$car->icon);?>" alt="" class="img-fluid">
            </div>
            <div class="col-5">
                <p><b><?php echo $offers->title;?></b> ( <?php echo $rentacar->name?> ) </p>
                <p>
                    <span style="color:gold">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                    <b> 5.0</b> (130)
                </p>
                <p class="align-bottom" style="position:absolute;bottom:0px"><b><a href="#" id="what_include">Show What's Include?</a></b></p>
            </div>
            <div class="col-3">
                <p><b>Duratoin:</b></p>

                <?php if($package == 'hourly'):?>
                <!-- HOurly -->
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control" id="time-unit">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                        </select>
                    </div>
                    <label for="inputPassword6"> &nbsp; Hours</label>
                </form>
                <!-- HOurly -->
                <?php elseif($package == 'daily'):?>

                <!-- daily -->
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control" id="time-unit">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                    </div>
                    <label for="inputPassword6"> &nbsp; Days</label>
                </form>
                <!-- days -->
                <?php else:?>

                <!-- Monthly -->
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control" id="time-unit">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>
                    <label for="inputPassword6"> &nbsp; Month</label>
                </form>
                <!-- Monthly -->

                <?php endif;?>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <br>
            <div class="card show_include" style="display:none">
                <div class="card-body">
                    <p><i class="far fa-clock"> </i> <b><?php echo strtoupper($package);?> - Package</b></p>
                    <?php 
                        // package
                        switch ($package) {
                            case "hourly":
                                // $package = 'hourly';
                                $offer = unserialize($offers->hourly); 
                                // dump($offer);
                                $details = $offer['h_details'];
                                $lunch = $offer['h_driver_lunch'];
                                $fuel = $offer['h_fuel'];
                                $r_cost = $offer['h_rcost'];
                                $rent = $offer['h_rent'];
                            break;
                            case "daily":
                                // $package = 'daily';
                                $offer = unserialize($offers->daily); 
                                // dump($offer);
                                $details = $offer['d_details'];
                                $lunch = $offer['d_driver_lunch'];
                                $fuel = $offer['d_fuel'];
                                $r_cost = $offer['d_rcost'];
                                $hours = $offer['d_hour'];
                                $overtime = $offer['d_overtime_rent'];
                                $rent = $offer['d_rent'];
                            break;
                            case "monthly":
                                // $package = 'monthly';
                                $offer = unserialize($offers->monthly); 
                                // dump($offer);
                                $details = $offer['m_details'];
                                $lunch = $offer['m_driver_lunch'];
                                $fuel = $offer['m_fuel'];
                                $r_cost = $offer['m_rcost'];
                                $hours = $offer['m_hour'];
                                $overtime = $offer['m_overtime_rent'];
                                $rent = $offer['m_rent'];
                            break;
                            default:
                                // $package = 'monthly';
                                $offer = unserialize($offers->monthly); 
                                // dump($offer);
                                $details = $offer['m_details'];
                                $lunch = $offer['m_driver_lunch'];
                                $fuel = $offer['m_fuel'];
                                $r_cost = $offer['m_rcost'];
                                $hours = $offer['m_hour'];
                                $overtime = $offer['m_overtime_rent'];
                                $rent = $offer['m_rent'];
                        }
                        

                        // ${$a}
                        ?>
                    <p><?php echo $details;?></p>
                    <hr>
                    <div class="row package_wrapper">
                        <div class="col-md-6 border-right">
                            <p class="includes">
                                <b>Driver Lunch :</b>         
                                <span class="float-right">
                                    <i class="<?php echo $icon = ($lunch == '1')? 'fas fa-check-square':'far fa-square' ?>"></i>
                                </span>
                            </p>
                            <p class="includes">
                                <b>Fuel :</b>         
                                <span class="float-right">
                                    <i class="<?php echo $icon = ($fuel == '1')? 'fas fa-check-square':'far fa-square' ?>"></i>
                                </span>
                            </p>
                        
                            <p class="includes">
                                <b>Road Cost :</b>         
                                <span class="float-right">
                                    <i class="<?php echo $icon = ($r_cost == '1')? 'fas fa-check-square':'far fa-square' ?>"></i>
                                </span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <?php if($package != 'hourly'):?>
                            <b>Duty Hour and Overtime</b>
                            <hr>
                            <p class="includes">
                                <b>Duty Hour :</b>         
                                    <span class="float-right"><b><?php echo $hours; ?></b> Hours</span>
                            </p>
                            <p class="includes">
                                <b>Overtime Fees :</b>         
                                    <span class="float-right"><b><?php echo $overtime; ?> BDT</b> Per/Hours</span>
                            </p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
        <?php //dump( $offers);?>
        <?php //dump( $rentacar);?>
        <?php endforeach; ?>
        
    </div>
    <div class="col-md-3">
        <p class="sub-total-val" style="display:none"><?php echo $rent;?></p>
        <div class="card">
            <div class="card-body">
                <p><b>Summary</b></p>
                <p class="sub-total">Subtotal: <span class="float-right"><?php echo $rent;?> BDT</span></p>
                <p class="">Service Fee: <span class="float-right"><span class="service_fee">200</span> BDT</span></p>
                <hr>
                <p class="">Total: <span class="float-right"><span class="total"><?php echo $rent+'200';?> </span> BDT</span></p>
                <br>
                <a href="#" class="btn btn-success btn-block con_to_check">Continue to Checkout</a>
                <p class="text-center"><small>You won't be charged yet</small></p>
            </div>
        </div>
        <img src="<?php echo site_url('img/cards.png');?>" alt="" class="img-fluid">
        <p class="text-center"><small>SSL SECURE PAYMENT <br>Your information is protected by 256-bit SSL encryption </small></p>
    </div>
  </div>

<div class="row step-two"  style="display:none">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <b>Abilable Blance</b>
            </div>
            <div class="card-body">
                <p>Perspnal Balance <span class="green"><span class="current_b">150</span> BDT</span></p>
            </div>
        </div>                          
        <br>
        <p><b>Remaining Payment: <span class="r_blance"><?php echo ($rent + '200')-'150';?> </span> BDT</b></p>
        <div class="card">
            <div class="card-header">
                <b>Select method for the remaining payment</b>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Cradit and Debit Cart
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Bkash
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rocket
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Nagod
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Paypal
                    </label>
                </div>
                
            </div>
        </div> 
        
    </div>
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-5">
                            <img src="<?php echo site_url('upload/'.$car->icon);?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <p>
                                <b><?php echo $offers->title;?></b> <br> <?php echo $rentacar->name?> 
                            </p> 
                            <p><small>
                                <span style="color:gold">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <b> 5.0</b> (130)
                                </small>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p><i class="far fa-clock"> </i> <b><?php echo strtoupper($package);?> - Package</b> <span class="float-right"><b><span class="s2_rent"><?php echo $rent;?></span> BDT</b></span></p>
                </div>
                <div class="card-body">
                    <p>Enter Promo code</p>
                    <hr>
                    <p>Service Fee <span class="float-right"><b><span class="s2_service_fee"> 200</span> BDT</b></span></p>
                    <hr>
                    <p><b>Total</b> <span class="float-right"><b><span class="s2total"><?php echo $rent + '200';?></span> BDT</b></span></p>
                    <br>
                    <a href="#" class="btn btn-success btn-block confirm_pay">Confirm & Pay</a>
                    <p class="text-center"><small>SSL SECURE PAYMENT</small></p>
                </div>
            </div>        
    </div>
</div>
<div class="row step-three"  style="display:none">
  <div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <b>Requirements</b>
        </div>
        <div class="card-body">
            <!-- pick up info -->
            <p><b>Pick up info</b></p>
            <form>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="address" placeholder="Address">
                </div>

            </div>   <!-- form-group row -->
            <div class="form-group row">
                <label for="salesreturn" class="col-sm-2 col-form-label"> District </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>District</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
                <label for="salesreturn" class="col-sm-2 col-form-label"> Division </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>District</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="salesreturn" class="col-sm-2 col-form-label"> Post Office </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Post Office</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
                <label for="salesreturn" class="col-sm-2 col-form-label"> Police Station </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Police Station</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
            </div>
            </form> 
            <!-- pick up info -->
            <hr>
            <!-- distnation info -->
            <p><b>Distnation</b></p>
            <form>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="address" placeholder="Address">
                </div>

            </div>   <!-- form-group row -->
            <!-- form-group row -->
            <div class="form-group row">
                <label for="salesreturn" class="col-sm-2 col-form-label"> District </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>District</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
                <label for="salesreturn" class="col-sm-2 col-form-label"> Division </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>District</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="salesreturn" class="col-sm-2 col-form-label"> Post Office </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Post Office</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
                <label for="salesreturn" class="col-sm-2 col-form-label"> Police Station </label>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Police Station</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>
            </div>
            </form> 
            <!-- distnation info -->
            <hr>
            <p><b>Note</b></p>
            <textarea class="form-control" name="note" id="" cols="30" rows="5"></textarea>
        </div>
      </div>                          
        
    </div>

    <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-5">
                            <img src="<?php echo site_url('upload/'.$car->icon);?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <p>
                                <b><?php echo $offers->title;?></b> <br> <?php echo $rentacar->name?> 
                            </p> 
                            <p><small>
                                <span style="color:gold">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <b> 5.0</b> (130)
                                </small>
                            </p>
                        </div>
                    </div>
                    <hr><p><i class="far fa-clock"> </i> <b><?php echo strtoupper($package);?> - Package</b> <span class="float-right"><b><span class="s2_rent"><?php echo $rent;?></span> BDT</b></span></p>
                </div>
                <div class="card-body">
                    <p>Enter Promo code</p>
                    <hr>
                    <p>Service Fee <span class="float-right"><b><span class="s2_service_fee"> 200</span> BDT</b></span></p>
                    <hr>
                    <p><b>Total</b> <span class="float-right"><b><span class="s2total"><?php echo $rent + '200';?></span> BDT</b></span></p>
                    <br>
                    <a href="#" class="btn btn-success btn-block">Complete Order</a>
                    <p class="text-center"><small>SSL SECURE PAYMENT</small></p>
                </div>
            </div>        
    </div>
  </div>


</div>

<br><br><br><br><br><br>

<script>
    $(document).ready(function() {
        // show hide includes 
        $('#what_include').click(function(event){
            event.preventDefault();
            var str = $(this).html();
            $('.show_include').slideToggle('slow', function() {
                if ($('.show_include').is(':visible')) {
                    $('#what_include').html('Hide What\'s Include?');       
                } else {
                    $('#what_include').html('Show What\'s Include?');       
                }        
            });
        });

        //unit and price 
        $('#time-unit').change(function(){
            var rent = $('.sub-total-val').html();
            var unit = $(this).val();
            var service_fee = $('.service_fee').html();
            var current_rent = unit*rent;

            $('.sub-total>span').html(current_rent+' BDT');
            $('.total').html(Number(current_rent)+Number(service_fee));

            
            


        });

        $('.con_to_check').click(function(){
            $('.step2').addClass('active');
            $('.step-one').css('display', 'none');
            $('.step-two').css('display', '');

            var unit = $('#time-unit').val();
            var rent = $('.s2_rent').html();
            var service_fee = $('.s2_service_fee').html();
            var current_rent = unit*rent;
            var total = Number(current_rent)+Number(service_fee);
            var c_balance = $('.current_b').html();


            $('.s2_rent').html(current_rent);
            $('.s2total').html(total);
            $('.r_blance').html(total - Number(c_balance));

        });

        $('.confirm_pay').click(function(){
            $('.step3').addClass('active');
            $('.step-one').css('display', 'none');
            $('.step-two').css('display', 'none');
            $('.step-three').css('display', '');
        });
    });
</script>