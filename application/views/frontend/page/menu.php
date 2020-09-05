
<link rel="stylesheet" href="<?= base_url('assets/frontend/menu/');?>css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url('assets/frontend/menu/');?>css/style.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url('assets/frontend/menu/');?>css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url('assets/frontend/menu/');?>css/responsive.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- External JavaScripts -->
<script type="text/javascript" src="<?= base_url('assets/frontend/menu/');?>js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/menu/');?>js/plugins.js"></script>

<style>
	#logo{
		width:210px;
		/*margin-top:5px;*/
	}
</style>

<header id="header" class="sticky-style-2">
	<div id="header-wrap">
		<nav id="primary-menu" class="style-2 center">
			<div class="container clearfix">
				<div id="logo">
					<a href="#">
						<img class="img-responsive" src="<?= base_url('');?>assets/frontend/img/logo2.png" alt="Logo">
					</a>
				</div>
				<div id="primary-menu-trigger">
					<i class="fa fa-bars" aria-hidden="true"></i>
					<!-- <i class="icon-reorder"></i> -->
				</div>
				<ul class="one-page-menu">
					<li class="current">
						<a href="<?php print base_url();?>" >
						<div>Home</div>
						</a>
					</li>
					<li><a href="<?php print base_url('Welcome/about');?>" ><div>About Us</div></a></li>
					<li><a href="#" ><div>Our Services</div></a>
					  <ul>
						<li><a href="<?php print base_url('Welcome/student');?>"><div>services for students</div></a></li>
						<li><a href="<?php print base_url('Welcome/institue');?>"><div>services for partner</div></a></li>
					  </ul>
					</li>
					
					<li><a href="#" ><div>Study destination</div></a>
					  <ul>
						<li><a href="<?php print base_url('Welcome/uk');?>"><div>Study in UK</div></a></li>
						<li><a href="<?php print base_url('Welcome/norwy');?>"><div>Study in Norwy</div></a></li>
						<li><a href="<?php print base_url('Welcome/ireland');?>"><div>Study in Ireland</div></a></li>
						<li><a href="<?php print base_url('Welcome/germany');?>"><div>Study in Germany</div></a></li>
						<li><a href="<?php print base_url('Welcome/malysisa');?>"><div>Study in Malaysia</div></a></li>
						<li><a href="<?php print base_url('Welcome/sweden');?>"><div>Study in Sweden</div></a></li>
					  </ul>
					</li>
					
					<li><a href="<?php print base_url('Welcome/scholarship');?>" ><div>Scholarship</div></a></li>
					<li><a href="<?php print base_url('Welcome/apply');?>" ><div>Apply Now</div></a></li>

					<li><a href="<?php print base_url('Welcome/contact');?>" ><div>Contact</div></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<script type="text/javascript" src="<?= base_url('assets/frontend/menu/');?>js/functions.js"></script>

<style>
    .control-label{
        color:#000;
    }
</style>

<div class="modal fade" id="regForm" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<h4 class="modal-title text-center">Registration Now</h4>
			<div class="modal-body">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form action="<?php echo base_url('welcome/sendEmail');?>" enctype="multipart/form-data" method="post">

						<div class="control-group">
						  <label class="control-label" for="userfile">First Name<span style="color:red;font-size:16px;">*</span></label>
						  <div class="controls">
							<input type="text" name="first_name" value="" class="form-control" required placeholder="Enter your First Name">
						  </div>
						</div>

						<div class="control-group">
						  <label class="control-label" for="userfile">Last Name</label>
						  <div class="controls">
							<input type="text" name="last_name" value="" class="form-control" placeholder="Enter your Last Name">
						  </div>
						</div>

						<div class="control-group">
						  <label class="control-label" for="userfile">Mobile<span style="color:red;font-size:16px;">*</span></label>
						  <div class="controls">
							<input type="text" name="mobile" value="" class="form-control" required placeholder="Enter your Mobile Number">
						  </div>
						</div>

						<div class="control-group">
						  <label class="control-label" for="userfile">E-mail<span style="color:red;font-size:16px;">*</span></label>
						  <div class="controls">
							<input type="email" name="to_address" value="" class="form-control" required placeholder="Enter your E-mail">
						  </div>
						</div>
						
						<div class="control-group">
						  <label class="control-label" for="userfile">Interested Country<span style="color:red;font-size:16px;">*</span></label>
						  <div class="controls">
							<select name="country" class="form-control" required>
								<option value="">--Select Country</option>
								<option value="UK">UK</option>
								<option value="NORWAY">NORWAY</option>
								<option value="IRELAND">IRELAND</option>
								<option value="GERMANY">GERMANY</option>
								<option value="MALAYSIA">MALAYSIA</option>
								<option value="SWEDEN">SWEDEN</option>
							</select>
						  </div>
						</div>

						<div class="control-group">
						  <label class="control-label" for="userfile">Interested Course<span style="color:red;font-size:16px;">*</span></label>
						  <div class="controls">
							<input type="text" name="interest_course" value="" class="form-control" required placeholder="Enter your Course">
						  </div>
						</div>

					    <div class="control-group">
							<label class="control-label" for="userfile">Do you have IELTS?<span style="color:red;font-size:16px;">*</span></label>
							<div class="controls">
								<input class="selected" type="checkbox"><font color="#000">Yes</font>
								<input type="checkbox"><font color="#000">No</font>
							</div>
							<div class="red box dropdodwnn">
								<input type="text" name="ielts" value="" placeholder="Your point" class="form-control">
							</div>
							<script>
								$(document).ready(function(){
								$('.dropdodwnn').hide();
								$('.selected').click(function(){
								$('.dropdodwnn').slideToggle("fast");
								});
								});
							</script>
						</div>
						
						<div class="control-group">
						  <label class="control-label" for="userfile">Your highest qualification<span style="color:red;font-size:16px;">*</span></label>
						  <div class="controls">
							<input type="text" name="qualification" value="" class="form-control" required placeholder="Enter your Qualification">
						  </div>
						</div>

						<div class="control-group">
						  <label class="control-label" for="userfile">Additional Information</label>
						  <div class="controls">
							<textarea name="comment" class="form-control" placeholder="Enter your Additional Information"></textarea>
						  </div>
						</div>

						<br>

						<div class="form-actions text-center">
						  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
						</div>
					</form>

				</div>

				<!-- <div class="col-lg-6 col-md-6 col-sm-12"></div> -->

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>