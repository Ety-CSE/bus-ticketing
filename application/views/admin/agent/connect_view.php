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

<div class="row view">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- <h3 class="servicev_title"><?php echo $service->s_name; ?></h3> -->
      </div>
    </div>
    <div class="row">
        <?php $seller = $this->user_m->customer_info_id($service->seller_id); ?>

      <div class="col-12 col-lg-2 col-md-2 col-sm-3">
        <div style="height:160px;width:100%;background:url('<?php echo site_url('upload/'.$seller->photo); ?>') center center; background-size:cover"></div>

      </div>
      <div class="col-12 col-lg-4 col-md-4 col-sm-6">
         <?php 
          if ($service->seller_id) {
        ?>
        <h3 class="servicev_title"><?php echo $service->s_name; ?></h3>
        <p class="service_provider"><?php echo $seller->name; ?></p>
        <p class="destance"><i class="fa fa-street-view"></i> <?php echo sizeof($this->service_m->connect_by_service($service->id)); ?> | 
            <span class="review">
              
              <i class="la la-star"></i>
            </span> (<?php echo $this->service_m->star_by_review($service->id); ?> %)</p>
        <p><i class="fa fa-map-marker"></i> <small><?php echo $this->service_m->police_station_by_id($seller->police_station); ?> , <?php echo $this->user_m->district_by_id($seller->district); ?></small></p>
        <hr>
        <p class="details"><?php   echo $service->s_des; ?></p><br>
        <img src="<?php echo $photo_id = ($service->s_photo != "") ? site_url('upload/'.$service->s_photo) :site_url('images/profile.jpg') ?>" alt="" class="img-fluid" width="100px;">
        <?php
          } else {
        ?>
          <p class="text-center"><i class="la la-warning la-3x"></i></p>
          <h3 class="servicev_title text-center">Sorry! <br><small>There is No Services in this page.</small></h3>


        <?php
          }
          
         ?>
      </div>

      <div class="col-12 col-lg-4 col-md-4 col-sm-6">
        <div class="row contact-view">
          <div class=" col-12">
            <?php //dump($seller) ?>
            <p><b>Mobile No:</b> <?php echo $seller->phone; ?></p>
            <p><b>Address:</b> <?php echo $seller->address; ?>, <?php echo $this->service_m->police_station_by_id($seller->police_station); ?>,  <?php echo $this->service_m->district_by_id($seller->district); ?>, <?php echo $this->service_m->division_by_id($seller->division); ?> - <?php echo $seller->zip; ?></p>
              <br><br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="">
                <i class="la la-lightbulb-o"> </i> <b>Note :</b> Now you are connected to the Seller. You can contact "this" seller or seller will contact you soon. 
              </p>
              
            </div>
            
          </div>
        </div>
       
      </div>
      
      
 
    </div>
  </div>
</div>
<hr>
<!-- Desktop SERVICES -->
<div class="row services">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 style="font-size: 1.3em;">More Services Shofiqul Islam Offer</h3>
      </div>

      <!-- Loop -->
      <?php foreach ($services as $s) {
       // echo $s->s_name;
      $loop .='<div class="col-lg-3">';
      $loop .='  <div class="content-fluid">';
      $loop .='    <a href="'.site_url('service/view/'.$s->id).'" class="row">';
      $loop .='      <div class="col-12">';
      $loop .='        <img src='. site_url("upload/".$s->s_photo).' alt="" class="img-fluid">';
      $loop .='      </div>';
      $loop .='      <div class="col-12"><h3 class="servicev_title">'.$s->s_name.'</h3></div>';
      $loop .='      <div class="col-12">';
      $loop .='        <p class="destance"><i class="fa fa-street-view"></i> '.  sizeof($this->service_m->connect_by_service($s->id)).' | ';
      $loop .='        <small class="review">';
      $loop .='          <i class="la la-star"></i>';
      $loop .='        </small>('.$this->service_m->star_by_review($s->id) .' %)</p><hr>';
      $loop .='        <p class="service_provider">'.substr($s->s_des,0,150).' ... </p><hr>';
      $loop .='        <button class="btn btn-outline-success pull-right"> Order</button>';
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
    });


    // Order Connect

    $('#order-contact').click(function(){
      $(this).css('display', 'none');
      var service_id = "<?php echo $service->id;?>";
      var customer_id = "<?php echo $this->session->userdata('id');?>";          
      var date = '<?php echo $today = date("Y-m-d H:i:s");  ?>';
      var seller_id = "<?php echo $service->seller_id;?>";
      var url = '<?php echo site_url('service/connect') ?>'
      var data = {
        service_id : service_id,
        customer_id : customer_id,
        seller_id : seller_id,
        date : date,
      };
      console.log(data);
      // // AJAX
      $.post(url, data, function(result){
        if(result){
          alertify.success('<p class="text-center" style="color:#fff;margin:0px">Your connected</p>');
          // view contacts
          $('.contact-view').css('display', 'block');
        }else{
          
           alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
        }
      });
    });



    // LOGIN Rrequired

    $("#Login").on( 'click', function () {
        // Extend existing 'alert' dialog
        if(!alertify.errorAlert){
          //define a new errorAlert base on alert
          alertify.dialog('errorAlert',function factory(){
            return{
                    build:function(){
                        var errorHeader = '<span class="la la-check-circle-o la-2x" '
                        +    'style="vertical-align:middle;color:#0ca940;">'
                        + '</span> Login Required !';
                        this.setHeader(errorHeader);
                    }
                };
            },true,'alert');
        }
        //launch it.
        // since this was transient, we can launch another instance at the same time.
        var re_url = "<?php echo site_url('customer/customer_login') ?>";
        var red_url = "<?php echo current_url() ?>";
        console.log(red_url);

        var form = "<p class='text-center' style='margin-top: 30px;'>";
            form += "<i class='la la-check-circle-o la-2x'></i>";
            form += "<input type='text' name='email' id='email' class='form-control' placeholder='Email'>";
            form += "</div></div>";
            form += "<div class='form-group row'><label for='password' class='col-sm-2 col-form-label'>Password</label><div class='col-sm-10'>";
            form += "<input type='password' name='password' id='password' class='form-control' placeholder='Password'>";
            form += "<input type='hidden' name='re_url' class='form-control' value='"+red_url+"'>";
            form += "</div></div>";
            form += "<div class='form-group row'><div class='col-sm-10 offset-sm-2'>";
            form += "<input type='submit' value='Login' name='Login_button' id='Login_button' class='form-control' style='cursor:pointer'>";
            form += "</div></div>";
            form += "</form>";

        alertify
            .errorAlert("<p class='text-center'><img src='<?php echo site_url('images/logo.png') ?>'> </b></p> <br/>"+ form +"<br>"+
                // "Register" + 
                "<a href='<?php echo site_url('customer/registration') ?>' id='reg-acount'> Create a Account </a>" +
                " | " + 
              "<a href='javascript:alertify.errorAlert(\"Forgot Password Feature will Comming soon!\");'> Forgot Password </a>");

        alertify.complete(

          );

      });    

  });



 
</script>