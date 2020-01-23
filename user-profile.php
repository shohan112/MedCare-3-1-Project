<?php
include("server.php");
//session_start();
$email = $_SESSION['email'];
$result= mysqli_query($db,"SELECT firstname,lastname,contact,blood_g,birthdate,gender FROM users WHERE email='$email' ");
$retrive = mysqli_fetch_array($result);
//print_r($retrive);

$firstname= $retrive['firstname'];
$lastname= $retrive['lastname'];
$contact= $retrive['contact'];
$blood_g= $retrive['blood_g'];
$birthdate= $retrive['birthdate'];
$gender= $retrive['gender'];


?>
<title>Profile</title>
<style type="text/css">
	#body-bg{
		background-color: #efefef;
	}
</style>
<body id='body-bg'>
	
	<div class='container' style="padding-top:15px;background-color:#fff;margin-top: 20px;margin-bottom: 20px;width: 1500px;height: 640px">
		<h2 align="center">Welcome <?php echo ucfirst($firstname)." ".ucfirst($lastname) ?> </h2>
		<button class='btn btn-outline-success' style="float: right;margin-top: 20px;" ><a href="logout.php?logout">Log Out</a></button>	
	</div>
	
</body>