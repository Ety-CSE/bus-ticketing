<div class="container-fluid admin-area">
	<div class="row">
		<div class="content-header col-12">
	      <h2 class="content-title"><i class="fa  fa-tachometer-alt la-2x">  </i> Dashboard</h2>
	    </div>
	</div>
	<div class="row dashboard">

		<div class="col-md-3">
			<div class="card mb-3 dash">
			  <div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $this->user_m->total_booked(); ?></h5>
							<p class="card-text sub-title">Total Booked</p>
							<p class="card-text"><small class="text-muted"><b>Total Cancle: </b> <span class="num"><?php echo $this->user_m->total_Cancle(); ?></span></small></p>
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
							<h5 class="card-title"><?php echo $this->user_m->total_coach(); ?></h5>
							<p class="card-text sub-title">Total Coach</p>
							<p class="card-text">
								<small class="text-muted"><b>Out of Service:</b> <span class="num"> <?php echo $this->user_m->ooservice_coach(); ?></span></small>
							</p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="	fa fa-bus fa-3x"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $this->user_m->total_route(); ?></h5>
							<p class="card-text sub-title">Total Route</p>
							<p class="card-text"><small class="text-muted"><b>Cancle: </b> <span class="num"><?php echo $this->user_m->ooservice_route(); ?></span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-route fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $this->user_m->total_customer(); ?></h5>
							<p class="card-text sub-title">Total Customer</p>
							<p class="card-text"><small class="text-muted"><b>Syspended Customer: </b> <span class="num"><?php echo $this->user_m->sys_customer(); ?></span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-user fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

	</div>


<br><br>
	<div class="row">
		<div class="content-header col-12">
				<h2 class="content-title"><i class="fa fa-hourglass-half la-2x">  </i> Quick Action</h2>
			</div>
	</div>

	<div class="row dashboard">

		<div class="col-md-3">
			<a href="<?php echo site_url('admin/bus/edit'); ?>">
			<div class="card mb-3 dash">
			  <div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">
								<i class="fa fa-plus"></i>
							</h5>
							<p class="card-text sub-title">Add Bus</p>
							<p class="card-text"><small>Add New Bus</small>
							</p>
						</div>
					</div>
			    <div class="col-md-4 icon">
			      <i class="fa fa-bus fa-3x"></i>
			    </div>
			  </div>
			</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="<?php echo site_url('admin/coach/edit'); ?>">
				<div class="card mb-3 dash">
					<div class="row no-gutters">
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><i class="fa fa-plus"></i></h5>
								<p class="card-text sub-title">Add Coach</p>
								<p class="card-text">
									<small>Add new Coach</small>
								</p>
							</div>
						</div>
						<div class="col-md-4 icon">
							<i class="	fa fa-subway fa-3x"></i>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="<?php echo site_url('admin/route/edit'); ?>">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><i class="fa fa-plus"></i></h5>
							<p class="card-text sub-title">Add Route</p>
							<p class="card-text"><small class="text-muted"><b>Add New Route </b> </small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-route fa-3x"></i>
					</div>
				</div>
			</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="<?php echo site_url('admin/trip/edit'); ?>">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><i class="fa fa-plus"></i></h5>
							<p class="card-text sub-title">Add Trip</p>
							<p class="card-text"><small class="text-muted"><b>Add New Trip </b> </small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-history fa-3x"></i>
					</div>
				</div>
			</div>
			</a>

	</div>

</div>
