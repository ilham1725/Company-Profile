<?php 
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>landing-page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/landing.css">	

	<link rel="stylesheet" href="simplelightbox-master/dist/simple-lightbox.css?v2.8.0" />
	<style>
	* {
            box-sizing: border-box;
        }

        .container .gallery a img {
            float: left;
            width: 25%;
            height: auto;
            border: 2px solid #fff;
            -webkit-transition: -webkit-transform .15s ease;
            -moz-transition: -moz-transform .15s ease;
            -o-transition: -o-transform .15s ease;
            -ms-transition: -ms-transform .15s ease;
            transition: transform .15s ease;
            position: relative;
        }

        .clear {
            clear: both;
        }

        a {
            color: #009688;
            text-decoration: none;
        }

        a:hover {
            color: #01695f;
            text-decoration: none;
        }
		</style>
</head>
<body id="home">

	<!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid text-center"> 
	  <div class="container">
	    <h2 class="text-jumbotron">IT SOLUTION</h2>
		<br>
		<h2 class="text-jumbotron">Welcome to CDC Global Informatika</h2>
	  </div>
	</div> 

	<!-- akhir jumbotron -->

	<!-- landing -->
	<div class="jumbotron-landing jumbotron-fluid"> 
		<div class="container">
			<div class="row text-center mt-4">
				<h3 style="font-weight : 700;">how can we help you?</h3>
			</div>
			<div class="row mt-4">
				<div class="col-md-6 mt-5">
					<h4>DevOps  </h4>
					<p>Migrate your legacy IT build system to an IT DevOps build system. 
					   Aims to shorten the system development life cycle 
					   and provide continuous delivery of high software quality.  </p>
					<br>
					<h4>Cloud Services  </h4>
					<p>Services to provide easy and affordable access to 
					   IT applications and resources without the need for 
					   infrastructure or internal hardware.  </p>
					<br>
					<h4>Tailor Made System </h4>
					<p>Development and creation of applications for use and management entirely by you. </p>
					<br>
					<button class="btn-learn"><a style="text-decoration:none" href="service.php">learn more</a></button>
				</div>
				<div class="col-md-6">
				<div class="gif">
						<img src="gambar/ask.jpg">	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir landing -->

	<!-- about -->
	
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#151930" fill-opacity="1" 
			d="M0,64L24,96C48,128,96,192,144,181.3C192,171,240,85,288,90.7C336,96,
			384,192,432,202.7C480,213,528,139,576,96C624,53,672,43,720,74.7C768,107,
			816,181,864,229.3C912,277,960,299,1008,288C1056,277,1104,235,1152,202.7C1200,
			171,1248,149,1296,122.7C1344,96,1392,64,1416,48L1440,32L1440,320L1416,320C1392,
			320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,
			320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,
			480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
		</path>
		</svg>
