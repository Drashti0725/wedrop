<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap');
		
body{
	margin: 0;
	padding: 0;
	background: #000;
	height: 0px;
	font-family: 'Poppins' , sans-serif;
}
.menu-area ul{
	list-style: none;
}
.menu-area{
	display: unset;
	text-align: center;
	position: relative;
	top: 5%;
	/* left: 50%; */	
	width: 100%;
	/* transform: translate(-50%,-50%); */
}.menu-area li u:hover{

	background: #45f3ff;
}
.menu-area li:hover{

	background: #06F0F6;
}
.menu-area > ul{
	list-style: none;
	padding: 0;
	margin: 0px;
	width: 100%;
	display: inline-block;
	background: #45f3ff;
	color: #000;
}
.menu-area > ul > li{
	position: relative;
	cursor: pointer;
	font-family: roboto;
	font-size: 18px;
	letter-spacing: 1px;
	float: left;
	width: 100px;
	height: 50px;
	line-height: 50px;
}
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
/* Login SignUp Btn */
.menu-area > ul >li:nth-child(6){
	position: absolute;
	right: 100px;
	box-sizing: border-box;
}
.menu-area > ul >li:nth-child(7){
	position: absolute;
	right: 0;
	box-sizing: border-box;
}
.menuarea ul{
	list-style: none;
}
.menu-area .menuarea{
	display: inline-block;
	text-align: center;
	position: absolute;
	top: 7%;
	left: 90%;
	/* width: 20%; */
	/* transform: translate(-50%,-50%); */
}
.menuarea li:hover{
	background: #06F0F6;
}
.menuarea > ul{
	list-style: none;
	padding: 10px;
	margin: 550px;
	width: 200px;
	display: inline-bl ock;
	background: #70C2C4;
	color: #000;
}
.menuarea > ul > li{
	position: relative;
	cursor: pointer;
	font-family: roboto;
	font-size: 18px;
	letter-spacing: 1px;
	float: left;
	width: 50%;
	height: 50px;
	line-height: 50px;
}
.dropdown{
	position: absolute;
	top: 100%;
	right: 0;
	width: 100%
	padding :0;
	z-index: 9999;
}
.dropdown li{
	background: #45f3ff;
	display: none;
	width: 100px;
	z-index: 99999999;
}
.dropdown li:hover{
	background: #06F0F6;
}
.menu-area li:hover >.dropdown{
		perspective: 1000px;
}
.menu-area li:hover >.dropdown li{
		transform-origin: top center;
		opacity: 0;
		display: block;
}
.menu-area li:hover >.dropdown li:nth-child(1){
	animation: animate 300ms ease-in-out forwards;
	animation-delay: -150ms;
}
.menu-area li:hover >.dropdown li:nth-child(2){
	animation: animate 300ms ease-in-out forwards;
	animation-delay: 0ms;
}
.menu-area li:hover >.dropdown li:nth-child(3){
	animation: animate 300ms ease-in-out forwards;
	animation-delay: 150ms;
}
.menu-area li:hover >.dropdown li:nth-child(4){
	animation: animate 300ms ease-in-out forwards;
	animation-delay: 300ms;
}
.menu-area li:hover >.dropdown li:nth-child(5){
	animation: animate 300ms ease-in-out forwards;
	animation-delay: 450ms;
}

@keyframes animate{
	0%{
		opacity: 0;
		transform: scale(0);
	}
	50%{
		opacity: 1;
	}
	90%{
		transform: scale(1.2);
	}
	100%{
		transform: scale(1);
		opacity: 1;
	}
}





.aa{
	position: absolute;
	top: 25%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: 0;
	padding: 20px 0;
	background: #45f3ff;
	display: flex;
	border-radius: 0px;
	box-shadow: 0 10px 30px rgba(0,0,0,.3);
	
}
.aa .bb{
	list-style: none;
	text-align: center;
	display: block;
	border-right: 1px solid rgba(0,0,0,0.2);
}
.aa .bb:last-child{
	border-right: none;
}
.aa .bb a{
	text-decoration: none;
	padding: 0 80px;
	display: block;
	color: #000;
	letter-spacing: 1px;
}
.aa .bb a .icon{
	width: 40px;
	height: 40px;
	text-align: center;
	/*overflow: hidden;*/
	margin: 0 auto 20px;
}
.aa .bb a .icon .fa{
	width: 100%;
	height: 100%;
	line-height: 40px;
	font-size: 34px;
	transition: 0.5s;
	color: #000;	
}


.social{
	position: fixed;
	height: 100vh;
	z-index: 99999999999;
	display: flex;
	flex-direction: column;
	justify-content: center;
	transform: translate(-290px ,0);
}

