<br><br><br><br>
<div class="container offer_wrapper">
  <div class="row">
      <div class="col-md-8">
          <?php //dump($offers); ?>
          <?php //dump($rentacar); ?>
        <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dhaka</a></li>
                <li class="breadcrumb-item"><a href="#">Dhaka</a></li>
                <li class="breadcrumb-item"><a href="#">Uttara</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $rentacar->name;?></li>
            </ol>
        </nav>  -->
        <!-- nav -->
        <!-- rent a car profile -->
        <div class="row align-items-center r_profile">
            <div class="col-12">
                <!-- title -->
                <h2 class="offer-title"><?php echo $offers->title; ?></h2>
            </div>
            <div class="col-2 ">
                <img src="<?php echo site_url('upload/'.$rentacar->logo);?>" class="img-fluid rounded-circle" style="height:50px; width:50px" alt="">
            </div>
            <div class="col-10 ">
                <p><b><a href="<?php echo site_url('rentacar/profile/'.$rentacar->id);?>"><?php echo $rentacar->name;?></a></b> | 
                    <span>                        
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        5.0
                    </span> |
                    <b>66 Orders in Queue</b>

                </p>
                <small style="color:#e6e6e6">
                    <span><i class="fas fa-check-circle"></i> <b>Verified User</b></span> | 
                    <span><i class="fas fa-dollar-sign"></i> <b>Payment Verified</b></span> | 
                    <span><i class="fas fa-map-marker"></i> <b>Address Verified</b></span>
                </small>
            </div>
        </div>
        <br>
        <!-- courasul -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo site_url('img/rent-a-car.jpg');?>" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo site_url('img/rent-a-car.jpg');?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo site_url('img/rent-a-car.jpg');?>" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- courasul -->
        <!-- details -->
        <br>
        <h3>Offer Details</h3>
        <p><?php echo $offers->details; ?></p>
        <br>
        <h3>About The Seller</h3>
        <!-- avout rent-a-car -->
        <div class="row">
            <div class="col-6">
                <p><i class="far fa-map-marker"> </i> From <br><b><?php echo $this->rentacar_m->district_by_id($rentacar->district);?></b></p>
                <p><i class="far fa-clock"> </i> Avg. response time <br><b>1 hour</b></p>
            </div>
            <div class="col-6">
                <p><i class="far fa-user"> </i> Member since <br><b><?php echo $rentacar->date;?></b></p>
                <p><i class="far fa-car"> </i> Last Ride <br><b>1 day</b></p>
            </div>
            <div class="col-12">
                <hr>
                <p><?php echo $rentacar->about;?></p>
                <br>
            </div>
        </div>
        <!-- review -->
        <div class="row review_wrapper">
            <div class="col-12">
                <h4>125 Review 
                    <span>                        
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        5.0
                    </span>
                </h4>
                <br>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-2">
                        <p><b>5 Star</b></p>
                    </div>  
                    <div class="col-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">(15)</div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p><b>4 Star</b></p>
                    </div>  
                    <div class="col-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">(15)</div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p><b>3 Star</b></p>
                    </div>  
                    <div class="col-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">(15)</div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p><b>2 Star</b></p>
                    </div>  
                    <div class="col-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">(15)</div>
                </div>                
                <div class="row">
                    <div class="col-2">
                        <p><b>1 Star</b></p>
                    </div>  
                    <div class="col-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">(15)</div>
                </div>
            </div>
            <div class="col-md-5">
                <p><b>Rating Breakdown</b></p>
                <p>Seller communication level <span class="float-right">4.9 <i class="fa fa-star"></i></span></p>
                <p>Recommend to a friend <span class="float-right">4.9 <i class="fa fa-star"></i></span></p>
                <p>Car Condations <span class="float-right">4.9 <i class="fa fa-star"></i></span></p>
                <p>Driver Reating <span class="float-right">4.9 <i class="fa fa-star"></i></span></p>
            </div>
            <div class="col-12">
            <hr>
            <div class="row">
            <div class="col-2 col-md-1">
                <img src="<?php echo site_url('img/profile.jpg');?>" class="img-fluid" style="height:50px; width:50px; border-radius:50px;" alt="">  
            </div>
            <div class="col-10 col-md-11">
                <p><b>Abdul Rahim <i class="fa fa-star"> </i> 5</b></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p><b>Published 2 Days Ago</b></p>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-2 col-md-1">
                <img src="<?php echo site_url('img/profile.jpg');?>" class="img-fluid" style="height:50px; width:50px; border-radius:50px;" alt="">  
            </div>
            <div class="col-10 col-md-11">
                <p><b>Abdul Rahim <i class="fa fa-star"> </i> 5</b></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p><b>Published 2 Days Ago</b></p>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-2 col-md-1">
                <img src="<?php echo site_url('img/profile.jpg');?>" class="img-fluid" style="height:50px; width:50px; border-radius:50px;" alt="">  
            </div>
            <div class="col-10 col-md-11">
                <p><b>Abdul Rahim <i class="fa fa-star"> </i> 5</b></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p><b>Published 2 Days Ago</b></p>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-2 col-md-1">
                <img src="<?php echo site_url('img/profile.jpg');?>" class="img-fluid" style="height:50px; width:50px; border-radius:50px;" alt="">  
            </div>
            <div class="col-10 col-md-11">
                <p><b>Abdul Rahim <i class="fa fa-star"> </i> 5</b></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p><b>Published 2 Days Ago</b></p>
            </div>
            </div>
            </div>
        </div>
        
      </div>
      <div class="col-md-4 package_wrapper">
        <?php 
            $h_offer = unserialize($offers->hourly); 
            $d_offer = unserialize($offers->daily); 
            $m_offer = unserialize($offers->monthly); 
            
        ?>
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hourly"><b>Hourly</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#daily"> <b>Daily</b> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#monthly"><b>Monthly</b></a>
            </li>
        </ul>
        <div class="tab-content" style="">
            <div role="tabpanel" class="tab-pane active" id="hourly">
                <p><?php echo $h_offer['h_details']?></p>
                <b>Includes</b>
                <hr>
                <p class="includes">
                    <b>Driver Lunch :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($h_offer['h_driver_lunch'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <p class="includes">
                    <b>Fuel :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($h_offer['h_fuel'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <p class="includes">
                    <b>Road Cost :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($h_offer['h_rcost'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <!-- <p class="includes">
                    <b>Overtime :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($h_offer['h_overtime'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p> -->
                <br>
                <p class="text-center"><a href="<?php echo site_url('rentacar/order_process/'.$offers->id.'/hourly');?>" class="btn btn-success">Order Now (<?php echo $h_offer['h_rent']?> BDT)</a></p>
            </div>
            <!-- hourly -->
            <div role="tabpanel" class="tab-pane fade in" id="daily">
                <p><?php echo $d_offer['d_details']?></p>
                <b>Includes</b>
                <hr>
                <p class="includes">
                    <b>Driver Lunch :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($d_offer['d_driver_lunch'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                   </span>
                </p>
                <p class="includes">
                    <b>Fuel :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($d_offer['d_fuel'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <p class="includes">
                    <b>Road Cost :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($d_offer['d_rcost'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <!-- <p class="includes">
                    <b>Overtime :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($d_offer['d_overtime_include'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p> -->
                <b>Duty Hour and Overtime</b>
                <hr>
                <p class="includes"><b>Duty Hours:</b> <span class="float-right"><?php echo $d_offer['d_hour']?> Hours</span></p>
                <?php if($d_offer['d_overtime']=='1'):?>
                <p class="includes"><b>Overtime Fees:</b> <span class="float-right"><b><?php echo $d_offer['d_overtime_rent']?> BDT</b> per/hour</span></p>
                <?php endif;?>
                <br>
                <p class="text-center"><a href="<?php echo site_url('rentacar/order_process/'.$offers->id.'/daily');?>" class="btn btn-success">Order Now (<?php echo $d_offer['d_rent']?> BDT)</a></p>
            </div>
            <!-- daily -->
            <div role="tabpanel" class="tab-pane fade in" id="monthly">
                <p><?php echo $m_offer['m_details']?></p>
                <b>Includes</b>
                <hr>
                <p class="includes">
                    <b>Driver Lunch :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($m_offer['m_driver_lunch'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <p class="includes">
                    <b>Fuel :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($m_offer['m_fuel'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <p class="includes">
                    <b>Road Cost :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($m_offer['m_rcost'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p>
                <!-- <p class="includes">
                    <b>Overtime :</b>         
                    <span class="float-right">
                        <i class="<?php echo $icon = ($m_offer['m_overtime'] == '1')? 'fas fa-check-square':'far fa-square' ?>" ></i>
                    </span>
                </p> -->
                <b>Duty Hour and Overtime</b>
                <hr>
                <p class="includes"><b>Duty Hours:</b> <span class="float-right"><?php echo $m_offer['m_hour']?> Hours</span></p>
                <?php if($m_offer['m_overtime']=='1'):?>
                <p class="includes"><b>Overtime Fees:</b> <span class="float-right"><b><?php echo $m_offer['m_overtime_rent']?> BDT</b> per/hour</span></p>
                <?php endif;?>
                <br>
                <p class="text-center"><a href="<?php echo site_url('rentacar/order_process/'.$offers->id.'/monthly');?>" class="btn btn-success">Order Now (<?php echo $m_offer['m_rent']?> BDT)</a></p>
            </div>
        </div>
        <!-- monthly -->

      <!-- tab -->
      <br>
      <?php $cars = $this->rentacar_m->car_info_id($offers->car); //dump($offers);?>
      <!-- car info -->
      <div class="card">
        <?php foreach( $cars as $car): ?>
        <div class="card-header">
           <b>Car Info</b>
        </div>
        <div class="card-body">
            <img src="<?php echo site_url('upload/'.$car->icon);?>" alt="" class="img-fluid">
            <div class="row">   
                <div class="col-12">
                    <br>
                    <p><b><?php echo $this->rentacar_m->brand_by_id($car->brand) .' - '. $car->model;?></b></p>
                    <hr>
                </div>
                <div class="col-6">
                    <p><i class="fa fa-cog"></i> Wheels:<span class="float-right"><b><?php echo $car->wheel;?></b></span></p>
                    <p><i class="fas fa-door-open"></i>Doors:<span class="float-right"><b><?php echo $car->door;?></b></span></p>
                </div>
                <div class="col-6" style="border-left:1px solid #e6e6e6">
                    <p><i class="fa fa-chair"></i> Seats no:<span class="float-right"><b><?php echo $car->wheel;?></b></span></p>
                    <p><i class="far fa-users"></i>Passangers:<span class="float-right"><b><?php echo $car->door;?></b></span></p>
                </div>
                <div class="col-12">
                    <hr>
                    <p><i class="fas fa-car"></i> Car Conditions: <span class="float-right"><b><?php echo ($offers->conditions == '1')? 'New':'Used';?></b></span></p>
                    <p><i class="far fa-calendar-alt"></i> Model Year: <span class="float-right"><b><?php echo $offers->year ;?></b></span></p>
                    <p><i class="far fa-fan"></i> AC: <span class="float-right"><b><?php echo strtoupper($offers->ac);?></b></span></p>
                    <p><i class="fas fa-gas-pump"></i> Fuel Type: <span class="float-right"><b><?php echo ucfirst(str_replace(',',', ',$offers->fuel));?></b></span></p>

                </div>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- car info -->

      </div>
  </div>
</div>


