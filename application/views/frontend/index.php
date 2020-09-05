<html>
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php if(isset($title)){ echo $title; }?></title>
		<link rel="stylesheet" href="<?= base_url('');?>assets/frontend/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?= base_url('');?>assets/frontend/css/style.css" >
		<link rel="stylesheet" href="<?= base_url('');?>assets/frontend/css/responsive.css" >
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>

	<body>

		<?php include('page/menu.php'); ?>
		<?php include('page/slider.php'); ?>
			
			<?php 
				if(isset($content)){
					echo $content;
				}else{
					echo "Found Nothing";
				}
			?>

			<div class="register">
				<div class="reg-fix">
					<a href="#" data-toggle="modal" data-target="#regForm">
			    	    <img src="<?= base_url('assets/frontend/img/register.png');?>">
			        </a>
				</div>
			</div>

			<div class="scroll-to-top">
				<div class="scrollup">
					<i class="fa fa-angle-double-up" aria-hidden="true"></i>
				</div>
			</div>

			<section id="sub_footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2"></div>
							<div class="col-md-3">
								<div class="tag-line">
									<b>Online Service</b><hr>
								</div>
								<div class="icons">
									<i class="fa fa-skype" aria-hidden="true" style="background-color: #26A9E1;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Skype<br>
									<i class="fa fa-pencil" aria-hidden="true" style="background-color: #F15A28;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="<?php print base_url('Welcome/apply');?>" >Apply Now</a><br>
									<i class="fa fa-list" aria-hidden="true" style="background-color: #EF32A3;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="<?php print base_url('Welcome/contact');?>" >Quick Inquery</a><br>
									<i class="fa fa-calendar" aria-hidden="true" style="background-color: #8BC53E;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Event Registration
								</div>
							</div>

							<div class="col-md-3">
								<div class="tag-line">
									<b>Get Social</b><hr>
								</div>
								<div class="icons">
									<i class="fa fa-facebook-square" aria-hidden="true" style="background-color: #2C4889;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="https://www.facebook.com/EngEducationLtd" target="_blank">Facebook</a><br>
									<i class="fa fa-twitter-square" aria-hidden="true" style="background-color: #81BBE4;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="#">twitter</a><br>
									<i class="fa fa-instagram" aria-hidden="true" style="background-color: #3691C3;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="">Instagram</a><br>
									<i class="fa fa-google-plus-square" aria-hidden="true" style="background-color: #C13426;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Google Plus
								</div>
							</div>

							<div class="col-md-3">
								<div class="tag-line">
									<b>Subscribe us</b><hr>
								</div>
								<div class="icons">
									<a href="<?= base_url('welcome/CommonForm/sms');?>"><i class="fa fa-comments" aria-hidden="true" style="background-color: #CB4956;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;SMS</a><br>
									<i class="fa fa-envelope" aria-hidden="true" style="background-color: #FBAF40;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="<?= base_url('welcome/CommonForm/email');?>">Email</a><br>
									<i class="fa fa-user-circle-o" aria-hidden="true" style="background-color: #1B75BB;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Career<br>
									<i class="fa fa-whatsapp" aria-hidden="true" style="background-color: #12B726;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;<a href="<?= base_url('welcome/CommonForm/whatsapp');?>">WhatsApp</a>
								</div>
							</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</section>

			<section id="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-8 col-md-8">
							<div class="footer-text text-left">
								<p>Developed by <a href="http://gatewayit.net/" target="_blank">Gateway IT</a> &nbsp; Copyright © 2018. EN Global Education Limited. All right reserved</p>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="footer-icon pull-right">
								<a href="https://www.facebook.com/EngEducationLtd" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-instagram"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<script>
				//for registration
				$(window).scroll(function(){
					if($(this).scrollTop() > 350){
						$('.reg-fix').fadeIn();
					}else{
						$('.reg-fix').fadeOut();
					}
				});

				//for scroll up

				$(window).scroll(function(){
					if($(this).scrollTop() > 200){
						$('.scrollup').fadeIn();
					}else{
						$('.scrollup').fadeOut();
					}
				});
			
				$('.scrollup').click(function(){
					$("html, body").animate({
						scrollTop: 0
					}, 600);
					return false;
				});
			</script>
		
		<!-- <script type="text/javascript" src="<?= base_url('');?>assets/frontend/js/jquery-2.1.4.min.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>