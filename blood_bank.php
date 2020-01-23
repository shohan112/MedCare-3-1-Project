<?php include('server.php')?>

<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medcare &mdash; Blood Bank</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/blood_bank.css" rel="stylesheet" />
	
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

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #006666;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
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
									<a href="location.html">Locations</a><x class="arrow down"></x>
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
	
	

	<div class="s130" style="background-image: url(images/blood_banner.jpg);" data-stellar-background-ratio="0.5">
      <form action="blood_bank.php" method="post">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input type="text"  onkeyup="this.value = this.value.toUpperCase();" name="valueToSearch" placeholder="Search Blood">
          </div>
          <div class="input-field second-wrap">
          	<input type="submit" value="Search" name= "search" class="btn-search">
            
          </div>
        </div>
        <span class="info">ex. A+ , b- </span>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
	

    <div id="qbootstrap-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Donor List</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form> 
						<table class="content-table" align="center" border="1px" style="width: 800px; line-height: 40px">
    						<tr>
    							<th colspan="5"><h2><br> <center>Available Donors</center> </h2></th>
    						</tr>
    						<t>
    							<th><center> Name</center></th>
    							<th><center> Email</center></th>
    							<th><center> Contact</center></th>
    							<th><center>Blood Group</center></th>
    							<th><center> Gender</center></th>
    						</t>
    						<?php while($row = mysqli_fetch_array($search_result)): ?>
              				<tr>
                   				<td><?php echo $row['firstname'];?></td>
                   				<td><?php echo $row['email'];?></td>
                    			<td><?php echo $row['contact'];?></td>
                    			<td><?php echo $row['blood_g'];?></td>
                   				<td><?php echo $row['gender'];?></td>
                			</tr>
        					<?php endwhile;?>
   						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	

	


	<div id="qbootstrap-register" style="background-image: url(images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="date-counter text-center">
						<h2>We offer <strong class="color">Free Consultation</strong></h2>
						<h3>By Dr. <strong>Mary Smith</strong></h3>
						<countdown id="counter"></countdown>
                          <script>
                           // Set the date we're counting down to
                              var countDownDate = new Date("Jan 20, 2020 15:37:25").getTime();

                              // Update the count down every 1 second
                              var x = setInterval(function() {

  // Get today's date and time
                              var now = new Date().getTime();
    
  // Find the distance between now and the count down date
                              var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
                              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
                              document.getElementById("counter").innerHTML = days + "d " + hours + "h "
                               + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
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
                    <small class="block">&copy; All Rights Reserved.</small> 
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