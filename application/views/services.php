<div class="row c_search" style="display: none;">
      <i id="s_close" class="la la-times la-2x"></i>
  <div class="container">
    <div class="row">
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
      <div class="content-header col-12 col-lg-8 col-md-8 col-sm-10">
          <h2 class="text-center hidden-xs-down">
            <span>FIND THE PERFECT</span> SERVICES  FOR YOU
       </h2>
          <form action="" method="GET">
            <input type="search" class="form-control c_search_input" data-action="<?php echo site_url('service/search_str');?>" id="s_search" placeholder="Search">
            <div class="search_sug"></div>
          </form>
          <p class="">Such as repair, plumbing, home shifting, car services, car rental & more ...</p>

        </div>
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
    </div>
  </div>
</div>


<div class="row w_app w_viewpage">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6 col-sm-6">
        <div class="col-auto">
          <label class="sr-only" for="search">Search</label>
          <div class="input-group mb-2 mt-2">
            <input type="search" class="form-control" id="search" placeholder="Search Services here ...">
          </div>
        </div>
      </div>
      <div class="content-header col-12 col-lg-6 col-md-6 col-sm-6">
         <h3 class="pull-right"> 
            <span>Call - imo | whatsApp</span> +880 1717 440 931
          </h3>
        </div>
    </div>
  </div>
</div>

<div class="row view s_view" style="min-height: 150px ; margin-top: 20px;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="servicev_title"><?php echo $service->s_name; ?></h3>
      </div>
    </div>
    <div class="row">
     <div class="col-12"> 
      <h3>Find your Services by Sorting Categories and Area</h3><br>
        <form class="form-row row sorting">
          <div class="col-3">
            <label class="" for="inlineFormInputName2">Select Category</label>
            <?php 
              $categories = $this->service_m->categories();
              $s_categories = $this->service_m->s_categories('6');
              echo form_dropdown($category , $categories, $category, $extra = 'class="custom-select form-control" id="cat"');
             ?>
            
         </div>
          <div class="col-3">
            <label class="" for="inlineFormInputName2">Select Sub-category</label>
            <?php 
              echo form_dropdown($s_category , $s_categories, $s_category, $extra = 'class="custom-select form-control" id="s_cat"');
             ?>
         </div>
          <div class="col-3">
            <label class="" for="inlineFormInputName2">Sort Services</label>
            <button class="btn btn-outline-success btn-block outline" id="s_sort"><i class="la la-sort-alpha-asc"></i> Short</button>
         </div>

          <div class="col-3">
            <!-- <label class="" for="inlineFormInputName2">Select Budget</label>
            <?php 
              echo form_dropdown($category , array('1', '2','3','4'), $category, $extra = 'class="custom-select form-control"');
             ?> -->
          </div>
        </form>
     </div>
    </div>
  </div>
</div>
<hr>
<!-- Desktop SERVICES -->
<div class="row services">
  <div class="container">
    <div class="row" id="s_wrapper">

      <!-- Loop -->
      <?php foreach ($services as $s) {
       // echo $s->s_name;
      $seller = $this->user_m->customer_info_id($s->seller_id); 
      $loop .='<div class="col-lg-4">';
      $loop .='  <div class="content-fluid">';
      $loop .='    <a href="'.site_url('service/view/'.$s->id).'" class="row">';
      $loop .='      <div class="col-4" >';
      $loop .='       <div style="height:94.99px;width:94.33px;background:url('.site_url('upload/'.$seller->photo).') center center; background-size:cover"></div>';
      $loop .='      </div>';
      $loop .='      <div class="col-8">';
      $loop .='        <h3 class="servicev_title">'.$s->s_name.'</h3>';
      $loop .='        <p class="destance"><i class="fa fa-street-view"></i> '.sizeof($this->service_m->connect_by_service($s->id)).' | ';
      $loop .='        <small class="review">';
      $loop .='          <i class="la la-star"></i>';
      $loop .='        </small> ('.$this->service_m->star_by_review($s->id).' %)';
      $loop .='        </p><p class="service_provider">'.$seller->name.'</p>';
      $loop .='        <p style="border-top:1px solid #dadada"><i class="fa fa-map-marker"></i> <small>'.$this->service_m->police_station_by_id($seller->police_station).', '.$this->user_m->district_by_id($seller->district).'</small></p>';
      $loop .='      </div>';
      $loop .='    </a>';
      $loop .='  </div>';
      $loop .='</div>';
      } 
      echo $loop;
      ?>



    </div>
  </div>
</div>


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
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('customer/agent_registration') ?>">Become an Agent</a>
          </li>
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
  $(document).ready(function(){
    $('#search').focus(function(){
      $('.c_search').css('display', 'block');
      $(this).css('display', 'none');
      $('.w_viewpage').css('margin-top', '0px');
      $('#s_search').focus();
    });

    $('#s_close').click(function(){
      $('.c_search').css('display', 'none');
      $('#search').css('display', 'block');
      $('.w_viewpage').css('margin-top', '75px');
      // $('#s_search').focus();
    });


    // Sub Cat AJAX

    $('#cat').change(function(){
      var id = $(this).val();
      var url = '<?php echo site_url('service/sub_cat_by_cat/') ?>'+id;

      $.get( url, function( data ) {
        $( "#s_cat" ).html( data );
      });      
    });


    $('#s_sort').click(function(){
      event.preventDefault();
      var id = $("#cat").val();
      var url = '<?php echo site_url('service/service_sort/') ?>'+id;

      $.get( url, function( data ) {
        $( "#s_wrapper" ).html( data );
      });      
    });
      

  
  });  


 
</script>