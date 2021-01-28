


  <div class="hero-slider row">
  <div class="col-md-5">
    <h2>Search a Rent-a-car</h2>
    <p>Best way to find a rent-a-car in your area. Just type name of your area and hit search and see the magic.</p>
     
     <!-- Search form -->

     <form class="form-inline row">
      
      <div class="form-group col-8 mb-2 ">
        <label for="inputPassword2" class="sr-only">Where you need rent-a-car?</label>
        <!-- <input type="search" class="form-control" id="inputPassword2" placeholder="Where you need rent-a-car?"> -->
        <?php 
          $this->load->model('user_m');
          echo form_dropdown('division', $this->user_m->division_dw(),$order->division,'class="form-control col-12"  required="required" id="division" '); ?>
      </div>
      <button type="submit" class="btn btn-primary mb-2 col-4">Search</button>
    </form>

  </div>
  <div class="col-md-7">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo site_url('images/slider.png');?>" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo site_url('images/slider.png');?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo site_url('images/slider.png');?>" alt="Third slide">
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
  </div>
</div>


<div class="row w_app">
  <div class="container">
    <div class="row">
      <!-- <div class="col-0 col-lg-7 col-md-7 col-sm-2"></div> -->
      <div class="content-header col-12">

         <h3 class="pull-right"> 
            <span>Call - imo | whatsApp</span> +880 1717 440 931
          </h3>
        <!-- <p class="pull-right"><i class="la la-whatsapp la-3x"></i></p> -->
        </div>
    </div>
  </div>
</div>


<!-- POULAR RENT A CAR -->
<div class="row popular">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        <h4>Popular Rent a Car in <span class="b_color">Mirpur, Dhaka</span></h4>
      </div>
    </div>
    <div class=" services owl-carousel owl-theme"> 
        <!-- Loop -->
      <?php foreach ($service as $s) {
       // echo $s->s_pgoto;
      $seller = $this->user_m->customer_info_id($s->seller_id); 
      $loop .='<div class=" item">';
      $loop .='  <div class="content-fluid">';
      $loop .='    <a href="'.site_url('service/view/'.$s->id).'" class="row">';
      $loop .='      <div class="col-12 cover" >';
      if ($s->s_photo) {
        $img = explode(',', $s->s_photo);
         
        $loop .= '<img src="';
        $loop .= site_url('upload/'.$this->service_m->media_by_id($img[0]));
        $loop .= '" class="img-fluid">';
          
      } else {
        # code...
        $loop .='      <img src="'. site_url('images/services.jpg').'" class="img-fluid"> ';
      }
      $loop .='       <div class="seller_photo" style="background:url('.site_url('upload/'.$seller->photo).') center center; background-size:cover"></div>';
      $loop .='      </div>';

      $loop .='      <div class="col-12">';
      $loop .='        <h3 class="servicev_title">'.$s->s_name.'</h3>';
      $loop .='      </div>';

      $loop .='      <div class="col-12">';
      $loop .='        <p class="area"><i class="fa fa-map-marker"></i> <small>'.$this->service_m->police_station_by_id($seller->police_station).', '.$this->user_m->district_by_id($seller->district).'</small></p>';
      $loop .='      </div>';

      $loop .='      <div class="col-5">';
      $loop .='        <p class="destance"> <i class="fa fa-car"> </i> '.sizeof($this->service_m->connect_by_service($s->id)).' <small>Trip</small> </p>';
      $loop .='      </div>';
      $loop .='      <div class="col-7">';
      $loop .='        <p class="destance">';
      $loop .='        <small class="review">';
      $loop .='          <i class="la la-star"></i>';
      $loop .='        </small> 5.0 ('.$this->service_m->star_by_review($s->id).' %) </p>';
      $loop .='      </div>';
      
      
      // $loop .='      <div class="row">';
      $loop .='       <div class=" button-right">';
      $loop .='         <button class="btn btn-outline-secondary btn-sm">Request Quote</button>';
      $loop .='       </div>';
      $loop .='       <div class=" button-left">';
      $loop .='         <button class="btn btn-success  btn-sm">Message</button>';
      $loop .='       </div>';
      // $loop .='      </div>';
      $loop .='    </a>';
      $loop .='  </div>';
      $loop .='</div>';
      } 
      echo $loop;
      ?>
    </div>
  </div>
</div>

<!-- POULAR RENT A CAR -->









<!-- Footer -->

<div class="row footer">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <!-- <img src="<?php echo site_url('images/logo.png') ?>" alt="" class="img-fluid"> -->
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Terms of services</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('customer/agent_registration') ?>">Become an Agent</a>
          </li> -->
          
        </ul>
        <p>Coplyright &copy; Aurora Technologies reserved  </p>
      </div>
      <div class="col-6">
        <p class="pull-right" style="position: absolute;right: 0px; bottom: 10px; color: #ce1283">
            <i class="la la-power-off" style="color: #ce1283"></i> by <a class="" target="_blank" href="http://auroratec.net"><img src="<?php echo site_url('images/logo-pink.png') ?>" alt="" style="height: 20px"></a>
          </p>
      </div>
    </div>
  </div>
</div>


<script>
  
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>