<section id="team">
	<div class="jumbotron-fluid about" fill-opacity="0.5">
		<div class="container">

		</div>
		<div class="container text-center">
				<h1 data-aos="zoom-in">Meet our leadership</h1>
					<p>Has been more than 10 years, leading this company.</p>			
			<div class="row mt-5">
				<center>
			  	<div class="col-md-6 " data-aos="fade-down-right" data-aos-duration="2000">
			  		<img class="rounded-circle" src="gambar/wahab.png" alt="">
					<h4 style="color:white !important;" class="mt-1">Wahab Lie</h4>
					<p class="">Chairman & CEO</p>
				
				    <p class="">"Leadership is everything it's about balancing the long-term
						 vision with current reality, being eager to learn every day, 
						 being open to new ideas and technologies, 
						and being at ease with ambiguity and complexity in fast-changing enviroment."
					</p>
				</div>
				</center>
			</div>
		</div>
	</div>
	</section>

	<section id="client">
		<div class="jumbotron-fluid client">
			<div class="color">
				<div class="container">
					<div class="row">
						<h1 class="judul-client">Our Clients</h1>
						<p class="p-client">Some colleagues who have started their project with us.</p>
					</div>
					<div class="row mt-4">
						<div class="row-image">
							<ul id="autoWidth" class="cs-hidden">
								<li class="item-a">
										<div class="box-img">
											<img class="img-client" src="gambar/a23.png" alt="">
										</div>
								</li>
								<li class="item-a">
										<div class="box-img">
											<img class="img-client" src="gambar/putera.jpg" alt="">
										</div>
								</li>
								<li class="item-a">
										<div class="box-img">
											<img class="img-client" src="gambar/krida2.jpg" alt="">
										</div>
								</li>
								<li class="item-a">
										<div class="box-img">
											<img class="img-client" src="gambar/krida.jpg" alt="">
										</div>
								</li>
								<li class="item-a">
										<div class="box-img">
											<img class="img-client" src="gambar/putera.png" alt="">
										</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- akhir about -->

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="background-color: #d9ead3;"><path fill="#151930" 
	fill-opacity="1" d="M0,64L24,96C48,128,96,192,144,181.3C192,171,240,85,288,90.7C336,96,384
	,192,432,202.7C480,213,528,139,576,96C624,53,672,43,720,74.7C768,107,816,181,864,229.3C912,
	277,960,299,1008,288C1056,277,1104,235,1152,202.7C1200,171,1248,149,1296,122.7C1344,96,1392,
	64,1416,48L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,
	0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,
	0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

<!-- portfolio -->
	<section id="portfolio">
		<div class="jumbotron-fluid port">
			<div class="container">
				<div class="row text-center">
					<h1>Portfolio</h1>
				</div>
			

				<div class="row">
					<div class="col-md-12 gallery">
					<a href="gambar/full/IMAGE_1.png"><img src="gambar/thumb/IMAGE_1.png" alt="" title="" /></a>
					<a href="gambar/full/IMAGE_2.png"><img src="gambar/thumb/IMAGE_2.png" alt="" title="" /></a>
					<a href="gambar/full/IMAGE_3.png"><img src="gambar/thumb/IMAGE_3.png" alt="" title="" /></a>
					<a href="gambar/full/IMAGE_4.png"><img src="gambar/thumb/IMAGE_4.png" alt="" title="" /></a>
				
			
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<!-- akhir portfolio -->
	<!-- <div class="jumbotron-fluid addition pt-5" style="background-color:#d9ead3;
											color: white;"> 
		<div class="container">
			<div class="row">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#151930" fill-opacity="1"
						d="M0,288L0,224L288,224L288,224L576,224L576,160L864,160L864,224L1152,224L1152,96L1440
						,96L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
					</path>
				</svg>	
			</div>
				<div class="row tengah">
					<div class="col-md-9 kiri">
						<p class="judul">		
						Would you like to start a project with us?
						</p>
						<p>
						Consult with us about what you need to improve your business. We will always help your business.
						</p>
					</div>
				
				<div class="col-md-3">
					<button class="btn-cont" disabled>+6221-6521-382</button>
				</div>
			</div>
			<div class="row">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#151930" fill-opacity="1" d="M0,96L0,64L480,64L480,160L960,160L960,96L1440
					,96L1440
					,0L960,0L960,0L480,0L480,0L0,0L0,0Z"></path>
				</svg>
			</div>
		</div>
    </div> -->
<?php 
	include 'footer.php';
?>
</body>	
	<script type="text/javascript" src="js/marvel/JQuery3.3.1.js"></script>
	<script type="text/javascript" src="js/marvel/lightslider.js"></script>
	<script type="text/javascript" src="js/marvel/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 <script>
	    AOS.init();
	 </script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
	 <script>
	 	gsap.from('.navbar', {duration:1.5, y: '-100%', opacity: 0, ease: 'bounce' });
	 </script>
	<script src="zoomooz/jquery.zoomooz.min.js"></script> 

	<script src="simplelightbox-master/dist/simple-lightbox.js?v2.8.0"></script>
	<script>
		(function() {
			var $gallery = new SimpleLightbox('.gallery a', {});
		})();
	</script>

</html>