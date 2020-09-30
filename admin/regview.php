<?php
	require_once("connection.php");
	$viewid = $_GET['viewid'];
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


<!DOCTYPE html>
<html>
<head>
	<title>user Information</title>
	
	<style>
		*{
			font-family: 'Poppins' , sans-serif;
		}
		body{
		background-color: #000;
		color :#45f3ff;
		margin-left: 20%;
		margin-top: 120px;
	}
	tr{
			font-size: 20px;
            letter-spacing: 0px;
            height: 30px;
            text-align: left;
            border-bottom: 3px solid #45f3ff;    
	}
	td{
		 font-size: 18px;
            padding: 5px;
            width: 300px;
            position: all;
            
            border-bottom: 3px solid #45f3ff;
	}
	.abcd{
		width: 50px;
		border-bottom: none;
	}
	.aaaa{
		width: 50px;
		border-bottom: none;
	}
	</style>
</head>
<body >
							<!--form action="---update.php?bh_up_id=<?php echo $id ?>" method="POST" enctype="multipart/form-data"-->
							<h1><label style="background: #45f3ff; border: 5px; padding: 10px; border-radius: 5PX; color: #000; margin-left: 350px">
									<?php 
										echo $firstname; echo '  '; echo $lastname;echo '  '; echo 'detail';
									?>
								</label>
							</h1><br><br>
							 <table>
							  <center>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">Id : </td><td class="aaaa"></td>
							 		<td style="width: 500px"><?php echo $id ?></td>
							 	</tr><tr class="abcd"></tr>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">First Name : </td><td class="aaaa"></td>
							 		<td><?php echo $firstname ?></td>
							 	</tr><tr class="abcd"></tr>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">Last Name : </td><td class="aaaa"></td>
							 		<td><?php echo $lastname ?></td>
							 	</tr><tr class="abcd"></tr>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">Email : </td><td class="aaaa"></td>
							 		<td><?php echo $email ?></td>
							 	</tr><tr class="abcd"></tr>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">Contact No : </td><td class="aaaa"></td>
							 		<td><?php echo $cno ?></td>
							 	</tr><tr class="abcd"></tr>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">User Name : </td><td class="aaaa"></td>
							 		<td><?php echo $username ?></td>
							 	</tr><tr class="abcd"></tr>
						 		<tr>
							 		<td style="text-align: right;letter-spacing: 2px">Password : </td><td class="aaaa"></td>
							 		<td><?php echo $password ?></td>
							 	</tr><tr class="abcd"></tr>
							 	<tr>
							 		<td style="text-align: right;letter-spacing: 2px">City : </td><td class="aaaa"></td>
							 		<td><?php echo $city ?></td>
							 	</tr><tr class="abcd"></tr>
							 	</center>
							 	</table>
							 	<a  href="dispuser.php"><button style="background: #45f3ff;margin-left: 20px">  <b style="text-decoration: none; color: #000; font-size: 25px;"> Back</b></button></a>

							 	<a  href="vieweidit.php?editid=<?php echo $id ?>" ><button style="background: #45f3ff; margin-left: 350px"> <b style="text-decoration: none; color: #000; font-size: 25px;"> Edit</b></button></a>
                                
                                <a  href="deleteid.php?deleteid=<?php echo $id ?>"><button style="background: #45f3ff; margin-left: 240px;"> <b style="text-decoration: none; color: #000; font-size: 25px;">Delete</b></button></a>

							 	
							 	
							  </form>
</body>
</html>