<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT. Salma Mulia">
    <meta name="author" content="Lidya Haning Iqrouri">
	
	<title>PT.Salma Mulia | Admin</title>
	
	<!-- icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="../gambar/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../gambar/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../gambar/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../gambar/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../gambar/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../gambar/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../gambar/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../gambar/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../gambar/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../gambar/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../gambar/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../gambar/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../gambar/icon/favicon-16x16.png">
	<link rel="manifest" href="../gambar/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../gambar/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/admin2.css" rel="stylesheet">
	
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<link rel="icon" href="img/icon.png">
</head>

<body>
	<?php
		session_start();		
		if(isset($_SESSION['admin']))
		{
		?>
		
	<nav class="navbar navbar-default" style="background:#fff;">
		<div class="container">
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>                        
	      		</button>
	      		<a class="navbar-brand" href="../index.php" style="font-family:Georgia, serif; font-size:16pt;"><b>PT. Salma mulia</b></a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="myNavbar">
	      		<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman, Times, serif;">
	        		<li><a href="index.php"><span class='glyphicon glyphicon-user'></span> Admin</a></li>
	        		<li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' title='Pilihan'><span class='glyphicon glyphicon-menu-hamburger'></span>
						<ul class='dropdown-menu' style='text-transform: none;'>
							<li><a href='dasar.php?page=tambah_galeri' title='Penambahan Foto Galeri'>Tambah Galeri</a></li>
							<li><a href='dasar.php?page=admin_galeri' title='Pengubahan Foto Galeri'>Ubah Galeri</a></li>
							<li><a href='dasar.php?page=ubah_user' title='Mengubah Username & Password'>Ubah Username & Password</a></li>
							<li><a href='dasar.php?page=keluar' title='Keluar' onclick="return confirm('Keluar dari halaman admin?')">Keluar</a></li>
						</ul>
					</li>
	      		</ul>
	    	</div>
	  	</div>
	</nav>
	
	<?php
		}else{
			include("login.php");
		};
	?>
	
	<?php
	$page = isset ($_GET['page']) ? $_GET['page'] :null;	/* gets the variable $page */
	if ($page) {
		include("$page.php");
	}
	?>
	
<!-------------- FOOTER -------------->
<div class="footer">
	<p align="center"><br>
		Copyright &#169; 2017 PT. Salma Mulia
	</p>
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

</body>

</html>