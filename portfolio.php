<?php include 'header2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="simplelightbox-master/dist/simple-lightbox.css?v2.8.0" />
    <style>
        .svg-footer{
			background-color: white !important;
		}
        body {
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            line-height: 34px;
            background-color: #d8d6ff;
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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#151930" 
	fill-opacity="1" d="M0,64L24,96C48,128,96,192,144,181.3C192,171,240,85,288,90.7C336,96,384
	,192,432,202.7C480,213,528,139,576,96C624,53,672,43,720,74.7C768,107,816,181,864,229.3C912,
	277,960,299,1008,288C1056,277,1104,235,1152,202.7C1200,171,1248,149,1296,122.7C1344,96,1392,
	64,1416,48L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,
	0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,
	0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

<body>
<div class="container">
    <h1 class="text-center mt-5">Portfolio</h1>
    <hr>
    <div class="gallery">
        <a href="gambar/full/IMAGE_1.png"><img src="gambar/thumb/IMAGE_1.png" alt="" title="" /></a>
        <a href="gambar/full/IMAGE_2.png"><img src="gambar/thumb/IMAGE_2.png" alt="" title="" /></a>
        <a href="gambar/full/IMAGE_3.png"><img src="gambar/thumb/IMAGE_3.png" alt="" title="" /></a>
        <a href="gambar/full/IMAGE_4.png"><img src="gambar/thumb/IMAGE_4.png" alt="" title="" /></a>
       
       
    </div>
    <br>
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
