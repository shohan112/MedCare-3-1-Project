<?php include('server.php')?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medcare &mdash; Registration</title>
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
.success
{
	color:green;
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

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
									<div id="qbootstrap-logo"><a href="index.php"><i class="icon-plus-outline"></i>Med<span>care</span></a></div>
								</div>
								<div class="col-md-4 col-md-pull-4">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">999</a><br><a href="#">0721-772150</a></p>
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
								<li><a href="index.php">Home</a></li>
								
								<li class="has-dropdown">
									<a href="departments.php">Departments</a><x class="arrow down"></x>
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
									<a href="location.html>Locations</a><x class="arrow down"></x>
								    <ul class = "dropdown">
								    	<li><a href="loc.html">Hospitals</a></li>
								    	<li><a href="location.html">Emergency Room</a></li>
								    	<li><a href="location.html">Labs</a></li>
								    	<li><a href="location.html">Diagonistics Center</a></li>
								    	<li><a href="location.html">Urgent Care center</a></li>
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
	

	

	<div id="qbootstrap-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Patient Registration</h2>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form action="register.php" method= "POST" class="appointment-wrap animate-box">
					  <?php include('errors.php')?>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="firstname">First Name</label>
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Your firstname" required >
							</div>
							<div class="col-md-6">
								<label for="lastname">Last Name</label>
								<input type="text" id="lastname"  name="lastname" class="form-control" placeholder="Your lastname" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email"  name="email" class="form-control" placeholder="Your email address" required >
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="contact">Contact Number</label>
								<input type="text" id="contact"  name="contact" class="form-control" placeholder="Your Contact Number" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="blood_g">Blood Group</label>
								<select name="blood_g" class="selectpicker form-control">
									<option>Choose Your Blood Group</option>
								   <option>A+</option>
								   <option>A-</option>
								   <option>B+</option>
								   <option>B-</option>
								   <option>O+</option>
								   <option>O-</option>
								   <option>AB+</option>
								   <option>AB-</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="birthdate">Birth of Date</label> <i class="icon-calendar3"></i><br>
								<input type="Date" class="form-control" name="birthdate" required>
							</div>
						</div>

                        <div class="row form-group">
							<div class="col-md-6">
								<label for="password1">Password</label>
							    <input type="text" id="password1"  name="password1" class="form-control" placeholder="Password contains (A-Z),(a-z),any symbol" required>
							</div>
							<div class="col-md-6">
								<label for="pass_2">Re-Enter Password</label>
								<input type="text" id="pass_2"  name="password2" class="form-control" placeholder="Retype Password" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
							  <label for="gender">Gender</label>
                                            <div class="custom-control custom-radio d-inline-block">
                                                <input type="radio" id="male" name="gender" value="Male" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="male">Male</label>
                                            </div>

                                            <div class="custom-control custom-radio d-inline-block">
                                                <input value="Female" type="radio" id="female" name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="female">Female</label>
                                   			</div>
                            </div>
                        </div>
                        <div class="row form-group">
                        	<div class="col-md-12"> 
                        		<lebel> Profile Image: </lebel> <input type="file" name = "image" />
                        	</div>
                        </div>
						<div class="form-group">
							<input type="submit" value="Register" name="reg_user" class="btn btn-primary">
						</div>
						<p>
			               Already have an Account?? <a href="login.php">Log in</a>
		                </p>
					</form>
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
						<li><a href="#">Terms</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Our Services</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Heart Surgery</a></li>
						<li><a href="#">Surgical Treatment</a></li>
						<li><a href="#">General Treatment</a></li>
						<li><a href="#">Medical Treatment</a></li>
						<li><a href="#">Help Desk</a></li>
					</ul>
				</div>

				<div class="col-md-5 col-sm-4 col-xs-12 qbootstrap-widget">
					<h3>Lets Talk</h3>
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
                    <small class="block">&copy;  All Rights Reserved.By Shohanur Rahman</small> 
                    <small class="block">Designed by <a href="https://cse.ruet.ac.bd/" target="_blank">Dept of CSE,RUET</a></small>
                </p>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>