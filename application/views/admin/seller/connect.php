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

<?php // dump($service) ?>

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


<!-- services body -->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">
					<i class="la la-street-view  la-2x" style="color:#14d963;"></i>
					 My Service Connections
					 <hr>
				</h3>
			</div>
		</div>		
	</div>
</div>

<div class="row services-tab-body">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12 col-12 col-sm-12" style="">
				<!-- tab -->
					<div class="card" style="width: 100%;">
					  <?php //dump($connects); ?>
					  <ul class="list-group list-group-flush">
					    <?php if($connects):
					  		foreach ($connects as $connect):
					  	?>
					    
					    <li class="list-group-item row">
							<div class="col-lg-5 col-md-5 col-sm-6 col-7">
								<i class="fa fa-bookmark" style="color:#ffba28"></i>-| <span>
								<?php echo anchor('admin/customer/connect_view/'.$connect->service_id,  $this->service_m->service_by_id($connect->service_id),' style="color:#14d963"'); ?>								
								 </span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-5" style="margin-left:-15px;">
								 <?php echo $this->service_m->customer_by_id($connect->customer_id);  ?>
								 	
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 hidden-sm-down">
								<?php echo substr($connect->date, 0, 10); ?>
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs-down">								
								<p class="text-center"><small><i class="status-color" style="color:#14d963">
									<?php if($connect->status == "0"): ?>
										<button class="brn btn-outline-secondary outline accept" data-id="<?php echo $connect->id; ?>"> Accept </button>
									<?php elseif($connect->status == "1"): ?>
										<i class="la la-check-circle la-2x"> </i>	
									<?php else: ?>
										<!-- <button class="brn btn-outline-secondary outline accept" data-id="<?php echo $connect->id; ?>"> Accept </button>	 -->
									<?php echo $this->service_m->order_status($connect->status); ?>
									<?php endif; ?>
								</i></small></p>
							</div>
					    </li>
					<?php
						endforeach; else: 
					?>
						<li class="list-group-item row">
							<div class="token-wrapper" style="max-width:400px; margin: 3em auto">
								<div class="token">

									<p class="text-center" style="color:#14d963"><i class="la la-warning la-4x"></i></p>
									<h4 > <b style="color:#14d963">OPS!</b></h4>
									<p class="text-center" style="color:#14d963">You do not have any Active connect</p>
									<a href="<?php echo site_url(); ?>" class="btn btn-customer btn-block btn-warning"> GOTO HOME</a>
								</div>
							</div>
					    </li>
					<?php endif; ?>
				    </ul>
				</div>								
			</div>
			<div class="col-lg-2"></div>
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
	      // $('#s_search').focus();
	    });


	    $('.accept').click(function(){
	    	var id = $(this).data("id");
	    	var url = "<?php echo site_url('admin/seller/accept_con/') ?>"+id;
	    	console.log(url);
	    	$.get( url, function( data ) {
		        if(data == 'true'){
	   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">You are Connected</p>');
	   			}else{
	   				
	   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
	   			}
		      });  
	    });
	});
</script>