<html>
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php if(isset($title)){ echo $title; }?></title>
		<link rel="stylesheet" href="<?= base_url('');?>assets/frontend/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?= base_url('');?>assets/frontend/css/style.css" >
		
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<!--slider -->
			<!-- Scripts For Layer Slider  -->
			<link rel="stylesheet" href="<?= base_url('');?>assets/frontend/layerslider/css/layerslider.css" type="text/css">

			<script src="<?= base_url('');?>assets/frontend/layerslider/JQuery/jquery-easing-1.3.js" type="text/javascript"></script>
			<script src="<?= base_url('');?>assets/frontend/layerslider/JQuery/jquery-transit-modified.js" type="text/javascript"></script>
			<script src="<?= base_url('');?>assets/frontend/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
			<script src="<?= base_url('');?>assets/frontend/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#layerslider').layerSlider({
						skinsPath : '<?= base_url('');?>assets/frontend/layerslider/skins/',
						skin : '<?= base_url('');?>assets/frontend/layerslider/skins/defaultskin',
						responsive: true,
						responsiveUnder: 1200,			
						pauseOnHover: false,
						showCircleTimer: false,
						navStartStop:false,
						navButtons:false,
					}); // LAYER SLIDER
					
			$(function() {
				
				$('#causes2').carouFredSel({
					auto: false,
					pagination: "#pager",
					items: {
						visible: 1,
					},
				}); // CAUSES CAROUSEL

				$('#reviews').carouFredSel({
					auto: true,
					pagination: "#pager2",
					items: {
						visible: 1,
					},
				}); // FOOTER CAROUSEL


				$('#carousel').carouFredSel({
					responsive: true,
					circular: false,
					auto: false,
					items: {
						visible: 1,
						width: 20,
						height: '40%'
					},
					scroll: {
						fx: 'directscroll'
					}
				});
				$('#thumbs').carouFredSel({
					responsive: true,
					circular: false,
					infinite: false,
					auto: false,
					prev: '#prev',
					next: '#next',
					items: {
						visible: {
							min: 1,
							max: 6
						},
						width: 200,
						height: '80%'
					}
				});
				$('#thumbs a').click(function() {
					$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
					$('#thumbs a').removeClass('selected');
					$(this).addClass('selected');
					return false;
				});
				
			});
				
						
			});		

			</script>
		<!--slider -->
	</head>

	<body>

		<?php include('page/menu.php'); ?>


		<?php if($banner){ ?>

			<!-- <section id="slider" class="text-center">
				<div class="slider-overlay">
					<div class="container-fluid">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							  </ol>
							  <div class="carousel-inner">

								<div class="carousel-item active">
									<img class="d-block w-100" src="<?= base_url('');?>assets/frontend/img/1.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
									    <h2>DEMO TEXT</h2>
									    <h3>DEMO TEXT</h3>
									</div>
								</div>

								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url('');?>assets/frontend/img/2.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
									    <h2>DEMO TEXT</h2>
									    <h3>DEMO TEXT</h3>
									</div>
								</div>

								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url('');?>assets/frontend/img/3.jpg" alt="Third slide">
									<div class="carousel-caption d-none d-md-block">
									    <h2>DEMO TEXT</h2>
									    <h3>DEMO TEXT</h3>
									</div>
								</div>

								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url('');?>assets/frontend/img/4.jpg" alt="Fifth slide">
									<div class="carousel-caption d-none d-md-block">
									    <h2>DEMO TEXT</h2>
									    <h3>DEMO TEXT</h3>
									</div>
								</div>
								
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
						</div>
					</div>
				</div>
			</section> -->

			<div id="layerslider-container-fw">
				<div id="layerslider" style="width: 100%; height: 600px; margin: 0px auto; ">
				
					<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >			
						
						<img src="<?= base_url('');?>assets/frontend/img/1.jpg" class="ls-bg" alt="Slide background">
							<h3 class="ls-s-1" style="top: 223px; left:248px; background: url(<?= base_url('');?>assets/frontend/img/1.jpg) no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px; delayin:500; scaleout:.5; slidedirection:fade;" ><i>SAVE</i> <span>ENVIRONMENT</span></h3>
							<span class="ls-s-1"	style="top: 300px; left:248px; font-family:roboto; font-size:24px; font-weight:600; color:#000; padding:10px 20px 10px 50px; background:rgba(255,255,255,0.9); border-radius:4px 0 0px 4px; border-left:2px solid #93b631; position:relative; line-height:22px; float:left; delayin:1000; scalein:0; slidedirection:left; durationin : 2500;">BE READY TO WORK <i>WITH US</i></span>
							<p class="ls-s-1"	style="top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo <br/> sem, at egestas nulla metus vel sapien! Lorem ipsum dolor</p>
					</div><!-- Slide1 -->

					<div class="ls-layer" style="transition2d: 45; slidedelay: 8000;" >			
						<img src="<?= base_url('');?>assets/frontend/img/1.jpg" class="ls-bg" alt="Slide background">
							<h3 class="ls-s-3 slide3-first" style="top:296px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5;  durationin :2000; delayin:500; showuntil:3000; slideoutdirection:right; easingin : easeOutQuad;">
									HELP <i>US</i> TO HELP OTHERS</h3>
									
							<h4 class="ls-s-3 slide3-second" style="top:365px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1000; showuntil:3500; slideoutdirection:right; easingin : easeOutQuad; ">
									RESPONSIVE <span>TEMPLATE</span></h4>
						
							<h5 class="ls-s-3 slide3-third" style="top:419px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1500;  showuntil:4000; slideoutdirection:right; easingin : easeOutQuad;">
									CREATIVE <span>IDEAS</span></h5>
						
					</div><!-- Slide2 -->
					
					<div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >			
						<img src="<?= base_url('');?>assets/frontend/img/1.jpg" class="ls-bg" alt="Slide background">
							<h3 class="ls-s-2" style="top: 260px;left:230px; font-family:roboto; font-size:72px; font-weight:bold; color:#fff; line-height:60px; delayin:500; scaleout:.5; slidedirection:fade;" >I WANNA SAY <span>SOMETHING</span></h3>
							
							<span class="ls-s-2" style="top: 348px; left:230px; background:#9bd362; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1000; showuntil:3000; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">Please Feel My <i style="font-style:normal; color:#373737;">Tension</i></span>

							<span class="ls-s-2" style="top: 348px; left:807px; background:rgba(0,0,0,0.8); padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1500; showuntil:3500; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">We <i style="font-style:normal; color:#98d460;">Need</i> Your Help</span>
					</div><!-- Slide3 -->

					
					<div class="ls-layer" style="transition2d: 32; slidedelay: 8000;" >			
						<img src="<?= base_url('');?>assets/frontend/img/1.jpg" class="ls-bg" alt="Slide background">
						
						<h3 class="ls-s-4" style="top:280px; left:180px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px; slidedirection:bottom; scalein :0; easingin : easeOutQuad; durationin :2000; delayin:500;">
							SAVE THE <i>WORLD</i></h3>

						<span class="ls-s-4" style="top:380px; left:245px; background: none repeat scroll 0 0 #95D05E;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px; slidedirection:top; scalein :0; durationin :2500;">Want To Know Why And How We Do It?</span>
							
						<h4 class="ls-s-4" style="top:415px; left:130px; color:#030303; font-family:source sans pro; font-size:20px; font-weight:700; slidedirection:fade; scalein :0; durationin :2000; delayin:2000;">OUR CHARITY HELPS THOSE PEOPLE WHO HAVE NO HOPE</h4>
						
						<p class="ls-s-4" style="top:450px; left:70px; font-family:roboto; font-size:14px; color:#030303; slidedirection:fade; scalein :2; durationin :2000; delayin:4000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo sem, at egestas nulla metus.</p>
						
					</div><!-- Slide4 -->
					
				</div>
				
			</div><!-- Layer Slider -->	

			<?php } ?>
			
			<?php 
				if(isset($content)){
					echo $content;
				}else{
					echo "Found Nothing";
				}
			?>

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
									<i class="fa fa-pencil" aria-hidden="true" style="background-color: #F15A28;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Apply Now<br>
									<i class="fa fa-list" aria-hidden="true" style="background-color: #EF32A3;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Quick Inquery<br>
									<i class="fa fa-calendar" aria-hidden="true" style="background-color: #8BC53E;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Event Registration
								</div>
							</div>

							<div class="col-md-3">
								<div class="tag-line">
									<b>Get Social</b><hr>
								</div>
								<div class="icons">
									<i class="fa fa-facebook-square" aria-hidden="true" style="background-color: #2C4889;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Facebook<br>
									<i class="fa fa-twitter-square" aria-hidden="true" style="background-color: #81BBE4;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;twitter<br>
									<i class="fa fa-linkedin-square" aria-hidden="true" style="background-color: #3691C3;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Linkedin<br>
									<i class="fa fa-google-plus-square" aria-hidden="true" style="background-color: #C13426;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Google Plus
								</div>
							</div>

							<div class="col-md-3">
								<div class="tag-line">
									<b>Subscribe us</b><hr>
								</div>
								<div class="icons">
									<i class="fa fa-comments" aria-hidden="true" style="background-color: #CB4956;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;SMS<br>
									<i class="fa fa-envelope" aria-hidden="true" style="background-color: #FBAF40;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Email<br>
									<i class="fa fa-user-circle-o" aria-hidden="true" style="background-color: #1B75BB;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;Career<br>
									<i class="fa fa-whatsapp" aria-hidden="true" style="background-color: #12B726;padding: 10px 10px;color: #fff;border-radius: 5px;"></i>&nbsp;WhatsApp
								</div>
							</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</section>

			<section id="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="footer-text text-left">
								<p>Developed by Gateway IT &nbsp; Copyright © 2018. EN Global Education Limited. All right reserved</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-icon pull-right">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-google-plus"></i>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		<script type="text/javascript" src="<?= base_url('');?>assets/frontend/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="<?= base_url('');?>assets/frontend/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= base_url('');?>assets/frontend/js/isotope.min.js"></script>
		<script type="text/javascript" src="<?= base_url('');?>assets/frontend/js/isotope.function.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="<?= base_url('');?>assets/frontend/js/jquery.counterup.min.js"></script>
	</body>
</html>