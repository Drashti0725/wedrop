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
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins' , sans-serif;
}
body
{
	display: all;
	justify-content: all;
	align-items: center;
	margin-top: 10px;
	min-height: 10vh;
	background:#000;	
}
.container
{
	overflow-x: hidden;
	width: 100%;
	padding: 0%;
}
.container h2
{
	width: 100%;
	color: #45f3ff;
	font-size: 36px;
	text-align: center;
	margin-bottom: 10px;
	margin-top: 60px;
}
.container .row100
{
	position: relative;
	width: 100%;
	padding-left: 30%;
	padding-right: 30%;
	
}
.container .row100 .col
{
	position: relative;
	width: 100%;
	padding: 0 10px;
	margin: 30px 0 10px;
	transition: 0.5s;
}
.container .row100 .inputBox
{
	position: relative;
	width: 100%;
	height: 40px;
	color: #45f3ff;
}
.container .row100 .inputBox input,
.container .row100 .inputBox select,
.container .row100 .inputBox.textarea textarea
{
	position: absolute;
	width: 100%;
	height: 100%;
	background: transparent;
	box-shadow: none;
	border: none;
	outline: none;
	font-size: 18px;
	padding: 0 10px;
	 z-index: 1;
	color: #000;
}
.container .row100 .inputBox input[type='file'] 
{
	position: absolute;
	width: 100%;
	height: 100%;
	background: transparent;
	box-shadow: none;
	border: none;
	outline: none;
	font-size: 18px;
	padding: 5px 140px;
	z-index: 1;
	color: #000;
}
.container .row100 .inputBox .text select
{
	position: absolute;
	top: 0;
	left: 0;
	line-height: 40px;
	font-size: 18px;
	display: block;
	transition: 0.5s;
	pointer-events: none;
}
.container .row100 .inputBox .text
{
	position: absolute;
	top: 0;
	left: 0;
	line-height: 40px;
	font-size: 18px;
	display: block;
	transition: 0.5s;
	pointer-events: none;
}
.container .row100 .inputBox input:focus + .text,
.container .row100 .inputBox input:valid + .text
{
	top: -35px;
	left: -10px;                                             
}
.container .row100 .inputBox .line
{
	position: absolute;
	bottom: 0;
	display: block;
	width: 100%;
	height: 2px;
	background: #45f3ff;
	transition: 0.5s;
	border-radius: 2px;
	pointer-events: none;
}
.container .row100 .inputBox input:focus ~ .line,
.container .row100 .inputBox input:valid ~ .line
{
	height: 100%;
}
.container .row100 .inputBox.textarea
{
	position: relative;
	width: 100%;
	height: 100px;
	padding: 10px 0;
}
.container .row100 .inputBox.textarea textarea
{
	height: 100%;
	resize: none;
}
.container .row100 .inputBox textarea:focus + .text,
.container .row100 .inputBox textarea:valid + .text
{
	top: -35px;
	left: -10px;
}
input[type="Submit"]
{
	border: none;
	padding: 7px 35px;
	cursor: pointer;
	outline: none;
	background: #45f3ff;
	color: #000;
	font-size: 18px;
	border-radius: 2px;
}
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