.social a{
	color: #45f3ff;
	z-index: 99999999;
	background: rgba(0,0,0,0.4);
	font-size: 20px;
	font-weight: 600;
	text-decoration: none;
	display: block;
	margin: 5px;
	padding: 20px;
	width: 300px;
	text-align: right;
	border-radius:50px; 
	transition: 1s;
	transition-property: transform;
}
.social a:hover{
	transform: translate(140px , 0);
}
.social i{
	margin-left: 10px;
	font-size: 30px;
	width: 30px;
	height: 30px;
}
.social a:nth-child(1) i{
	color: #1DA0F0;
}

.social a:nth-child(2) i{
	color: #F80000;
}

.social a:nth-child(3) i{
	color: transparent;
	background-image: linear-gradient(45deg, #FFDF9E, #E56969,#8A49A1);
	-webkit-background-clip: text;
	font-weight: 600;
}

.social a:nth-child(4) i{
	color: #4ECCE8;
}
/*-----------------------------------------------------------------------------------*/
.blck{
	position: absolute;
	background: #45f3ff;
	width: 570px;
	color: #000;
	height: 350px;
	margin-top: 150px;
	margin-left: 131px;
}
.blck h1{
	color: #000;
	letter-spacing: 2px;
	margin-right: 40px;
	margin-top: 50px;
	text-align: center;
}

.blck h6{
	color: #000;
	font-size: 15px;
	font-weight: lighter;
	text-align: right;
	letter-spacing: 2px;
	margin-right: 40px;
	margin-top: 20px;
	text-align: center;
}
.blck button{
	background: #000;
	color: #45f3ff;
	width: 150px;
	height: 50px;
	letter-spacing: 1px;
	border:none;
	text-transform: uppercase;
}
.imag{
	position: absolute;
	width: 600px;
	color: #000;
	height: 400px;
	margin-top: 168px;
	margin-left: 700px;
}











/*-------------------------------------------------------------------------------------*/
.slide{
	background: #000;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 14px;
  color: #000;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 250vh;
}
.swiper-container 
{
  width: 100%;
  padding-top: 50px;
  padding-bottom: 200px;
}
.swiper-slide
{
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
  background: #000;
  -webkit-box-reflect: below 1px linear-gradient(transparent,transparent,#0006);
}





footer{
	position: fixed;
	margin-bottom: 0;
	margin-top: -500px;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}

.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	/*margin-top: 80px;*/
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}
.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}
.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}


.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}


    </style>
