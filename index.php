<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT. Salma Mulia">
    <meta name="author" content="Lidya Haning Iqrouri">
	
	<title>PT.Salma Mulia</title>
	<!-- icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="gambar/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="gambar/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="gambar/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="gambar/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="gambar/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="gambar/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="gambar/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="gambar/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="gambar/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="gambar/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="gambar/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="gambar/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="gambar/icon/favicon-16x16.png">
	<link rel="manifest" href="gambar/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="gambar/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sm.css" rel="stylesheet">
	
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<link rel="icon" href="img/icon.png">	
	
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:1400px;
	  height:395px;
      margin: auto;
  }
  </style>
  
</head>

<body>
	<nav class="navbar navbar-default" style="background:#090c2f;">
		<div class="container">
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>                        
	      		</button>
	      		<a class="navbar-brand" href="#index.php" style="font-family:Georgia, serif; font-size:17pt;"><b>PT. Salma mulia</b></a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="myNavbar">
	      		<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman, Times, serif;">
	        		<li><a href="index.php">Beranda</a></li>
	        		<li><a href="dasar.php?page=tentang">Profil</a></li>
	        		<li><a href="dasar.php?page=galeri">Galeri</a></li>
	        		<li><a href="dasar.php?page=kontak">Kontak</a></li>
	      		</ul>
	    	</div>
	  	</div>
		
	</nav>	
	
	<?php
	$page = isset ($_GET['page']) ? $_GET['page'] :null;	/* gets the variable $page */
	if ($page) {
		include("$page.php");
	}
	?>

<!------------------------------------------------- SLIDE ---------------------------------------------->	
<div class="slide">
 <center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gambar/b2.png" alt="">
      </div>

      <div class="item">
        <img src="gambar/b1.png" alt="">
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </center>
</div>

<!---------------- TENTANG ----------------->
<div class="tentang">
<div class="container">
<br>
		<center><h3>PROFIL PERUSAHAAN</h3></center>
		<hr>
		<div class="row">
			<div class="col-sm-3">
				<center><img class="img-responsive img-full" src="gambar/logo.png"></center>
			</div>
			<div class="col-sm-9">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</div>	
</div>

<!---------------- SERVICES ----------------->
<div class="layanan">
<br>
	<div class="container">
		<center><h3>LAYANAN</h3></center><br>
		
		<table border="0" class="table" width="100%">
			<tbody>
					<tr>
						<td width="25%">
						<center><h1><span class="glyphicon glyphicon-heart"></span></h1></center><br>
						<p><font size="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</font></p>
						</td>
						<td width="25%">
						<center><h1><span class="glyphicon glyphicon-music"></span></h1></center><br>
						<p><font size="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</font></p>
						</td>
						<td width="25%">
						<center><h1><span class="glyphicon glyphicon-star"></span></h1></center><br>
						<p><font size="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</font></p>
						</td>
						<td width="25%">
						<center><h1><span class="glyphicon glyphicon-home"></span></h1></center><br>
						<p><font size="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</font></p>
						</td>
					</tr>
				</tbody>
			</table>
	</div>
</div>

		
<!---------------- PARTNER -----------------
<div class="partner">
<br>
	<div class="container">
		<center><h3>PARTNER</h3></center>
		<hr>
		<center>
			<ul>
				<li>
					<img src="gambar/pulau.png" width="150" height="150">
				</li>
				<li>
					<img src="gambar/usia.png" width="150" height="150">
				</li>
				<li>
					<img src="gambar/pulau.png" width="150" height="150">
				</li>
				<li>
					<img src="gambar/usia.png" width="150" height="150">
				</li>
				<li>
					<img src="gambar/pulau.png" width="150" height="150">
				</li>
				<li>
					<img src="gambar/usia.png" width="150" height="150">
				</li>
			</ul>
		</center>
	</div>
</div>

<!-------------- FOOTER -------------->
<div class="footer">
	<div class="row">
	<div class="col-sm-8">
	<h4>PT. SALMA MULIA</h4>
	<table border="0">
		<tbody>
			<tr>
				<td width="25"><span class="glyphicon glyphicon-map-marker"></span></td>
				<td>Jl. Dr. Ratna Raya, Jatikramat, Jatiasih No 49 - Bekasi</td>
			</tr>
			<tr>
				<td width="25"><span class="glyphicon glyphicon-earphone"></span></td>
				<td>021-1234697310</td>
			</tr>
			<tr>
				<td width="25"><span class="glyphicon glyphicon-envelope"></span></td>
				<td>xxxxxx@mail.com</td>
			</tr>
		</tbody>
	</table>
	</div>
	<div class="col-sm-4">
		<p align="right">
			<a href="#" title="Facebook Page"><img src="gambar/fb.png" width="30" height="30"></a>
			<a href="#" title="Twitter Page"><img src="gambar/twitter.png" width="30" height="30"></a>
		</p>
	</div>
	</div>
	
	<div class="hakcipta">
	<p align="center"><br>
		Copyright &#169; 2017 PT. Salma Mulia
	</p>
	</div>
</div>
	
<!------------ Menu Bar tetap -------------->	
<script type='text/javascript'>
	//<![CDATA[
	$(document).ready(function() {
	    var stickyNavTop = $('nav').offset().top;
	    var stickyNav = function(){
	        var scrollTop = $(window).scrollTop();
	        if (scrollTop > stickyNavTop) {
	            $('nav').css({ 'position': 'fixed', 'top':0, 'z-index':9999 }); //untuk tetap berada di atas meski di scroll
	        } else {
	            $('nav').css({ 'position': 'relative' }); //untuk berada di atas header dan tidak menutupi header
	        }
	    };
	    stickyNav();
	    $(window).scroll(function() {
	        stickyNav();
	    });
	});
	//]]>
</script>
	
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>