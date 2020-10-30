<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>slider</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="slider.css">
</head>
<body>
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
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: 50,
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
</body>
</html>