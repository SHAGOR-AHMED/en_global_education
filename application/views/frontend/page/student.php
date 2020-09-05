
<section id="top_img_section">
	<div class="container-fluid">
		<div class="top-img">
			<img class="img-responsive" src="<?= base_url('');?>assets/img/student.jpg" alt="img">
		</div>
	</div>
</section>

<section id="std_service">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="about-top">
					<h2 class="text-left">Services Provided to Students</h2>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="about-top">
					<p>We have experience of placing students in various institutions overseas, we understand the challenges faced by those aspiring to study abroad. Keeping in mind the needs of such students, we have designed our processes in a manner that every single task from admission to end is smooth and hassle free. Our team is well groomed to efficiently process the applications through the complex maze of formalities. We help our students to identify the best course and university that perfectly match their aptitude, interests, academic and financial background.
					</p>
					<p>Whether you have a tight deadline or difficult circumstances, our visa specialist will advise you most appropriate solution and work with you to secure your Enrolment. We continuously develop new solutions in order to bring you the best experience.</p>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>

<section id="service_details">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5" style="border-right: 1px solid #e2e2e2;">
				<h1>Our services include</h1>
				<p>
					<ul>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Country selection</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Course selection</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> University selection</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Eligibility check</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Qualifications mappings</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> SOP writing support</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Motivational latter writing support</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> CV writing support</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Career planning Support</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Application for admission</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Scholarship</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Bank Account opening help</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Advise for Financial evedience</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Tuition fees payment help</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Advice on visa application</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Cover letter writing</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Interview preparation</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Administrative review application</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Air ticket</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Air port pick up</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Currency exchange help</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Finding Accommodations</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Pre landing training</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Post landing training</li>
						<li><i class="fa fa-fighter-jet" aria-hidden="true"></i> Student travel card</li>
					</ul>
				</p>
			</div>
			<div class="col-md-5">
				<div class="details-img">
					<img class="img-responsive" src="<?= base_url('');?>assets/img/student2.jpg" alt="service images"><hr>
					<div class="text-center">
						<h3>Make an Appointment Now</h3>
					</div>
					<fieldset style="box-shadow: 0 0 85px 62px #ccc inset; padding: 20px; border-radius:10px; color: #000">
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
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>