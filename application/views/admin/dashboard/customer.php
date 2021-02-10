<div class="container-fluid admin-area">
	<div class="row">
		<div class="content-header col-12">
	      <h2 class="content-title"><i class="fa  fa-tachometer-alt la-2x">  </i> Customer Dashboard</h2>
	    </div>
	</div>
	<div class="row dashboard">

		<div class="col-md-3">
			<div class="card mb-3 dash">
			  <div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $this->user_m->total_booked_seat(); ?></h5>
							<p class="card-text sub-title">Total Booked Seats</p>
							<p class="card-text"><small class="text-muted"><b>Cancle: </b> <span class="num"><?php echo $this->user_m->total_cancle_seat(); ?></span></small></p>
						</div>
					</div>
			    <div class="col-md-4 icon">
			      <i class="fa fa-shopping-cart fa-3x"></i>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $this->user_m->total_expend(); ?> BDT</h5>
							<p class="card-text sub-title">Total Invoice</p>
							<p class="card-text">
								<small class="text-muted"><b>Due:</b> <span class="num">0 BDT<?php //echo $this->user_m->outofstock_product(); ?></span></small>
								<!-- <small class="text-muted right"><b>Expired:</b> <span class="num">13<?php //echo count($this->user_m->expired_product()); ?></span></small> -->
							</p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="	fa fa-medkit fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		
		
	</div>




		<!-- <div class="col-md-3">
			<a href="#" class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><i class="fa fa-eye"></i></h5>
							<p class="card-text sub-title">View Reports</p>
							<p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num">04</span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-pie-chart fa-3x"></i>
					</div>
				</div>
			</a>
		</div> -->

	</div>

</div>
