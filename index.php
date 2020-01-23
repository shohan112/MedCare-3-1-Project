<?php
session_start();
if (isset($_SESSION["username"])) {
	$_SESSION['msg'] = "You Must Log In First";
	header("location: login.php");
}
if (isset($_GET['Log Out'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medcare &mdash; Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  	#log_reg{color:orange;text-align: right}
</style>

<style>
x {
  border: solid grey;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}
.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>

<style>
    .button {
            background-color: #ff6600;
 			border-radius: 8px;
  			border: none;
 		    color: white;
 			padding: 5px 10px;
 		 	text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 14px;
  			margin: 4px 2px;
  			cursor: pointer;
		}
</style>

<style>
countdown {
  color: white;
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
 
	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<link rel="stylesheet" href="css/flexslider.css">
	
	<link rel="stylesheet" href="css/style.css">

	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
	
	<br>

	<p id="log_reg"><a href="login.php" class="button">Log In</a>
    <a href="register.php" class="button">Sign Up</a></p>
	<div class="qbootstrap-loader"></div>
	<div id="page">
	<nav class="qbootstrap-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-4 col-md-push-4 text-center">
									<div id="qbootstrap-logo"><a href="index.php ?>"><i class="icon-plus-outline"></i>med<span>care</span></a></div>
								</div>
								<div class="col-md-4 col-md-pull-4">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">0721-772150</a><br><a href="#">999</a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">Medical College Road, Laxmipur, Rajpara, Rajshahi-6100,Bangladesh</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 text-center">
						<div class="menu-1">
							<ul>
								<li class="active"><a href="index.php ">Home</a></li>
								
								<li class="has-dropdown">
									<a href="departments.php ">Departments</a><x class="arrow down"></x>
									<ul class="dropdown">
										<li><a href="departments-single.php">Plasetic Surgery Department</a></li>
										<li><a href="departments-single.php">Dental Department</a></li>
										<li><a href="departments-single.php">Psychological Department</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a href="doctors.php">Doctors</a><x class="arrow down"></x>
									<ul class="dropdown">
										<li><a href="doctors-single.php">Single Doctor</a></li>
										<li><a href="doctors-single.php">Cardiologists</a></li>
										<li><a href="doctors-single.php">Gynecologists</a></li>
										<li><a href="doctors-single.php">Oncologists</a></li>
										<li><a href="doctors-single.php">Orthopedic Surgeons</a></li>
										<li><a href="doctors-single.php">Pediatricians</a></li>
										<li><a href="doctors-single.php">Pimary care</a></li>
									</ul>
								</li>

								<li class="has-dropdown">
									<a href="location.html">Locations</a><x class="arrow down"></x>
								    <ul class = "dropdown">
								    	<li><a href="loc.html">Hospitals</a></li>
								    	<li><a href="location.html">Emergency Room</a></li>
								    	<li><a href="loc.html">Labs</a></li>
								    	<li><a href="loc.html">Diagonistics Center</a></li>
								    	<li><a href="loc.html">Urgent Care center</a></li>
								    </ul>
								</li>

								<li class="has-dropdown">
									<a href="services.php">Services</a><x class="arrow down"></x>
								    <ul class = "dropdown">
								    	<li><a href="services.php">Cancer Treatment</a></li>
								    	<li><a href="services.php">Emergency and Urgent care</a></li>
								    	<li><a href="services.php">Heart and Vascular</a></li>
								    	<li><a href="services.php">Mental health</a></li>
								    	<li><a href="services.php">Orthopedics</a></li>
								    	<li><a href="blood_bank.php">Blood Bank</a></li>
								    </ul>
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li class="btn-cta"><a href="appointment.php"><span>Make an Appointment <i class="icon-calendar3"></i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="qbootstrap-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/welc.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1> <strong> Welcome </strong></h1>
									<h2 class="doc-holder">Doctors are ready to serve you</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Dr. <strong> Steven Strange </strong></h1>
									<h2 class="doc-holder">Dr. Strange's Neuro Clinic Welcomes You!</h2>
									<p><a class="btn btn-primary btn-lg" href="appointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
			//bloodbank
			<li style="background-image: url(images/b_bank_slider.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Medcare <strong>Bloodbank</strong></h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="blood_bank.php">Search Blood</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>

		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Have an Access to <strong>a Health Professional at any time</strong></h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="appointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Special offer! <strong>Free Consultation</strong></h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="appointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="qbootstrap-doctor">
		<div class="container-fluid">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Experienced Doctors</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-4.jpg);"></div>
						<h3><a href="doctors-single.php">Mary Smith</a></h3>
						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-2.jpg);"></div>
						<h3><a href="doctors-single.php">Steven Strange</a></h3>
						<span>Orthopedic Surgeon</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-3.jpg);"></div>
						<h3><a href="doctors-single.php">Jenny Anderson</a></h3>
						<span>Health Care</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);"></div>
						<h3><a href="doctors-single.php">Bob Barker</a></h3>
						<span>Patient Services Manager</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="qbootstrap-counter" class="qbootstrap-counters" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-group-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Satisfied Customer</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-home-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="37" data-speed="500" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Hospitals</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-user-add-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Qualified Doctor</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-point-of-interest-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="30" data-speed="50" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Departments</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	

	<div id="qbootstrap-register" style="background-image: url(images/img_bg_6.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="date-counter text-center">
						<h2>We offer <strong class="color">Free Consultation</strong></h2>
						<h3>By Dr. <strong>Mary Smith</strong></h3>
						
						<countdown id="counter"></countdown>
                          <script>
                           
                              var countDownDate = new Date("Jan 20, 2020 15:37:25").getTime();

                              
                              var x = setInterval(function() {

  
                              var now = new Date().getTime();
    
  
                              var distance = countDownDate - now;
    
  
                              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  
                              document.getElementById("counter").innerHTML = days + "d " + hours + "h "
                               + minutes + "m " + seconds + "s ";
    
  
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("counter").innerHTML = "EXPIRED";
                                }
                                }, 1000);
                            </script>

						<p><strong>Limited offer, Hurry Up!</strong></p>
						<p><a href="appointment.php" class="btn btn-primary btn-lg">Book an Appointment <i class="icon-calendar3"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 qbootstrap-widget">
					<h3>About</h3>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Links</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Department</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="blood_bank.php">Blood Bank</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="doc-register.php">Doctor Section</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Our Services</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Heart Surgery</a></li>
						<li><a href="#">Surgical Treatment</a></li>
						<li><a href="#">General Treatment</a></li>
						<li><a href="#">Medical Treatment</a></li>
						<li><a href="blood_bank.php">Blood Bank</a></li>
						<li><a href="#">Help Desk</a></li>
					</ul>
				</div>

				<div class="col-md-5 col-sm-4 col-xs-12 qbootstrap-widget">
					<h3>Let's Talk</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy;  All Rights Reserved.</small> 
                    <small class="block">Designed by <a href="#" target="_blank">Shohanur Rahman</a></small>
                </p>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/jquery.stellar.min.js"></script>
	
	<script src="js/owl.carousel.min.js"></script>
	
	<script src="js/jquery.flexslider-min.js"></script>
	
	<script src="js/jquery.countTo.js"></script>
	
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/sticky-kit.min.js"></script>
	
	<script src="js/main.js"></script>

	</body>
</html>

