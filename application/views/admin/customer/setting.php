<div class="row w_app w_viewpage">
  <div class="container">
    <div class="row">

        <h3 class="text-center">
					<i class="la la-cogs la-2x" style="color:#14d963"></i> Profile Setting
				</h3>
    </div>
  </div>
</div>



<!-- Becam a seller -->
<!-- <div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">
					<i class="la la-cogs la-2x" style="color:#14d963"></i> Profile Setting
					 <hr>
				</h3>
			</div>
		</div>
	</div>
</div> -->

<!-- services body -->
<?php


?>
<?php
// dump();
if ($this->session->userdata('type')==3) {
	?>
	<div class="row seller-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
						<p class="text-center">
							<b>Become a seller with EzzeLink and Start selling today!</b>
						</p>
						<p class="text-center note">
							<?php
								if($users->s_req != '1'):
							 ?>
							<button class="btn btn-outline-danger pull-center" id="become_seller" style="cursor: pointer;"><i class="la la-lightbulb-o " style="color:#14d963"></i> Become a seller</button>
							<?php
								else:
							 ?>
							 <i class="la la-clock-o la-2x"></i>  Your request is Under Process!

							 <?php

							 endif; ?>
						</p>
					</div>



						<br>
						 <hr>
				</div>
			</div>
		</div>
	</div>
	<?php
} else {
	# code...
}

 ?>
