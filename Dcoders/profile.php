<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<!-- Start Bradcaump area -->
	
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/banner/banner.gif) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Profile</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        







            

			<!-- <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#settings">Settings</a>
                <hr align="center">
            </div>

            <div class="url">
                <a href="#Change Password">Change Password</a>
                <hr align="center">
            </div> -->
        </div>
		<div class="main">
        <center><h2>IDENTITY</h2>
        <div >



		<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>


		
	
			
            <img src="studentimg.jpeg" class="center" alt="" width="200" height="200">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:<input type="text" name="name" id="name" placeholder="Your Name*" style="width:90%" left="20px"></td>
                            
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:<input type="text" name="name" id="name" placeholder="Enter Your Email" style="width:90%"left="20px" lenghth="20px"></td>

                        </tr>
                        <tr>
                            <td>Year</td>
                            <td>:<input type="text" name="YEAR" id="name" placeholder="Mention Your Year" style="width:90%"> </td>
                        </tr>
                        
                        <tr>
                            <td>Address</td>
                            <td>:<input type="text" name="Address" id="Address" placeholder="Enter Your Address" style="width:90%"> </td>

                        </tr>
                        <tr>
                            <td>Hobbies</td>
                            <td>:<input type="text" name="Hobbies" id="hobbies" placeholder="Enter Your hobbies" style="width:90%"></td>

                        <tr>
                            <td>Skill</td>
                            <td>:<input type="text" name="Skill" id="skill" placeholder="Enter Your Skills" style="width:90%"></td>
                        </tr>
						
                    </tbody>
					
                </table>
				<div class="col-sm-6">
