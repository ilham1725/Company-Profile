<!DOCTYPE html>
<html>
<head>
	<title>CDCGI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/landing.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



	<style>
	@import url('https://fonts.googleapis.com/css2?family=Cinzel&family=Kaushan+Script&display=swap');
	</style>  

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
	<script type="text/javascript" src="js/marvel/JQuery3.3.1.js"></script>
	<script type="text/javascript" src="js/marvel/lightslider.js"></script>

	<style type="text/css">
		

		.mobile-only{display: none !important;}
		@media screen and (max-width: 600px) {
		.mobile-only{display: block !important;}
		}
	</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #151930">
		<div class="container">
			<a class="navbar-brand logo waitAnimate" href="index.php"><b>CDCGI</b></a>
			<button class="navbar-toggler bg-dark mobile-only" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="about.php">ABOUT</a>
					<a class="nav-item nav-link" href="service.php">SERVICES</a>
					<a class="nav-item nav-link" href="portfolio.php">PORTFOLIO</a>

					<button> <a href="contact.php" class="href-contact">CONTACT US</a>
						<span class="btn-contact"></span>
					</button>
				</div>
			</div>
		</div>
	</nav>
	<!-- akhir navbar -->

	<script>
		$(window).scroll(function(){
			$('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
		});
	</script>
</body>
</html>