<!-- end header -->
<div class="row category-type">
	<div class="container">
		<div class="row">
			<!-- <div class="col-12">
			</div> -->
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-10">




				<!-- Rent a Car info card -->
				<div class="setting-form container">
					<h2><i class="la la-user"> </i> Rent a Car Name</h2>
					<form class="form row">
					  <div class="form-group col-12">
					    <input type="text" name="rent_a_car" class="form-control is-valid" id="rent_a_car" aria-describedby="nameHelp" value="<?php echo $users->rent_a_car; ?>" placeholder="Rent a Car Name" required>
					    <small id="nameHelp" class="form-text text-muted valid-feedback">You can not change rent-a-car name ! </small>
					  </div>
					  <div class="col-12">
					  	<!-- logo -->
              <h2><i class="la la-photo"> </i> Logo</h2>
  						<div class="form-group row">
  				            <div class='col-8'>
  				            	<!-- $photo = ($service->photo !== "") ? site_url('upload/'.$service->photo) : -->
  				              <div class="img-preview"><img height="242px" src="<?php echo  $rent_a_car_logo = ($users->rent_a_car_logo != "") ? site_url('upload/'.$users->rent_a_car_logo) :site_url('images/profile.jpg') ;
  				               ?>" id="preview" class="img-fluid"></div>
  				            </div>
  				            <div class='col-4'>
  				              <input type="hidden" id="img_rent_a_car_logo" name="rent_a_car_logo" value="<?php echo $users->rent_a_car_logo ?>">
  				              <br>
  				              <br>
  				              <br>
  				              <button id="rent_a_car_logo" onclick="openUploadModal('rent_a_car_logo')" data-field="rent_a_car_logo" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
  				            </div>
  				            <div class="col-8"></div>
  							  <div class="col-4">
  							  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="rent_a_car_info">	Save</button>
  							  </div>
  				          </div>
					  </div>

					</form>
				</div>
				<!-- Rent a Car info card -->

				<!-- Personal info card -->
				<div class="setting-form container">
					<h2><i class="la la-user"> </i> Personal Info</h2>
					<form class="form row">
					  <div class="form-group col-12">
					    <input type="text" name="name" class="form-control is-valid" id="name" aria-describedby="nameHelp" value="<?php echo $users->name; ?>" placeholder="Full Name">
					    <small id="nameHelp" class="form-text text-muted valid-feedback">What is your full name ?</small>
					  </div>
					  <?php $user_info = unserialize($users->user_info); ?>
					  <div class="form-group col-7">
					    <input type="date" name="dob" class="form-control " id="dob" aria-describedby="nameHelp" placeholder="dob" value="<?php echo $user_info['dob']; ?>">
					    <small id="nameHelp" class="form-text text-muted">Date of Birth</small>
					  </div>
					  <div class="form-group col-5">
					    <?php
					        $sex = array(
					        	'' => 'Select Sex',
					        	'male' => 'Male',
						        'female'=>'Female',
						        'other'=>'Other'
						    );
					    	echo form_dropdown('sex', $sex, $user_info['sex'],'class="form-control " aria-describedby="nameHelp" id="sex"');
					     ?>

					    <small id="nameHelp" class="form-text text-muted">Are you a female ?</small>
					  </div>
					  <div class="col-8"></div>
					  <div class="col-4">
					  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="personal_info">	Save</button>
					  </div>
					</form>
				</div>
				<!-- Personal info card -->

				<!-- PHOTO info card -->
					<div class="setting-form container">
						<h2><i class="la la-photo"> </i> Profile Photo</h2>
						<div class="form-group row">
				            <div class='col-8'>
				            	<!-- $photo = ($service->photo !== "") ? site_url('upload/'.$service->photo) : -->
				              <div class="img-preview"><img height="242px" src="<?php echo  $photo = ($users->photo != "") ? site_url('upload/'.$users->photo) :site_url('images/profile.jpg') ;
				               ?>" id="preview" class="img-fluid"></div>
				            </div>
				            <div class='col-4'>
				              <input type="hidden" id="img_photo" name="photo" value="<?php echo $users->photo ?>">
				              <br>
				              <br>
				              <br>
				              <button id="profile" onclick="openUploadModal('profile')" data-field="photo" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
				            </div>
				            <div class="col-8"></div>
							  <div class="col-4">
							  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="user_photo">	Save</button>
							  </div>
				          </div>
					</div>

				<!-- PHOTO info card -->

				<!-- Contact info card -->

					<div class="setting-form container">
						<h2><i class="la la-envelope"> </i> Contact Info</h2>
						<form class="form row">
						  <div class="form-group col-12">
						    <input type="email" class="form-control" id="email" aria-describedby="nameHelp" placeholder="Email" required="required" value="<?php echo $users->email; ?>">
						    <small id="nameHelp" class="form-text text-muted">Email (You must Login with this email)</small>
						  </div>
						  <div class="form-group col-12">
						    <input type="text" class="form-control" id="phone" aria-describedby="nameHelp" placeholder="Phone" required="required" value="<?php echo $users->phone; ?>">
						    <small id="nameHelp" class="form-text text-muted">Phone</small>
						  </div>

						  <div class="col-8"></div>
						  <div class="col-4">
						  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="contact_info">	Save</button>
						  </div>
						</form>
					</div>
				<!-- Contact info card -->

				<!-- SECURITY CARD	 -->
					<div class="setting-form container">
						<h2><i class="la la-lock"> </i> Security Info</h2>
						<form class="form row">
						  <div class="form-group col-12">
						    <!-- <label for="name">Full Name</label> -->
						    <input type="password" class="form-control" id="password" aria-describedby="nameHelp" placeholder="Password"  required="required" >
						    <small id="nameHelp" class="form-text text-muted">Password</small>
						  </div>
						  <div class="form-group col-12">
						    <!-- <label for="name">Password</label> -->
						    <input type="password" class="form-control" id="re_password" aria-describedby="nameHelp" placeholder="Re-Password"  required="required">
						    <small id="nameHelp" class="form-text text-muted">Confirm Password</small>
						  </div>

						  <div class="col-8"></div>
						  <div class="col-4">
						  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="password_btn">	Save</button>
						  </div>
						</form>
					</div>
				<!-- SECURITY CARD	 -->

				<!-- Address info card -->
					  <?php //$address = unserialize($users->address);?>

					<div class="setting-form container" id="address-bar">
						<h2><i class="la la-map"> </i> Address</h2>
						<form class="form row">
						  <div class="form-group col-12">
						   <?php

						   	echo form_input('address', set_value('address', $users->address), 'class="form-control" placeholder="Address" id="address"');
					     	?>
						    <small id="nameHelp" class="form-text text-muted">Address</small>
						  </div>
						  <div class="form-group col-6">

						    <?php

						    	echo form_dropdown('division', $this->user_m->division_dw(),$users->division,'class="form-control " aria-describedby="nameHelp"  required="required" id="division"');
						     ?>
						    <small id="nameHelp" class="form-text text-muted">Division</small>
						  </div><div class="form-group col-6">

						    <?php

						    	echo form_dropdown('district', $this->user_m->district_dw($users->division),$users->district,'class="form-control " aria-describedby="nameHelp"  required="required" id="district"');
						     ?>
						    <small id="nameHelp" class="form-text text-muted">District</small>
						  </div><div class="form-group col-6">

						    <?php
						    	echo form_dropdown('police_station', $this->user_m->police_station_dw($users->district),$users->police_station,'class="form-control " aria-describedby="nameHelp"  required="required" id="police_station"');
						     ?>
						    <small id="nameHelp" class="form-text text-muted">Police Station</small>
						  </div>
						   <div class="form-group col-6">
						    <?php
						    echo form_input('zip', set_value('zip', $users->zip), 'class="form-control" placeholder="Zip Code" id="zip"');
					     	?>
						    <small id="nameHelp" class="form-text text-muted">Zip Code</small>
						  </div>

						  <div class="col-8"></div>
						  <div class="col-4">
						  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="address_info">	Save</button>
						  </div>
						</form>
					</div>

				<!-- Address info card -->


				<!-- PHOTO info card -->
					<div class="setting-form container">
						<h2><i class="fa fa-id-card"></i> Photo Identity</h2>
						<div class="form-group row">
				            <div class='col-8'>
				              <div class="img-preview"><img height="242px" src="<?php echo  $photo_id = ($users->photo_id != "") ? site_url('upload/'.$users->photo_id) :site_url('images/nid.jpg') ;
				               ?>" id="photo_id" class="img-fluid"></div>
				            </div>
				            <div class='col-4'>
				              <input type="hidden" id="img_photo_id" name="photo_id" value="<?php echo $users->photo_id ?>">
				              <br>
				              <br>
				              <br>
				              <button id="profile_nid" onclick="openUploadModal('profile_nid')" data-field="photo_id" data-preview="photo_id" type="button"  class="btn btn-outline-info profile"><i class="la la-photo"></i>  Photo ID</button>
				            </div>
				            <div class="col-8"></div>
							  <div class="col-4">
							  	<button class="btn btn-outline-warning btn-block pull-right" type="button" id="save_photo_id">	Save</button>
							  </div>
				          </div>
					</div>

				<!-- PHOTO info card -->


			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
	</div>
