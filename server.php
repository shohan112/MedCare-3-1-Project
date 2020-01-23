<?php 
	session_start();

	
	$firstname = "";
	$lastname = "";
	$email    = "";
	$contact = "";
	$blood_g = "";
	$dept = "";
	$birthdate = "";
	$password1="";
	$password2="";
	$gender="";
	$image="";
	$errors = array(); 
	$_SESSION['success'] = "";


	$db = mysqli_connect('localhost', 'root','','doc_care');


	if(isset($_POST['appointment'])){
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$contact = mysqli_real_escape_string($db, $_POST['contact']);
		$birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
		$dept = mysqli_real_escape_string($db, $_POST['dept']);
		$blood_g = mysqli_real_escape_string($db, $_POST['blood_g']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);

		if (empty($firstname)) { array_push($errors, "Username is required"); }
		if (empty($dept)) { array_push($errors, "Department is required"); }
		if (empty($contact)) { array_push($errors, "Contact no. is required"); }
		if (empty($blood_g)) { array_push($errors, "Blood Group is required"); }
		if (empty($birthdate)) { array_push($errors, "Date of Birth is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }

		if (count($errors) == 0) {
		       $sq = "INSERT INTO appointment (firstname,lastname, email, contact,birthdate, dept,blood_g,gender) 
					  VALUES('$firstname','$lastname', '$email', '$contact','$birthdate','$dept','$blood_g', '$gender')";
		        mysqli_query($db, $sq);

		       echo $_SESSION['firstname'] = $firstname ;
			   echo $_SESSION['success'] = " You are Successfully Booked an Appointment with serial no # ";
			   $qu = mysqli_query( $db,"SELECT id FROM appointment WHERE firstname = '$firstname' ");
			   echo $qu;
			   
			   
		} 
	    
	}

	
	if (isset($_POST['reg_user'])) {
		
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$contact = mysqli_real_escape_string($db, $_POST['contact']);
		$blood_g = mysqli_real_escape_string($db, $_POST['blood_g']);
		$birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$image = mysqli_real_escape_string($db, $_FILES['image']);
		

		
		if (empty($firstname)) { array_push($errors, "Username is required"); }
		if (empty($lastname)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($contact)) { array_push($errors, "Contact no. is required"); }
		if (empty($blood_g)) { array_push($errors, "Blood Group is required"); }
		if (empty($birthdate)) { array_push($errors, "Date of Birth is required"); }
		if (empty($password1)) { array_push($errors, "Password is required"); }
		if (empty($gender)) { array_push($errors, "Blood Group is required"); }

		if ($password1 != $password2) {
			array_push($errors, "The two passwords do not match");
		}

		$user_check_query="SELECT * FROM users WHERE email='$email'limit 1";
		$results = mysqli_query($db,$user_check_query);
		$user = mysqli_fetch_assoc($result);
		if($user){
			if($user['email'] === $email){array_push($errors, 'Email already exists!!');}
		}

		
		if (count($errors) == 0) {
			$password = md5($password1);
			$sql = "INSERT INTO users (firstname,lastname, email, contact, blood_g,birthdate, password ,gender,image) 
					  VALUES('$firstname','$lastname', '$email', '$contact','$blood_g','$birthdate', '$password',  '$gender','$image')";
			mysqli_query($db, $sql);

			$_SESSION['firstname'] = $firstname;
			$_SESSION['success'] = "You have Registered Successfully";
			header('location: login.php');
		}

	}

	
   if (isset($_POST['login_user'])) 
	{
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

	    if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0 ) { 
			$password = md5($password);
			
			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
			$results = mysqli_query($db, $query);
			
			if(mysqli_num_rows($results)){
				$_SESSION['firstname']=$firstname;
				$_SESSION['success']="logged In Successfully";
				$_SESSION['email']=$email;
				header("location: dashboard.php");	
			}else{
				array_push($errors, "Wrong Email/Password combination");
			}
		}
	}

	if(isset($_POST['search'])){
		$valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `users` WHERE CONCAT( `blood_g`) LIKE'%".$valueToSearch."%'";
    $search_result = filterTable($query);
	}
	 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);}
	function filterTable($query)
{
    $db = mysqli_connect('localhost', 'root','','doc_care');
    $filter_Result = mysqli_query($db, $query);
    return $filter_Result;
    header("location: blood_bank.php");
}

?> 