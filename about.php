<?php 
	include 'header2.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>about</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="simplelightbox-master/dist/simple-lightbox.css?v2.8.0" />
	<link rel="stylesheet" href="css/about.css">
	<style>
		.svg-about{
			background-color: #d8d6ff;
		}
		.svg-footer{
			background-color: white !important;
		}
		body {
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            line-height: 34px;
        }

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
<svg class="svg-about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#151930" 
	fill-opacity="1" d="M0,64L24,96C48,128,96,192,144,181.3C192,171,240,85,288,90.7C336,96,384
	,192,432,202.7C480,213,528,139,576,96C624,53,672,43,720,74.7C768,107,816,181,864,229.3C912,
	277,960,299,1008,288C1056,277,1104,235,1152,202.7C1200,171,1248,149,1296,122.7C1344,96,1392,
	64,1416,48L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,
	0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,
	0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

<body>
<div class="jumbotron-fluid about-us">
	<div class="container">
		<div class="row text-center pt-5 mb-5">
				<h3 style="font-weight : 700;">ABOUT US</h3>
				<hr style="color:black;">
		</div>
		<div class="row">
			<div class="col-md-3">
				<hr class="style-atas">
				<h1>Who Are We</h1>
				<p>Central Data Computindo (CDC) is a leading global professional IT services company, 
					providing a wide range of services 
					and solutions in strategy, consulting, IT infrastructure, applications and databases.
				</p>
			</div>
			<div class="col-md-3">
				<hr class="style-atas">
				<h1>Our vision</h1>
				<p>Becoming a Professional, Committed, and Responsible Consulting Service Company.
				</p>
			</div>
			<div class="col-md-3">
				<hr class="style-atas">
				<h1>Our Mission</h1>
				<p>Become a Professional IT Company with optimal solutions and services and have competitiveness. 
					Provide services and solutions 
				that are integrated and follow the development of the world of Information Technology.
				</p>
			</div>
		</div>
	</div>
</div>

<svg class="svg-col-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#d8d6ff " fill-opacity="1" 
		d="M0,32L80,26.7C160,21,320,11,480,48C640,85,800,171,960,186.7C1120,203,1280,149,1360,
		122.7L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

<div class="container gallery-cont">
  <div class="row text-center">
    <h1>Meet Our Team</h1>
	<div class="gallery mt-5">
		<a href="gambar/full/IMG_3880.JPG"><img src="gambar/thumb/IMG_3880.JPG" alt="" title="" /></a>
        <a href="gambar/full/IMG_3905.JPG"><img src="gambar/thumb/IMG_3905.JPG" alt="" title="" /></a>
        <a href="gambar/full/IMG_3925.JPG"><img src="gambar/thumb/IMG_3925.JPG" alt="" title=""/></a>
        <a href="gambar/full/IMG_3929.JPG"><img src="gambar/thumb/IMG_3929.JPG" alt="" title=""/></a>
        <a href="gambar/full/IMG_3943.JPG"><img src="gambar/thumb/IMG_3943.JPG" alt="" title=""/></a>
		<a href="gambar/full/IMG_4025.JPG"><img src="gambar/thumb/IMG_4025.JPG" alt="" title=""/></a>
		<a href="gambar/full/IMG_4044.JPG"><img src="gambar/thumb/IMG_4044.JPG" alt="" title=""/></a>
		<a href="gambar/full/IMG_4064.JPG"><img src="gambar/thumb/IMG_4064.JPG" alt="" title=""/></a>

	
    </div>
  </div>

</div>
<script src="simplelightbox-master/dist/simple-lightbox.js?v2.8.0"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>
</body>
<?php include 'footer.php'; ?>
</html>