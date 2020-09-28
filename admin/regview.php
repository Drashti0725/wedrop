<?php
	require_once("connection.php");
	$viewid=$_GET['viewid'];
    $query = "SELECT * FROM user_registratiton where id='".$viewid."'";
   
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

<!-- <!?php
		require_once("connection.php");

		$id=$_GET['id'];
		$query =" select * from user_registration where id='".$id."'";
		$result = mysqli_query($con,$query);

		 while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $name = $row['name'];
            $des = $row['des'];
            $dom = $row['dom'];
            $pom = $row['pom'];
            $age_on_dom = $row['age_on_dom'];
            $nativeplace = $row['nativeplace'];
            $forc = $row['forc'];
            $dependents = $row['dependents'];
            $brief_of_incident = $row['brief_of_incident'];
            $contribution =$row['contribution'];
            $image =$row['image'];
        }
                           
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Bravehearts Information</title>
	<link rel="stylesheet" a href="CSS/bootstrap.css">
	<style>
		h3{
		background-color: #254441;
	}
	</style>
</head>
<body class="bg-dark">
							<form action="---update.php?bh_up_id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
							 <table class="table table-bordered">
							  
							 	<tr>
							 		<td><b>Id</td>
							 		<td><?php echo $id ?></td>
							 	</tr>
							 	<tr>
							 		<td><b>First Name</td>
							 		<td><?php echo $firstname ?></td>
							 	</tr>
							 	<tr>
							 		<td><b>lastname</td>
							 		<td><?php echo $lastname ?></td>
							 	</tr>
							 	<tr>
							 		<td><b>email</td>
							 		<td><?php echo $email ?></td>
							 	</tr>
							 	<tr>
							 		<td><b>contact no</td>
							 		<td><?php echo $cno ?></td>
							 	</tr>
							 	<tr>
							 		<td><b>User name </td>
							 		<td><?php echo $username ?></td>
							 	</tr>
						 		<tr>
							 		<td><b>password</td>
							 		<td><?php echo $password ?></td>
							 	</tr>
							 	<tr>
							 		<td><b>City</td>
							 		<td><?php echo $city ?></td>
							 	</tr>
							 	
							 	</table>

							 	<a  href="braveheartedit.php?editid=<?php echo $id ?>">Edit</a>
                                <a  href="braveheartdelete.php?deleteid=<?php echo $id ?>">Delete</a>

							 	<div class="form-group">
							 		<center><a  href="dispuser.php">Back</a></center>
							 	</div>
							 	
							  </form>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>