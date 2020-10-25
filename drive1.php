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
	box-shadow: 0 10px 30px rgba(0,0,0,.3)
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
/*---------------------------------------------------------------------------------*/
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
	height: 40px;
	border:none;
	text-transform: uppercase;
}

.blck a{
	text-decoration: underline;
	color: #000;
	margin-top: 250px;
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



.linne{
	width: 100%;
	height: 2px;
	background: #45f3ff;
}
.footer{
	width: 100%;
	margin-top: -40%;
	min-height: 100%;
	background: #000;
	display: block;	
}
.inner-footer{
	width: 95%;
	margin: auto;
	padding: 30px 10px;
	display: flex;
	flex-wrap: wrap;
	box-sizing: border-box;
	justify-content: center;
}
.fooer-items{
	width: 25%;
	padding: 10px 20px;
	box-sizing: border-box;
}
h1{
	padding: 10px 0;
	font-size: 25px;
	color:#45f3ff;
	text-transform: uppercase;
}
.fooer-items p{
	color: grey;
	font-size: 16px;
	text-align: justify;
	line-height: 25px;
}
.hh{
	margin: 10px 0;
	color: gray;
	font-size: 16px;
	font-weight: lighter;
	text-transform: uppercase;
}
.uull{
	list-style: none;
	color: #45f3ff;
	font-size: 15px;
	font-weight: lighter;
	letter-spacing: 0.5px;
}
.uull a{
	text-decoration: none;
	outline: none;
	color: #45f3ff;
	transition: 0.3s;
}
.uull a:hover{
	color: red;
}
/*ul li{
	margin: 10px 0;
	height: 25px;
}*/
li i{
	margin-right: 20px;
}
.social-media{
	width: 100%;
	color: #45f3ff;
	text-align: center;
}
.social-media a{
	text-decoration: none;
}
.social-media i{
	height: 15px;
	width: 15px;
	margin: 20px 5px;
	padding: 10px;
	color: #45f3ff;
	border-radius: 50%;
	border: 1px solid grey;
	transition: 0.3s;
}
.social-media i:hover{
	background: grey;	
}
.footer-bottom{
	padding: 10px;
	background: #45f4ff;	
	color: #000;
	font-size: 12px;
	font-weight: 600;

}


@media screen and (max-width: 1085px){
	.footer-items{
		width: 50%;
	}
}






    </style>
</head>
<body>
	<div class="menu-area">
		<ul>
			<li><u><b style="font-family: Segoe Print" >WEDROP</b></u></li>
			<li><a href="header1.php"style="color: #000000; text-decoration: none;">Home</a></li>

			<li><a href="#"style="color: #000000; text-decoration: none;">Service</a>
				<ul class="dropdown">
				<li><a href="driverreg.php"style="color: #000000; text-decoration: none;">Drive</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none;">Ride</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none;">Eat</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none;">Freight</a></li>
				<li><a href="#"style="color: #000000; text-decoration: none; font-size: 17px;">Bike&Scoot</a></li>
				</ul>
			</li>
			<li><a href="#"style="color: #000000; text-decoration: none;">Safty</a></li>
			<li><a href="#"style="color: #000000; text-decoration: none;">Help</a></li>
			
			<li><a href="login.php"style="color: #000000; text-decoration: none;">Login</a></li>
			<li><a href="signup.php"style="color: #000000; text-decoration: none;">Sign Up</a></li>
			<li><a href="review.php"style="color: #000000; text-decoration: none;">Review</a></li>
			<li><a href="#"style="color: #000000; text-decoration: none;">AboutUs</a></li>
		</ul>
	</div>
	</div>









	
	<ul class="aa">
		<li class="bb"  style="border-bottom: 2px solid #000; border-width: 8%;">
			<a href="driverreg.php">
				<div class="icon">
					<i class="fa fa-life-ring" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Drive">Drive</div>
			</a>
		</li>

		<li class="bb">
			<a href="#">
				<div class="icon">
					<i class="fa fa-suitcase" aria-hidden="true"></i>				
				</div>
				<div class="name" data-text="Ride">Ride</div>
			</a>
		</li>

		<li class="bb">
			<a href="#">
				<div class="icon">
					<i class="fa fa-cutlery" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Eat">Eat</div>
			</a>
		</li>

		<li class="bb">
			<a href="#">
				<div class="icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Freight">Freight</div>
			</a>
		</li>
		<li class="bb">
			<a href="#">
				<div class="icon">
					<i class="fa fa-motorcycle" aria-hidden="true"></i>
				</div>
				<div class="name" data-text="Bike & scoot">Bike&scoot</div>
			</a>
		</li>
	</ul>

<!-- -------------------------------------------------------------------------------- -->

<ul class="blck">
	<h1>Get in the driver's seat and get paid</h1>
	<h6>Drive on the platform with the largest network of active riders.</h6>
	<button>Sign up to drive</button><br><br>
	<a href="drive.php">Learn more about driving and delivering</a>
</ul>

<ul class="imag">
	<img src="image/13.jpg">
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


<div class="footer">
	<div class="linne">

		<div class="inner-footer">
			<div class="fooer-items">
				<h1>wedrop</h1>
				<p>
					jfdc zx ndbvjs sdgfus dmjhfgs skdgfa zkdctsa sakytd sdjfyte zfsfyd sygfnnfb
				</p>
			</div>

			<div class="fooer-items">
				<h2 class="hh">Quick Links</h2>
				<ul class="uull">
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
				</ul>
			</div>


			<div class="fooer-items">
				<h2 class="hh">Services</h2>
				<ul class="uull">
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
					<a href=""><li>Home</li></a>
				</ul>
			</div> 


			<div class="fooer-items">
				<h2 class="hh">Contect Us</h2>
				<ul class="uull">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>1,sdu skd, bombay</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>999999999</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i>abc@gmail.com</li>
				</ul>
				<div class="social-media">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
			</div>

		</div>
		<div class="footer-bottom">
			Copyright &copy; Wedrop 2020.All rights reserved.
		</div>
	</div>

</body>
</html>
