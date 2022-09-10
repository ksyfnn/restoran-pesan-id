<!DOCTYPE html>
<html>
<head>
	<title>pesenin.id - restoran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- type writer -->
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<!-- floating aos -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- booster -->
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- google font/ font family -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&family=Leckerli+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer&family=Inknut+Antiqua:wght@300&display=swap" rel="stylesheet">

	<!-- jquery -->
	<script src="jquery.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

	<!-- favicom -->
	<link rel="icon" href="bgbanner/logo.png">
</head>
<body>
	<!-- start navigation -->
	<header>
		<a href="#home" style="text-decoration: none;"><div class="firstname">pesenin</div></a>
	<nav>
		<ul id="navbar" class="navbar">
			<a href="/verifikasi"><button class="start">start</button></a>
			<li><a href="#home">home</a></li>
			<li><a href="#menu">menu</a></li>
			<li><a href="#blog">blog</a></li>
			<li><a href="#order">order</a></li>
			<li><a href="#contact">contact</a></li>
		</ul>
	</nav>
	<div class="menu-toggle">
            	<i class="fa fa-bars"></i>
        	</div>
	</header>

	<!-- start banner -->
	<section>
	<div class="banner" id="home">
		<div class="main_text" data-aos="zoom-in"  data-aos-easing="ease-in-sine" data-aos-delay="300">		
			<h2 class="page_title">Eat if u feel hungry</h2>
			<h3 class="contact">CALL 
				<a href="tel:+6285819209300"><span class="call_desk" id="nomor"><a href=""></a></span></a>
			</h3>
		</div>	
	</div>	
	</section>
	<!-- end banner -->

	<!-- start pict service -->
	<section class="service-section" id="service">
		<div class="container">
			<div class="services-sec">
				<div class="row">						
					<div class="pict col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
						<div class="service">							
							<img src="service/cathering.jpg">
							<div><h4>cathering</h4></div>
						</div>
					</div>
					<div class="pict col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000" >
						<div class="service">
							<img src="service/menu.jpg">
							<div><h4>menu</h4></div>
						</div>
					</div>
					<div class="pict col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="3000">
						<div class="service">
							<img src="service/order.jpg">
							<div><h4>order</h4></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!-- start our future -->
	<section class="sec-block pb-0">

		<div class="container" data-aos="fade-up" data-aos-duration="1000" id="future">
			<div class="section-title text-center">
				<span>our future</span>
				<h2 class="text-capitalize" id="menu">restaurants</h2>
				<p class="mx-auto">The best restaurant that have been <br>working with us for a long time</p>
			</div>

			<div class="feature-sec" >
				<div class="row" id="pict-future"> 
					<div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
						<div class="feature-item"><img src="future/breakfast.jpg" alt class="w-100"></div>
						<a href="#"><h4 id="text">breakfast</h4></a>
					</div>
					<div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
						<div class="feature-item"><img src="future/lunch.jpg" alt class="w-100"></div>
						<a href="#"><h4 id="text">lunch</h4></a>
					</div>
					<div class="soon col-md-4" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
						<div class="feature-item"><img src="future/sonn.jpg" alt class="w-100"></div>
						<a href="#"><h4 id="text2">coming soon</h4></a>
					</div>
					<div class="col-md-8" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
						<div class="feature-item"><img src="future/dinner.jpg" alt class="w-100"></div>
						<a href="#"><h4 id="text">dinner</h4></a>
					</div>
				</div>

				<div class="row text-center" id="b-view">
					<div class="col-12">
						<!-- button view all -->
					<button class="b-view" onclick="myFunction()">
  					view all
					</button>

					<script>
						function myFunction(){
							alert("ups u should tap the button start");
						}
					</script>

						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">

						      <div class="modal-header">
						        <h5 class="modal-title" id="staticBackdropLabel">view all</h5>
						      </div>
						      <!-- contennt modals -->
						      <div class="modal-body">
						        ups, you should tap the start button
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn" data-bs-dismiss="modal"><span>Close</span></button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	

	<!-- start discount -->
	<section class="sec-block" id="discount">
		<div class="fixed-bg bg1"></div>
		<div class="container">
			<div class="discount">
				<h1 class="text-header" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">DISCOUNT UP TO <span>25%</span> <br>
				DONT MISS IT</h1><br>
				<p data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> Lorem ipsum dolor sit amet, consectetur</p>
				<h2 class="text-content" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Lorem ipsum dolor sit amet, consectetur <br>
				tempor incididunt ut labore et dolore <br>
				adipisicing elit, sed do eiusmod.</h2><br>
			</div>
		</div>
	</section>
	

	<!-- start our blog -->
	<section class="sec-block">
		<div class="container" data-aos="fade-up" data-aos-duration="1000">
			<div class="section-title text-center">
				<span id="blog">our blog</span>
				<h2 class="text-capitalize">lates posts</h2>
				<p class="mx-auto">here u can see the most popular food in indonesia</p>
			</div>
			<!-- pict -->
			<div class="blog-posts">
				<div class="row">
					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">	
						<div class="blog">
							<div class="blog-thumbnail"><img src="blog/steak.jpg" alt class="w-100"></div>
							<div class="blog-info">
								<ul class="meta">
									<li><img src="https://my-space.space/deli-taste/assets/images/resources/meta.jpg" width="20" height="20">
									<p class="name">radit</p>
									</li>
									<li><p>july 29, 2021</p></li>
								</ul>
								<h2 class="blog-title"><a href="#">The Traditional Recipe of Steak</a></h2>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">
						<div class="blog">
							<div class="blog-thumbnail"><img src="blog/teriyaki.jpg" alt class="w-100"></div>
							<div class="blog-info">
								<ul class="meta">
									<li><img src="https://my-space.space/deli-taste/assets/images/resources/meta.jpg" width="20" height="20">
										<p class="name">sipan</p>
									</li>
									<li><p>july 28, 2022</p></li>
								</ul>
								<h2 class="blog-title"><a href="#">Famous Chicken Teriyaki at pesanin.id</a></h2>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">
						<div class="blog">
							<div class="blog-thumbnail"><img src="blog/dalgona.jpg" alt class="w-100"></div>
							<div class="blog-info">
								<ul class="meta">
									<li><img src="https://my-space.space/deli-taste/assets/images/resources/meta.jpg" width="20" height="20">
										<p class="name">sipan</p>
									</li>
									<li><p>july 28, 2022</p></li>
								</ul>
								<h2 class="blog-title"><a href="#">The Most Tasty Coffe, Dalgona</a></h2>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	

	<!-- start order us -->
 	<section class="sec-block order-sec">
 		<div class="fixed-bg bg2"></div>
 		<div class="container" id="order"> 			
 			<div class="order-application">
 				<h2 data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">make an order with our <span>application</span></h2>
	 				<ul class="order-check">
	 					<div class="vs-info"><h4 data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">order and pay for a minutes</h4></div>
	 					<p id="statement" data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">choose food or drink if u clicked the couple online <br> 
	 					and you should also choose your curent location using gps</p>

	 					<div class="vs-info"><h4 data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">check your delivery status</h4></div>
	 					<p id="statement" data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine">follow some status of your order in real <br> time  and also track the
	 					delivery path until you get</p>
	 				</ul>
 				<!-- logo -->
 					<ul class="platforms">
 						<li><a href="https://play.google.com/store/games?utm_source=apac_med&utm_medium=hasem&utm_content=Aug2021&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-id-1003227-med-hasem-py-Evergreen-Aug2021-Text_Search_BKWS-BKWS%7CONSEM_kwid_43700065961766569_creativeid_541258268614_device_c&gclid=Cj0KCQjwuaiXBhCCARIsAKZLt3k83aKOKO-P2wPNiLF13Fj8S6vLRMkkvUIegKIXJ1QimtB89BjMFJsaAiXYEALw_wcB"><img src="https://my-space.space/deli-taste/assets/images/btn1.png"  data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine"></a></li>
 						<li><a href="https://www.apple.com/id/app-store/" ><img src="https://my-space.space/deli-taste/assets/images/btn2.png" data-aos="fade-up" data-aos-offset="300"  data-aos-duration="600" data-aos-easing="ease-in-sine"></a></li>
 					</ul>
 				</div>
 			</div>
 	</section>

 	<!-- start testimoni -->
	<section class="sec-block pb-0">
		<div class="container">
			<div class="section-title text-center">
				<span>testimonials</span>
				<h2 class="text-capitalize">client says</h2>
			</div>

			<div class="row">
				<div class="col-md-8 col-center m-auto">
						<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  							<div class="carousel-inner">

    							<div class="carousel-item active" data-bs-interval="3000">
	     							<p class="testimonials text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									<div class="img-box text-center" style="margin-top: 60px;"><img src="https://my-space.space/deli-taste/assets/images/resources/meta.jpg"></div>
									</p>
									<h3 class="testi-name text-center">christian saipuloh</h3>
									<p class="date text-center">20 agustus 1990</p>
    							</div>

    							<div class="carousel-item" data-bs-interval="3000">
	      							<p class="testimonials text-center" style="white-space: pre-line;">I ordered Pizza for the first time & I’m so glad I did! I Can’t wait till I order again. Thick, tasty, absolutely delicious Pizza! The gal taking my order was so nice as well.                                                
									<div class="img-box text-center" style="margin-top: 60px;"><img src="https://my-space.space/deli-taste/assets/images/resources/meta.jpg"></div>
									</p>
									<h3 class="testi-name text-center">christian saipuloh</h3>
									<p class="date text-center">20 agustus 1990</p>
    							</div>

    							<div class="carousel-item" data-bs-interval="3000">
	      							<p class="testimonials text-center">Wow I have found a great pizza place. They brought me a great pizza and the guy that delivered
                                    my pizza was a cool dude. Thanks for the great pizza. I recommend to everyone.
									<div class="img-box text-center" style="margin-top: 60px;"><img src="https://my-space.space/deli-taste/assets/images/resources/meta.jpg"></div>
									</p>
									<h3 class="testi-name text-center">christian saipuloh</h3>
									<p class="date text-center">20 agustus 1990</p>
    							</div>

							</div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="top-footer" id="contact">
			<div class="fixed-bg bg3"></div>
			<div class="container">
				<div class="content-footer row align-item-center">
					<div class="col-lg-3 col-md-6">
						<div class="widget widget-about">
							<h1 class="logo-footer">pesenin</h1>
							<h4>working schedule</h4>
							<p>morn-sat: 9:00 am - 10.00 pm <br> sun: 10:00 am - 8:00 pm</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 mx-auto">
						<div class="widget widget-contact text-center">
							<h2><span>call us</span> to make your <br> order!</h2>
							<p>dont be shy, we dont make u die :)</p>
							<h5>+62 858 1920 9300</h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget widget-payment">
							<h2 id="sosial">our social media</h2>
							<ul class="media">
								<li id="ins"><a href="https://www.instagram.com/?hl=id"><img src="sosmed/instagram.png" width="75" height="auto"></a></li>
								<li><a href="https://twitter.com/"><img src="sosmed/twitter.png" width="70" height="auto"></a></li>
								<li><a href="https://www.facebook.com/login/"><img src="sosmed/facebook.png" width="70" height="auto"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript">
		/*JS for sticky*/
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
		/*JS for typewriter*/
		var nomor = document.getElementById('nomor');

		var typewriter = new Typewriter(nomor, {
    		loop: true
		});

		typewriter.typeString('+62 858 1920 9300')
    		.pauseFor(2500)
    		.deleteAll()
    		.start();

	</script>
	<!-- jquery -->
	<script>
        $(document).ready(function () {
            $(".menu-toggle").click(function () {
                $('nav').toggleClass('active');
            })
        })
    </script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script>
	  AOS.init();
	</script>
  </body>
</body>
</html>