
<link rel="stylesheet" href="<?= base_url('assets/frontend/menu/');?>css/style.css">
<header>
	<div class="nav-container">
	    <a href="#" class="logo">
	    	<img class="img-responsive" src="<?= base_url('');?>assets/frontend/img/logo2.png" alt="Logo">
	    </a>
	    <a class="navicon-button">
	      <div class="navicon"></div>
	    </a>
	    <nav>
	      <ul>
	        <li><a href="<?php print base_url();?>"><i class="fa fa-home" style="font-size:20px;"></i></a></li>
	        <li><a href="<?php print base_url('Welcome/about');?>">About Us</a></li>

	        <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Our Services
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="<?php print base_url('Welcome/student');?>">Our services for students</a>
				  <a class="dropdown-item" href="<?php print base_url('Welcome/institue');?>">Our services for partner institues</a>
				</div>
		    </li>

		    <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Study destination
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="<?php print base_url('Welcome/uk');?>">Study in UK</a>
				  <a class="dropdown-item" href="<?php print base_url('Welcome/norwy');?>">Study in Norwy</a>
				  <a class="dropdown-item" href="<?php print base_url('Welcome/ireland');?>">Study in Ireland</a>
				  <a class="dropdown-item" href="<?php print base_url('Welcome/germany');?>">Study in Germany</a>
				  <a class="dropdown-item" href="<?php print base_url('Welcome/malysisa');?>">Study in Malysisa</a>
				  <a class="dropdown-item" href="<?php print base_url('Welcome/sweden');?>">Study in Sweden</a>
				</div>
			</li>

	        <li><a href="<?php print base_url('Welcome/scholarship');?>">Scholarship</a></li>
	        <li><a href="<?php print base_url('Welcome/apply');?>">Apply Now</a></li>
	        <li><a href="<?php print base_url('Welcome/contact');?>">Contact</a></li>
	      </ul>
	    </nav>
	</div>
</header>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?= base_url('assets/frontend/menu/');?>js/index.js"></script>