<!DOCTYPE html>
<html>
<head>
	<title>Help</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: #000;
		}
		.aa{
			position: absolute;
			top: 45%;
			left: 50%;
			transform: translate(-50%, -50%);
			margin: 0;
			padding: 20px 0;
			background: #45f3ff;
			display: flex;
			
			border-radius: 0px;
			box-shadow: 0 10px 30px rgba(0,0,0,.3)
		}
		.aa .bb{
			list-style: none;
			text-align: center;
			display: block;
			border-right: 1px solid rgba(0,0,0,0.2);
		}
		.aa .bb:last-child
		{
			border-right: none;
		}
		.aa .bb a
		{
			text-decoration: none;
			padding: 0 80px;
			display: block;
			color: #000;
			letter-spacing: 1px;
		}
		.aa .bb a .icon
		{
			width: 40px;
			height: 40px;
			text-align: center;
			margin: 0 auto 20px;
		}
		.aa .bb a .icon .fa
		{
			width: 100%;
			height: 100%;
			line-height: 40px;
			font-size: 34px;
			transition: 0.5s;
			color: #000;	
		}
		h1{
			background:#000;
			color: #45f3ff; 
			width: 50%;
			margin-left: 25%;
			margin-top: 30px;
			font-weight: lighter;
			text-transform: uppercase;
			text-align: center;
		}
		h2{
			background:#000;
			color: #45f3ff; 
			width: 50%;
			margin-left: 25%;
			margin-top: 30px;
			font-weight: lighter;
			text-transform: uppercase;
			text-align: center;
		}
		.container {
			position: relative;
		    margin-top: 145px;
			margin-left: 130px;
		}
		.text-block {
			position: absolute;
			bottom: 100px;
			right: 1054px;
			width: 85px;
			height: 67px;
			background-color: #000;
			color: #45f3ff;
			letter-spacing: 2px;
			font-weight: lighter;
			padding-left: 30px;
			padding-right: 50px;
		}
		.dd input
		{
			position: absolute;
			bottom: 100px;
			right: 354px;
			height: 65px;
			width: 600px;
			border: none;
			background-color: #111;
			color: #45f3ff;
			letter-spacing: 2px;
			font-weight: lighter;
			padding-left: 50px;
			/*margin-left: 550px;*/
			padding-right: 50px;
		}
		.submit input
		{
			position: absolute;
			bottom: 102px;
			right: 204px;
			height: 65px;
			width: 150px;
			border: none;
			background-color: #45f3ff;
			color: #000;
			letter-spacing: 2px;
			font-weight: bolder;
			text-transform: uppercase;
			padding-left: 50px;
			padding-right: 50px;
		}
		.submit:hover input
		{
			background: #45f4ff;
		}
	</style>
</head>
<body>
	<?php 
		include 'header1.php'	
	?>
	<!-- <?php 
		// include 'side.php'	
	?> -->
	<h1>Having trouble? We're here to help<br></h1><h2>
	: :  click on service and send us your issue  : :</h2>

	<ul class="aa">
		<li class="bb">
			<a href="javascript:void(0)" onclick="changedata('drive')">
				<div class="icon">
					<i class="fa fa-life-ring" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Drive">Drive</div>
			</a>
		</li>



		<li class="bb">
			<a href="javascript:void(0)" onclick="changedata('ride')">
				<div class="icon">
					<i class="fa fa-suitcase" aria-hidden="true"></i>				
				</div>
				<div class="name" data-text="Ride">Ride</div>
			</a>
		</li>

		<li class="bb">
			<a href="javascript:void(0)" onclick="changedata('eat')">
				<div class="icon">
					<i class="fa fa-cutlery" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Eat">Eat</div>
			</a>
		</li>

		<li class="bb">
			<a href="javascript:void(0)" onclick="changedata('freight')">
				<div class="icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Freight">Freight</div>
			</a>
		</li>
		<li class="bb">
			<a href="javascript:void(0)" onclick="changedata('bike')">
				<div class="icon">
					<i class="fa fa-motorcycle" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Bike & scoot">Bike&scoot</div>
			</a>
		</li>
	</ul>
<form>
<div class="container">
  <img src="image/20.jpg" class="imgchange" alt="Norway" style="height: 500px;width: 1090px;">
  <div class="text-block">
    <h4 class="h">Drive : </h4>
  </div>
  <div class="dd">
      <input type="text"  name="issue" placeholder="Type Your Issue...">
      </div>
  <div class="submit">
      <input type="Submit" name="Submit">
</div>
</div>
</form>



<script type="text/javascript">
  	function changedata(name) 
  	{
  		if(name === 'drive')
  		{
	  		document.getElementsByClassName('imgchange')[0].src = "image/20.jpg";
			document.getElementsByClassName('h')[0].innerHTML = "Drive : ";
  		}
  		if(name === 'ride')
  		{
	  		document.getElementsByClassName('imgchange')[0].src = "image/22.jpg";
	  		document.getElementsByClassName('h')[0].innerHTML = "Ride : ";
  		}
  		if(name === 'eat')
  		{
			document.getElementsByClassName('imgchange')[0].src = "image/23.jpg";
	  		document.getElementsByClassName('h')[0].innerHTML = "Eat : ";
  		}
  		if(name === 'freight')
  		{
  			document.getElementsByClassName('imgchange')[0].src = "image/9.jpg";
	  		document.getElementsByClassName('h')[0].innerHTML = "Freight : ";  			
  		}
  		if(name === 'bike')
  		{
  			document.getElementsByClassName('imgchange')[0].src = "image/10.jpg";
	  		document.getElementsByClassName('h')[0].innerHTML = "Bike : ";
  		}
  	}
</script>
</body>
</html>