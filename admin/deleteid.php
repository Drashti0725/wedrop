
<?php
	require_once("connection.php");

 	date_default_timezone_set('Asia/Kolkata');
    $currentTime = date( 'd-m-Y h:i:s A', time () );

	$id=$_GET['deleteid'];

	//$query=mysqli_query($con,"DELETE FROM `user_registratiton` WHERE id='$id'");
	$query=mysqli_query($con," UPDATE `user_registratiton` SET `deleted_at`='".$currentTime."' WHERE id='".$id."' ");
	$result = mysqli_query($con, $query);
	if ($result) {
		echo "sucsecc";
	}
	echo"<script>window.location='dispuser.php'</script>";
?>