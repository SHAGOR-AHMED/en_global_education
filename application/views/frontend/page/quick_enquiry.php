<fieldset>
	<div class="text-center">
		<p>QUICK ENQUIRY</p>
	</div>
	<form action="<?php echo base_url('welcome/QuickEnquiryMail');?>" enctype="multipart/form-data" method="post">

		<div class="control-group">
		  <label class="control-label" for="userfile">First Name<span style="color:red;font-size:16px;">*</span></label>
		  <div class="controls">
			<input type="text" name="first_name" value="" class="form-control" required placeholder="Enter your First Name">
		  </div>
		</div>

		<div class="control-group">
		  <label class="control-label" for="userfile">Last Name</label>
		  <div class="controls">
			<input type="text" name="last_name" value="" class="form-control"  placeholder="Enter your Last Name">
		  </div>
		</div>

		<div class="control-group">
		  <label class="control-label" for="userfile">Mobile<span style="color:red;font-size:16px;">*</span></label>
		  <div class="controls">
			<input type="number" name="mobile" value="" class="form-control" required placeholder="Enter your Mobile Number">
		  </div>
		</div>

		<div class="control-group">
		  <label class="control-label" for="userfile">E-mail<span style="color:red;font-size:16px;">*</span></label>
		  <div class="controls">
			<input type="email" name="to_address" value="" class="form-control" required placeholder="Enter your E-mail">
		  </div>
		</div>

		<div class="control-group">
		  <label class="control-label" for="userfile">Your Query</label>
		  <div class="controls">
			<textarea name="comment" class="form-control" placeholder="Enter your Query"></textarea>
		  </div>
		</div>

		<br>

		<div class="form-actions text-center">
		  <button type="submit" name="sub" class="btn btn-primary">Submit your Query</button>
		</div>
	</form>

	<div class="sidemenu">
		<ul>
			<li><a href="#quickfact" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Quick Facts</a></li>

			<li><a href="#whystudy" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Why study</a></li>

			<li><a href="#edusys" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Education system</a></li>

			<li><a href="#qualification" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Qualifications offered</a></li>

			<li><a href="#test" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Test requirements</a></li>

			<li><a href="#intake" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Intakes</a></li>

			<li><a href="#educost" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Cost of education</a></li>

			<li><a href="#living" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Cost of living</a></li>

			<li><a href="#workright" class="page-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Work rights and stay back</a></li>
		</ul>
	</div>
	<br>

	<div class="text-center">
		<p>APPOINTMENT NOW</p>
	</div>
	<fieldset style="box-shadow: 0 0 85px 62px #ccc inset; padding: 20px; border-radius:10px;">
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
				<input type="text" name="last_name" value="" class="form-control" required placeholder="Enter your Last Name">
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="userfile">Mobile<span style="color:red;font-size:16px;">*</span></label>
			  <div class="controls">
				<input type="number" name="mobile" value="" class="form-control" required placeholder="Enter your Mobile Number">
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
				<select name="country" class="form-control">
					<option value="0">--Select Country</option>
					<option value="UK">UK</option>
					<option value="NORWAY">NORWAY</option>
					<option value="IRELAND">IRELAND</option>
					<option value="GERMANY">GERMANY</option>
					<option value="MALYSIA">MALAYSIA</option>
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
					<input class="select" type="checkbox">Yes
					<input type="checkbox">No
				</div>
				<div class="red box dropdodwn">
					<input type="text" name="ielts" value="" placeholder="Your score" class="form-control">
				</div>
				<script>
					$(document).ready(function(){
					$('.dropdodwn').hide();
					$('.select').click(function(){
					$('.dropdodwn').slideToggle("fast");
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

			<div class="form-actions">
			  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</fieldset>

</fieldset>