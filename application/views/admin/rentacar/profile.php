  <br><br><br><br>
<div class="container-fluid profile_wrapper">
  <div class="row">
    <div class="col-md-4">
       <div class="card">
        <div class="logo" style="background:url(<?php echo site_url('upload/'.$rentacar->logo);?>) center center no-repeat;"></div>
        <h4 class="text-center"><b><?php echo $rentacar->name?></b></h4>
        <p class="text-center">
            <span style="color:gold">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
            <b>5.0</b>
            (65 reviews)
        </p>
        <p class="text-center"><a href="#"><i class="fas fa-flag"> </i> Report</a></p>
        <div class="row">
            <div class="col-6">
                <a href="#" class="btn btn-block btn-primary"> Contact me</a>
            </div>
            <div class="col-6">
                <a href="#" class="btn btn-block btn-outline-primary"> Get Quote</a>
            </div>
        </div>
        <br>
        <hr>
        <p><i class="far fa-map-marker"> </i> From: <span class="float-right"><b><?php echo $this->rentacar_m->district_by_id($rentacar->district);?></b></span></p>
        <p><i class="far fa-user"> </i> Member since: <span class="float-right"><b><?php echo $rentacar->date;?></b></span></p>
        <p><i class="far fa-clock"> </i> Avg. Response Time: <span class="float-right"><b>1 Houre</b></span></p>
        <p><i class="far fa-car"> </i> Last Ride: <span class="float-right"><b>1 Day Ago</b></span></p>
       </div>
       <br>
       <div class="card">
        <h4>Description</h4>
        <p><?php echo $rentacar->about;?></p>
        <hr>
        <h4>Language</h4>
        <p><b>English</b>  - Fluent</p> 
        <p><b>বাংলা</b>  - Fluent</p> 
        <hr>
        <h4>Social Presence</h4>
        <nav class="social">
            
            <ul class="nav nav-moblie text-center">
              <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i> </a></li>
              <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i> </a></li>
              <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-2x fa-instagram"> </i> </a></li>
              <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-2x fa-tripadvisor"> </i> </a></li>
              <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-2x fa-youtube"> </i> </a></li>
            </ul>
          </nav>   
       </div>

    </div>
    <div class="col-md-8">
        <div class="c_photo"  style="background:url(<?php echo site_url('upload/'.$rentacar->c_photo);?>) center center no-repeat;"></div>
        <br>
        <h4>Offers</h4>
        <hr>
        <div class="row">
            <?php foreach($offers as $offer):?>
            <div class="col-md-4">
            <a href="<?php echo site_url('rentacar/offer/'.$offer->id);?>">
                <div class="card card-offer" style="padding:0px;">
                    <img src="<?php echo site_url('upload/'.$this->user_m->car_icon_by_id($offer->car));?>" class="card-img-top" style="height:175px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $offer->title;?></h5>
                        <p class="card-text"  style="height:60px;font-size:.9em"><?php echo substr($offer->details, 0, 100);?>...</p>
                        <br>
                        <p class="text-center">
                            <span style="color:gold">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <b>5.0</b>
                            (65 reviews)
                        </p>
                    </div>
                    <div class="card-footer">
                    <?php $hourly = unserialize($offer->hourly); ?>
                    <p><i class="fas fa-heart"> </i><span class="float-right">STARTING FORM: <?php echo $hourly['h_rent'];?> <b>BDT</b></span></p>
                    </div>
                </div>
            </a>
            </div>
            <?php endforeach;?>
        </div>
        <br><br><br>
        <h4>Clients Reviews</h4>
        <hr>
        <div class="row">
           <div class="col-2 col-md-1">
            <img src="<?php echo site_url('img/profile.jpg');?>" class="img-fluid" style="height:50px; width:50px; border-radius:50px;" alt="">  
           </div>
           <div class="col-10 col-md-11">
            <p><b>Abdul Rahim <i class="fa fa-star" style="color:gold"> </i> 5</b></p>
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
            <p><b>Abdul Rahim <i class="fa fa-star" style="color:gold"> </i> 5</b></p>
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
            <p><b>Abdul Rahim <i class="fa fa-star" style="color:gold"> </i> 5</b></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
            <p><b>Published 2 Days Ago</b></p>
           </div>
        </div>

    </div>
  </div>
</div>
