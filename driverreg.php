<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Driver Registration</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body> 
	<?php  
		include 'header1.php';
	?>	
	<form method="POST">
	<div class="container">
		<h2>Driver Registration</h2>
		
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="firstname" required="required">
					<span class="text">First Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="lastname" required="required">
					<span class="text">Last Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="email" name="email" required="required">
					<span class="text">Email</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="number" name="cno" required="required">
					<span class="text">Mobile</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="username" required="required">
					<span class="text">User Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="password" name="password" required="required">
					<span class="text">Password</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="city" required="required">
					<span class="text">City</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="vehicle_type" required="required">
					<span class="text">Vehicle Type</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="number" name="vehicle_no" required="required">
					<span class="text">Vehicle Number</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="file" name="driving_license" value="driving_license" required="required">
					<span class="text">Driving License</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="number" name="expirience_year" required="required">
					<span class="text">Expirience Year</span>
					<span class="line"></span>
				</div>
			</div>
		</div>		
		
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<span class="text">					
						<input type="text" name="type">
							Driver Type :
					</span>
					<select name="type" style="color: #45f3ff;padding: 0 180px;">
					<option style="background-color: #000">--select--</option>
					<option value="car drive" style="background-color: #000;  ">car drive</option>
					<option value="food deliver" style="background-color: #000; width: 150px">food deliver</option>
					<option value="freight deliver" style="background-color: #000">freight deliver</option>
					</select>
					<span class="line"></span>
				</div>
			</div>
		</div>		
    
		<div class="row100">
			<div class="col">
				<input type="Submit" name="Submit" value="Sign Up">
			</div>
		</div>
	</div>
</div>
</form>
<?php
	include("connection.php");
	date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'd-m-Y h:i:s A', time () );
	if(isset($_POST['Submit']))
	{    
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$cno = $_POST['cno'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$city = $_POST['city'];
		$vehicle_type = $_POST['vehicle_type'];
		$vehicle_no = $_POST['vehicle_no'];
		$driving_license = $_POST['driving_license'];
		$expirience_year = $_POST['expirience_year'];
		$type = $_POST['type'];
        
		$result = mysqli_query($con,"INSERT INTO `driver_registration` (`id`, `firstname`, `lastname`, `email`, `cno`, `username`, `password`, `city`, `vehicle_type`, `vehicle_no`, `driving_license`, `expirience_year`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES ('', '$firstname', '$lastname', '$email', '$cno', '$username', '$password', '$city', '$vehicle_type', '$vehicle_no', '$driving_license', '$expirience_year', '$type', '$currentTime', '$currentTime', NULL);");		
		echo "recorde successfully inserted...";
    }
    else
    {
 		echo "recorde not inserted...";	
    }
?>
</body>
</html>