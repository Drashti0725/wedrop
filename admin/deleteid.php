<?php
	require_once("connection.php");
	$id=$_GET['deleteid'];

	$query=mysqli_query($con,"DELETE FROM `user_registratiton` WHERE id='$id'");

	$result = mysqli_query($con, $query);
	if ($result) {
		echo "sucsecc";
	}
	echo"<script>window.location='dispuser.php'</script>";
?>