</head>
<body>

	<div class="menu-area" style="font-family: 'Poppins">
		<ul>
			<li><u><b style="font: normal 26px 'Cookie', cursive;" >WeDrop</b></u></li>
			<li><a href="index.php"style="color: #000000; text-decoration: none;">Home</a></li>

			<li><a href="#"style="color: #000000; text-decoration: none;">Service</a>
				<ul class="dropdown">
				<li><a href="driverreg.php"style="color: #000000; text-decoration: none;">Drive</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none;">Ride</a></li>
				<li><a href="eat.php"style="color: #000000; text-decoration: none;">Eat</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none;">Freight</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none; font-size: 17px;">Bike&Scoot</a></li>
				</ul>
			</li>
			<li><a href="#"style="color: #000000; text-decoration: none;">Safty</a></li>
			<li><a href="help.php"style="color: #000000; text-decoration: none;">Help</a></li>
			
			<li><a href="login.php"style="color: #000000; text-decoration: none;">Login</a></li>
			<li><a href="signup.php"style="color: #000000; text-decoration: none;">Sign Up</a></li>
			<li><a href="review.php"style="color: #000000; text-decoration: none;">Review</a></li>
			<li><a href="aboutus.php"style="color: #000000; text-decoration: none;">AboutUs</a></li>
		</ul>
	</div>
	</div>


	
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


 <!-- -------------------------------------------------------------------------------- -->

	<ul class="blck">
		<h1 class="h">Drive ::  Get in the driver's seat and get paid</h1>
		<h6 class="j">Drive on the platform with the largest network of active riders.</h6>
		<button class="b">Sign up to drive</button><br><br>
	</ul>

	<ul class="imag">
		<img src="image/13.jpg" class="imgchange"  style="height: 332px;width: 480px;">
	</ul>






 <!-- ----------------------------------------------------------------------------------- -->
	<div class="social">
		<a href="#">
			Facebook
		<i class="fa fa-facebook-official"></i>		
	</a>

		<a href="#">
			Youtube
			<i class="fa fa-youtube-play"></i>
		</a>

		<a href="#">
			Instagram
			<i class="fa fa-instagram"></i>
		</a>

		<a href="#">
			Twitter
			<i class="fa fa-twitter"></i>
		</a>
	</div>


	<div class="slide">
	<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide"><img src="image/6.jpg"></div>
		<div class="swiper-slide"><img src="image/7.jpg"></div>
		<div class="swiper-slide"><img src="image/8.jpg"></div>
		<div class="swiper-slide"><img src="image/9.jpg"></div>  
		<div class="swiper-slide"><img src="image/10.jpg"></div>
		<div class="swiper-slide"><img src="image/11.jpg"></div>	
		<div class="swiper-slide"><img src="image/12.jpg"></div>
	</div>
	<div class="swiper-pagination"></div>
	</div>
	</div>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script>
	    var swiper = new Swiper('.swiper-container', {
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 'auto',
			coverflowEffect: {
			rotate: 20,
			stretch: 40,
			depth: 200,
			modifier: 1,
			slideShadows: true,
	      },
	    loop:true,
	    autoplay:{
	  	delay:1000,
	  	disableOnInteraction: false,
	      },
	    });
	  </script>
	  <script type="text/javascript">
	  	function changedata(name) {
	  		if(name === 'drive'){
	  		document.getElementsByClassName('h')[0].innerHTML = "drive :: Get in the driver's seat and get paid";
	  		document.getElementsByClassName('j')[0].innerHTML = "Drive on the platform with the largest network of active riders.";
	  		document.getElementsByClassName('b')[0].innerHTML = "Sign up to drive";
	  		document.getElementsByClassName('b')[0].src ="driverreg.php";
		  	document.getElementsByClassName('imgchange')[0].src = "image/20.jpg";
	  		}
	  		if(name === 'ride'){
	  		document.getElementsByClassName('h')[0].innerHTML = "Ride ::  Request a ride now";
	  		document.getElementsByClassName('j')[0].innerHTML = "Ride with us and enjoy trip";
	  		document.getElementsByClassName('b')[0].innerHTML = "Ride Now";
	  		document.getElementsByClassName('b')[0].href ="ride.php";
	  		document.getElementsByClassName('imgchange')[0].src = "image/19.jpg";
			
	  		}
	  		if(name === 'eat'){
	  		document.getElementsByClassName('h')[0].innerHTML = "eat ::  Discover delicious eats with us";
	  		document.getElementsByClassName('j')[0].innerHTML = "Order delivery from our restaurant you love at any time for you.";
	  		document.getElementsByClassName('b')[0].innerHTML = "Order Now"; 
	  		document.getElementsByClassName('b')[0].href ="eat.php"; 
			document.getElementsByClassName('imgchange')[0].src = "image/6.jpg";
	  		}
	  		if(name === 'freight'){
	  		document.getElementsByClassName('h')[0].innerHTML = "freight ::  A new direction for freight";
	  		document.getElementsByClassName('j')[0].innerHTML = "Greater transparency for carriers to do business together.";
	  		document.getElementsByClassName('b')[0].innerHTML = "Order Now";
	  		document.getElementsByClassName('b')[0].href ="freight.php";
	  		document.getElementsByClassName('imgchange')[0].src = "image/9.jpg";
	  		}
	  		if(name === 'bike'){
	  		document.getElementsByClassName('h')[0].innerHTML = "bike & scoot ::  Bike or scoot there";
	  		document.getElementsByClassName('j')[0].innerHTML = "Go farther and have more fun with electric bikes and scooters.";
	  		document.getElementsByClassName('b')[0].innerHTML = "Get a Ride";
	  		document.getElementsByClassName('b')[0].href ="bike.php";
	  		document.getElementsByClassName('imgchange')[0].src = "image/10.jpg";

	  		}
	  	}
	</script>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Responsive Footer</title>

	<!-- <link rel="stylesheet" href="footer.css"> -->
	
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
	<body>
		<!-- <header>
			<h1> Responsive Footer </h1>
			<h2>Have a look</h2>
			<h2><span>On Below Footer</span></h2>
		</header>

		The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">
          <!-- <img src="img/logo.png"> -->
				<h3>We<span>Drop</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Blog</a>
					|
					<a href="#">About</a>
					|
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">© 2019 Eduonix Learning Solutions Pvt. Ltd.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>309 - Rupa Solitaire,
						 Bldg. No. A - 1, Sector - 1</span>
						Mahape, Navi Mumbai - 400710</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 22-27782183</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="www.wedrop.com">support@eduonix.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					we started as a way to tap a button to get a ride has led to billions of moments of human connection as people around the world go all kinds of places in all kinds of ways with the help of our technology.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>
	</body>
</html>