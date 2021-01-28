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



<!-- Becam a seller -->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">
					<i class="la la-cogs la-2x" style="color:#14d963"></i> Seller Profile **
					<?php 
					dump($users);
					echo $approve = ($users->s_req == '0') ? '<button class="btn btn-outline-secondary outline approve" data-id="'.$users->id.'">Approve</button> ' : ' <i class="la la-check-circle-o la-2x" style="color:green"></i>' ; 
					?> 
					 <hr>
				</h3>
			</div>
		</div>		
	</div>
</div>

<!-- services body -->
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
						<p class="text-center">
							
							<button class="btn btn-outline-danger pull-center" id="become_seller" style="cursor: pointer;"><i class="la la-lightbulb-o " style="color:#14d963"></i> Become a seller</button>
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

<!-- UPLOAD MODAL -->

  <!-- Modal -->
  <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <!-- Upload Contant -->
          <div class="upload-console">
            <div class="upload-console-body">
              <form action="<?php site_url('admin/upload') ?>" method="post" class="row" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="form-group row">
                      <input type="file" class="col-sm-12" multiple="multiple" id="upload_file" name="files[]" >
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="submit" value="Upload" class="btn btn-outline-info" id="upload_button">
                  </div>
                </div>
              </form>
            </div>
            <span id="upload-info"></span>
            <!-- Drag and Drowp -->
            <div class="upload-console-drop" id="drop-zone">
              Just Drag and Drop <i style="color:#5bc0de" class="la la-download"> </i>  File Here
            </div>
            <div class="bar">
              <div class="bar-fill" id="bar-fill">
                <div class="bar-fill-text" id="bar-fill-text"> </div>
              </div>
            </div>
            <!--   -->
            <!-- class="hidden" -->
            <div id="upload-finished" class="hidden">
              <h5>Processed File</h5>
          </div>
        </div>
        <!-- Upload Contant -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>



 <script type="text/javascript">
 	// PHOTO Upload 
    function openUploadModal(id){
      var button = $('#'+id);
      var upInfo =  $('#upload-info');

        var up = button.data("field");
        var view = button.data("preview");
        upInfo.attr('data-info', up);
        upInfo.attr('data-view', view);
        $('#photoUploader').modal('show');
        console.log(id+' || '+view);
    }


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



    $('#become_seller').click(function(){
    	// Extend existing 'alert' dialog
        if(!alertify.errorAlert){
          //define a new errorAlert base on alert
          alertify.dialog('errorAlert',function factory(){
            return{
                    build:function(){
                        var errorHeader = '<span  class="la la-lightbulb-o la-2x"'
                        +    'style="vertical-align:middle;color:#e10000;">'
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

        var form = "<form class='login' action='"+re_url+"' method='POST'>";
            form += "<div class='form-group row'><label for='email' class='col-sm-2 col-form-label'>Email</label><div class='col-sm-10'>";
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
	   		 


    });
 </script>



 