<button  class="btn btn-success" name="update_profile">Save Profile</button>
            </div>
				<script>
		function update_profile(){
			jQuery('.field_error').html('');
			var name=jQuery('#name').val();
			if(name==''){
				jQuery('#name_error').html('Please enter your name');
			}else{
				jQuery('#btn_submit').html('Please wait...');
				jQuery('#btn_submit').attr('disabled',true);
				jQuery.ajax({
					url:'update_profile.php',
					type:'post',
					data:'name='+name,
					success:function(result){
						jQuery('#name_error').html(result);
						jQuery('#btn_submit').html('Update');
						jQuery('#btn_submit').attr('disabled',false);
					}
				})
			}
		}
		
		function update_password(){
			jQuery('.field_error').html('');
			var current_password=jQuery('#current_password').val();
			var new_password=jQuery('#new_password').val();
			var confirm_new_password=jQuery('#confirm_new_password').val();
			var is_error='';
			if(current_password==''){
				jQuery('#current_password_error').html('Please enter password');
				is_error='yes';
			}if(new_password==''){
				jQuery('#new_password_error').html('Please enter password');
				is_error='yes';
			}if(confirm_new_password==''){
				jQuery('#confirm_new_password_error').html('Please enter password');
				is_error='yes';
			}
			
			if(new_password!='' && confirm_new_password!='' && new_password!=confirm_new_password){
				jQuery('#confirm_new_password_error').html('Please enter same password');
				is_error='yes';
			}
			
			if(is_error==''){
				jQuery('#btn_update_password').html('Please wait...');
				jQuery('#btn_update_password').attr('disabled',true);
				jQuery.ajax({
					url:'update_password.php',
					type:'post',
					data:'current_password='+current_password+'&new_password='+new_password,
					success:function(result){
						jQuery('#current_password_error').html(result);
						jQuery('#btn_update_password').html('Update');
						jQuery('#btn_update_password').attr('disabled',false);
						jQuery('#frmPassword')[0].reset();
					}
				})
			}
			
		}
		</script>

            </div><center>
				<button><a href = "Change.php">Change Password</a></button>
        </div>





        </div>
		<!-- Start Contact Area -->
        <!-- <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Profile</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="login-form" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%" value="<?php echo $_SESSION['Mobile']?>">
										</div>
										<span class="field_error" id="name_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" class="fv-btn" onclick="update_profile()" id="btn_submit">Update</button>
										
									</div>
								</form>
								
								
								
							</div>
						</div> 
                
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Change Password</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form method="post" id="frmPassword">
									<div class="single-contact-form">
										<label class="password_label">Current Password</label>
										<div class="contact-box name">
											<input type="password" name="current_password" id="current_password" style="width:100%">
										</div>
										<span class="field_error" id="current_password_error"></span>
									</div>
									<div class="single-contact-form">
										<label class="password_label">New Password</label>
										<div class="contact-box name">
											<input type="password" name="new_password" id="new_password" style="width:100%">
										</div>
										<span class="field_error" id="new_password_error"></span>
									</div>
									<div class="single-contact-form">
										<label class="password_label">Confirm New Password</label>
										<div class="contact-box name">
											<input type="password" name="confirm_new_password" id="confirm_new_password" style="width:100%">
										</div>
										<span class="field_error" id="confirm_new_password_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" class="fv-btn" onclick="update_password()" id="btn_update_password">Update</button>
										
									</div>
								</form>
								
								
								
							</div>
						</div> 
                
				</div>
				

					
            </div>
        </section> -->
		<!-- <script>
		function update_profile(){
			jQuery('.field_error').html('');
			var name=jQuery('#name').val();
			if(name==''){
				jQuery('#name_error').html('Please enter your name');
			}else{
				jQuery('#btn_submit').html('Please wait...');
				jQuery('#btn_submit').attr('disabled',true);
				jQuery.ajax({
					url:'update_profile.php',
					type:'post',
					data:'name='+name,
					success:function(result){
						jQuery('#name_error').html(result);
						jQuery('#btn_submit').html('Update');
						jQuery('#btn_submit').attr('disabled',false);
					}
				})
			}
		}
		
		function update_password(){
			jQuery('.field_error').html('');
			var current_password=jQuery('#current_password').val();
			var new_password=jQuery('#new_password').val();
			var confirm_new_password=jQuery('#confirm_new_password').val();
			var is_error='';
			if(current_password==''){
				jQuery('#current_password_error').html('Please enter password');
				is_error='yes';
			}if(new_password==''){
				jQuery('#new_password_error').html('Please enter password');
				is_error='yes';
			}if(confirm_new_password==''){
				jQuery('#confirm_new_password_error').html('Please enter password');
				is_error='yes';
			}
			
			if(new_password!='' && confirm_new_password!='' && new_password!=confirm_new_password){
				jQuery('#confirm_new_password_error').html('Please enter same password');
				is_error='yes';
			}
			
			if(is_error==''){
				jQuery('#btn_update_password').html('Please wait...');
				jQuery('#btn_update_password').attr('disabled',true);
				jQuery.ajax({
					url:'update_password.php',
					type:'post',
					data:'current_password='+current_password+'&new_password='+new_password,
					success:function(result){
						jQuery('#current_password_error').html(result);
						jQuery('#btn_update_password').html('Update');
						jQuery('#btn_update_password').attr('disabled',false);
						jQuery('#frmPassword')[0].reset();
					}
				})
			}
			
		}
		</script> -->
		<script>
		function email_sent_otp(){
			jQuery('#email_error').html('');
			var email=jQuery('#email').val();
			if(email==''){
				jQuery('#email_error').html('Please enter email id');
			}else{
				jQuery('.email_sent_otp').html('Please wait..');
				jQuery('.email_sent_otp').attr('disabled',true);
				jQuery.ajax({
					url:'send_otp.php',
					type:'post',
					data:'email='+email+'&type=email',
					success:function(result){
						if(result=='done'){
							jQuery('#email').attr('disabled',true);
							jQuery('.email_verify_otp').show();
							jQuery('.email_sent_otp').hide();
							
						}else if(result=='email_present'){
							jQuery('.email_sent_otp').html('Send OTP');
							jQuery('.email_sent_otp').attr('disabled',false);
							jQuery('#email_error').html('Email id already exists');
						}else{
							jQuery('.email_sent_otp').html('Send OTP');
							jQuery('.email_sent_otp').attr('disabled',false);
							jQuery('#email_error').html('Please try after sometime');
						}
					}
				});
			}
		}
		function email_verify_otp(){
			jQuery('#email_error').html('');
			var email_otp=jQuery('#email_otp').val();
			if(email_otp==''){
				jQuery('#email_error').html('Please enter OTP');
			}else{
				jQuery.ajax({
					url:'check_otp.php',
					type:'post',
					data:'otp='+email_otp+'&type=email',
					success:function(result){
						if(result=='done'){
							jQuery('.email_verify_otp').hide();
							jQuery('#email_otp_result').html('Email id verified');
							jQuery('#is_email_verified').val('1');
							if(jQuery('#is_mobile_verified').val()==1){
								jQuery('#btn_register').attr('disabled',false);
							}
						}else{
							jQuery('#email_error').html('Please enter valid OTP');
						}
					}
					
				});
			}
		}
		
		function mobile_sent_otp(){
			jQuery('#mobile_error').html('');
			var mobile=jQuery('#mobile').val();
			if(mobile==''){
				jQuery('#mobile_error').html('Please enter mobile number');
			}else{
				jQuery('.mobile_sent_otp').html('Please wait..');
				jQuery('.mobile_sent_otp').attr('disabled',true);
				jQuery('.mobile_sent_otp');
				jQuery.ajax({
					url:'send_otp.php',
					type:'post',
					data:'mobile='+mobile+'&type=mobile',
					success:function(result){
						if(result=='done'){
							jQuery('#mobile').attr('disabled',true);
							jQuery('.mobile_verify_otp').show();
							jQuery('.mobile_sent_otp').hide();
						}else if(result=='mobile_present'){
							jQuery('.mobile_sent_otp').html('Send OTP');
							jQuery('.mobile_sent_otp').attr('disabled',false);
							jQuery('#mobile_error').html('Mobile number already exists');
						}else{
							jQuery('.mobile_sent_otp').html('Send OTP');
							jQuery('.mobile_sent_otp').attr('disabled',false);
							jQuery('#mobile_error').html('Please try after sometime');
						}
					}
				});
			}
		}
		function mobile_verify_otp(){
			jQuery('#mobile_error').html('');
			var mobile_otp=jQuery('#mobile_otp').val();
			if(mobile_otp==''){
				jQuery('#mobile_error').html('Please enter OTP');
			}else{
				jQuery.ajax({
					url:'check_otp.php',
					type:'post',
					data:'otp='+mobile_otp+'&type=mobile',
					success:function(result){
						if(result=='done'){
							jQuery('.mobile_verify_otp').hide();
							jQuery('#mobile_otp_result').html('Mobile number verified');
							jQuery('#is_mobile_verified').val('1');
							if(jQuery('#is_email_verified').val()==1){
								jQuery('#btn_register').attr('disabled',false);
							}
						}else{
							jQuery('#mobile_error').html('Please enter valid OTP');
						}
					}
					
				});
			}
		}
		</script>
<?php require('footer.php')?>        