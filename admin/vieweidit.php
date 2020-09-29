<?php
		require_once("connection.php");
	$id = $_GET['editid'];
    $query = "SELECT * FROM user_registratiton where id='".$id."'";
   
	$result = mysqli_query($con, $query);

	while($row = mysqli_fetch_assoc($result)) 
	{
		$id =$row['id'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$cno = $row['cno'];
		$username = $row['username'];
		$password = $row['password'];
		$city = $row['city'];
		
	}
?>    
<!DOCTYPE html>
<html>
<head>
	<title>Edit User Information</title>
	<style>
		
	</style>
</head>
<body>
	<form action="viewupdate.php" method="POST">
	<div class="container">
		<h2>Edit Id</h2>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<span class="line"></span>
				</div>
			</div>
		</div>		
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname ?>">
					<span class="text">First Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>
		
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="Last name" name="lastname" value="<?php echo $lastname ?>">
					<span class="text">Last Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="E-mail" name="email" value="<?php echo $email ?>">					<span class="text">Email</span>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="Contect Number" name="cno" value="<?php echo $cno ?>">
					<span class="text">Mobile</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="Username" name="username" value="<?php echo $username ?>">					
					<span class="text">User Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="Password" name="password" value="<?php echo $password ?>">
					<span class="text">Password</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" placeholder="City" name="city" value="<?php echo $city ?>">
					<span class="text">City</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
			<input type="submit" name="update" value="update">
			</div>
		</div>
	</div>
</div>
</form>
	
</body>
</html>