</div>

<?php $this->load->view('common/upload-modal') ?>

 <script type="text/javascript">

 	// PHOTO Upload
    // function openUploadModal(id){
    //   var button = $('#'+id);
    //   var upInfo =  $('#upload-info');

    //     var up = button.data("field");
    //     var view = button.data("preview");
    //     upInfo.attr('data-info', up);
    //     upInfo.attr('data-view', view);
    //     $('#photoUploader').modal('show');
    //     console.log(id+' || '+ view);
    // }

        // $(document).ready(function(){


            function openUploadModal(id){
              var button = $('#'+id);
              var upInfo =  $('#upload-info');
              var up = button.data("field");
              var view = button.data("preview");
              var drive = button.data("drive");
              var url = "<?php echo site_url('admin/media/all_media'); ?>";

                upInfo.attr('data-info', up);
                upInfo.attr('data-view', view);
                // upload Dir
                upInfo.attr('data-drive', drive);


                // Get Media for library;
                $.get( url , function( data ) {
                  $( ".media" ).html( data );
                });

                // Open Modal
                $('#photoUploader').modal('show');

            }

            // process img to save
            var img = $('#img-preview').find('img');
            var ids = new Array();
            img.each(function(){
              ids.push($(this).attr('id'));
            });

            $('#img_s_photo').val(ids);


            // Remove photo
            $('.remove').click(function(){

                // get photo id
                var id = $(this).siblings('.img').attr('id');

                // remove photo
                $(this).parent('.col-4').remove();

                // process img to save
                var img = $('#img-preview').find('img');
                var ids = new Array();
                img.each(function(){
                  ids.push($(this).attr('id'));
                });

                $('#img_s_photo').val(ids);

              });


            // Use Media form Media library

            $('#use_media').click(function(){
              var select = $('.media').find('input:checked');

              // set photo data
              var ids = new Array();
              select.each(function(){
                id = $(this).attr('id');
                ids.push(id);

                var url = '<?php echo site_url('admin/media/ajax_media_by_id/') ?>'+id;

                // AJAX for image file name
                $.get( url, function( data ) {
                  $('#img-preview').append('<div class="col-4"><i class="la la-times-circle-o remove"> </i><img id="'+id+'" src="<?php echo site_url('upload/') ?>'+data+'" class="img img-fluid"></div>') ;
                });


              });



              var img = $('#img-preview').find('img');
              img.each(function(){
                ids.push($(this).attr('id'));
              });
              $('#img_s_photo').val(ids);


              console.log(ids);
            });

        // });














    // SAVE Rent a car
    $('#rent_a_car_info').click(function(){
    	var rent_a_car = $('#rent_a_car');
    	var rent_a_car_logo = $('#img_rent_a_car_logo');
        var url = '<?php echo site_url("admin/customer/rent_a_car_info"); ?>';
        console.log(rent_a_car+' | '+rent_a_car_logo+' | '+url);
    	if(rent_a_car.val()){
    		var data = {
    			rent_a_car : rent_a_car.val(),
    			rent_a_car_logo : rent_a_car_logo.val()
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Rent a Car Info Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });
    	}else{
		   	alertify.error('<p class="text-center" style="color:#fff;margin:0px">You Must Enter your rent a car name</p>');
    	}
    });


    // SAVE Personal Info
    $('#personal_info').click(function(){
    	var name = $('#name');
    	var dob = $('#dob');
    	var sex = $('#sex');
        var url = '<?php echo site_url("admin/customer/personal_info"); ?>';
    	if(name.val()){
    		var data = {
    			name : name.val(),
    			dob : dob.val(),
    			sex : sex.val(),
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Personal Info Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

    // SAVE Photo
    $('#user_photo').click(function(){
    	var photo = $('#img_photo');
        var url = '<?php echo site_url("admin/customer/user_photo"); ?>';
    	if(photo.val()){
    		var data = {
    			photo : photo.val()
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Photo Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

    // SAVE Photo ID
    $('#save_photo_id').click(function(){
    	var photo = $('#img_photo_id');
        var url = '<?php echo site_url("admin/customer/photo_id"); ?>';
    	if(photo.val()){
    		var data = {
    			photo_id : photo.val()
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Photo Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

    // SAVE Contact info
    $('#contact_info').click(function(){
    	var phone = $('#phone');
    	var email = $('#email');
        var url = '<?php echo site_url("admin/customer/contact_info"); ?>';
    	if(email.val()){
    		var data = {
    			email : email.val(),
    			phone : phone.val()
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Contact Info Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

    // SAVE Password
    $('#password_btn').click(function(){
    	var password = $('#password');
    	var r_password = $('#re_password');
        var url = '<?php echo site_url("admin/customer/password"); ?>';
    	if(password.val()){
    		if(password.val() == r_password.val()){
	    		var data = {
	    			password : password.val()
	    		};
	    		// AJAX
			    $.post(url, data, function(result){
			   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Password Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
			    });
			}
    	}else{
		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
    	}
    });

        // SAVE ADDRESS info
    $('#address_info').click(function(){
    	var address = $('#address').val();
    	var division = $('#division').val();
    	var district = $('#district').val();
    	var police_station = $('#police_station').val();
    	var zip = $('#zip').val();
        var url = '<?php echo site_url("admin/customer/address_info"); ?>';

		if($('#address').val()){
			var data = {
				address : address,
				division : division,
				district : district,
				police_station : police_station,
				zip : zip
			};
		}else{

			console.log('data error')
		}
		// AJAX
	    $.post(url, data, function(result){
   			if(result){
	   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Address Saved</p>');
	   			}else{

	   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
	   			}
	    });

    });




    // Address  DW
    $('#division').change(function(){
	    var id = $(this).val();
	    var url = '<?php echo site_url('customer/district_dw/') ?>'+id;

	      $.get( url, function( data ) {
	        $( "#district" ).html( data );
	      });
	 });

    $('#district').change(function(){
	    var id = $(this).val();
	    var url = '<?php echo site_url('customer/police_station_dw/') ?>'+id;

	      $.get( url, function( data ) {
	        $( "#police_station" ).html( data );
	      });
	 });




 </script>
