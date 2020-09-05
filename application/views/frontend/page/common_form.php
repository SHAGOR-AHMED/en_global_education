
<section id="apply">
	<div class="container-fluid">
		<div class="about-top">
			<div class="text-center">
				<?php 
					if($val == 'sms'){
						echo "<h1>"."MOBILE SMS SUBSCRIPTION"."</h1>";
					}elseif($val == 'email'){
						echo "<h1>"."EMAIL SUBSCRIPTION"."</h1>";
					}elseif ($val == 'whatsapp') {
						echo "<h1>"."WHATSAPP SUBSCRIPTION"."</h1>";
					}
				?>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<fieldset style="box-shadow: 0 0 85px 62px #ccc inset; padding: 20px; border-radius:10px; color: #000;">
						<form action="<?php echo base_url('');?>" enctype="multipart/form-data" method="post">

							<div class="control-group">
							  <label class="control-label" for="userfile">Your Name<span style="color:red;font-size:16px;">*</span></label>
							  <div class="controls">
								<input type="text" name="first_name" value="" class="form-control" required placeholder="Enter your First Name">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="userfile">Your Number<span style="color:red;font-size:16px;">*</span></label>
							  <div class="controls">
								<input type="text" name="mobile" value="" class="form-control" required placeholder="Enter your Mobile Number">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="userfile">Your E-mail<span style="color:red;font-size:16px;">*</span></label>
							  <div class="controls">
								<input type="email" name="email" value="" class="form-control" required placeholder="Enter your E-mail">
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="userfile">Your highest qualification<span style="color:red;font-size:16px;">*</span></label>
							  <div class="controls">
								<input type="text" name="qualification" value="" class="form-control" required placeholder="Enter your Qualification">
							  </div>
							</div>
							<br>

							<div class="form-actions text-center">
							  <button type="submit" name="sub" class="btn btn-primary">Submit your Query</button>
							</div>
						</form>
					</fieldset>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</section>